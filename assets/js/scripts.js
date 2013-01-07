$(document).ready(function() {

	// this could *easily* be handled in vanila JavaScript, but pushState and :target do not play nice together
	// bug report --> https://bugs.webkit.org/show_bug.cgi?id=83490

	$("a[href^=#]").on("click", function(e) {
		e.preventDefault();
		history.pushState({}, "", this.href);
	});

	$('.get-personal-button').on('click', function(event) {
		event.preventDefault();
		$('#get-personal').addClass('visible');
	});

	$('.get-professional-button').on('click', function(event) {
		event.preventDefault();
		$('#get-personal').removeClass('visible');
	});

	// prject legend hovers
	
	$('.project-type-legend').on('mouseover', 'li', function() {
		$('.my-projects').addClass('highlight-' + $(this).data('project-type'));
	});

	$('.project-type-legend').on('mouseout', 'li', function() {
		$('.my-projects').removeClass('highlight-' + $(this).data('project-type'));
	});

});