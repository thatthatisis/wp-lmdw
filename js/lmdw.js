function setHeight()
{
	var
		viewportHeight = document.documentElement.clientHeight,
		headerHeight = $('#headerCell').height(),
		maxHeight = 756,
		bodyHeight,
		$body = $('#body'),
		bodyVerticalPadding;
	bodyVerticalPadding =
			parseInt($body.css('padding-top')) +
			parseInt($body.css('padding-bottom'));
	bodyHeight = Math.min(
			viewportHeight - headerHeight - bodyVerticalPadding,
			maxHeight - headerHeight - bodyVerticalPadding);
	$body.height(bodyHeight - 4);
}

$( document ).ready(function()
{
	setHeight();
});

$(window).resize(setHeight);
