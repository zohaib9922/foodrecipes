/**
 * WordPress dependencies
 */
import { useEffect } from '@wordpress/element'
import { useDispatch, useSelect } from '@wordpress/data'
import { store as blockEditorStore } from '@wordpress/block-editor'

/**
 * We can't just use <BlockSelectionClearer> because the customizer has
 * many root nodes rather than just one in the post editor.
 * We need to listen to the focus events in all those roots, and also in
 * the preview iframe.
 * This hook will clear the selected block when focusing outside the editor,
 * with a few exceptions:
 * 1. Focusing on popovers.
 * 3. Focusing on any modals/dialogs.
 * These cases are normally triggered by user interactions from the editor,
 * not by explicitly focusing outside the editor, hence no need for clearing.
 *
 * @param {Object} sidebarControl The sidebar control instance.
 * @param {Object} popoverRef     The ref object of the popover node container.
 */
export default function useClearSelectedBlock(sidebarControl, popoverRef) {
	const { hasSelectedBlock, hasMultiSelection } = useSelect(blockEditorStore)
	const { clearSelectedBlock } = useDispatch(blockEditorStore)

	useEffect(() => {
		function handleClearSelectedBlock(element) {
			if (!popoverRef.current || !sidebarControl) {
				return
			}

			if (
				// 1. Make sure there are blocks being selected.
				(hasSelectedBlock() || hasMultiSelection()) &&
				// 2. The element should exist in the DOM (not deleted).
				element &&
				document.contains(element) &&
				!popoverRef.current.contains(element) &&
				!element.closest('[role="dialog"]') &&
				!element.closest('[role="toolbar"]') &&
				!element.closest('.components-popover__content') &&
				!element.closest('.ct-panel-second-level') &&
				!element.closest('.wp-block-legacy-widget__edit-form')
			) {
				clearSelectedBlock()
			}
		}

		function handleMouseDown(event) {
			handleClearSelectedBlock(event.target)
		}

		function handleBlur() {
			handleClearSelectedBlock(document.activeElement)
		}

		document.addEventListener('mousedown', handleMouseDown)
		window.addEventListener('blur', handleBlur)

		return () => {
			document.removeEventListener('mousedown', handleMouseDown)
			window.removeEventListener('blur', handleBlur)
		}
	}, [
		popoverRef,
		sidebarControl,
		hasSelectedBlock,
		hasMultiSelection,
		clearSelectedBlock,
	])
}
