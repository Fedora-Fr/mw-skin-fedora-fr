/**
 * Add tooltip
 *
 * <code>
 * $("a").fedoraTooltip();
 * </code>
 */
$.fn.fedoraTooltip = function ()
{
	return this.tipsy({
		delayIn: 0,
		delayOut: 0
	});
};



/**
 * Action to make on document ready
 */
$(document).ready
(function(){
	// ToolTip
	$('a[rel!="lightbox"]').fedoraTooltip();
});
