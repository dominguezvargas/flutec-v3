$(document).ready(function() {
	var $container = $('#tile-wrapper');
	$container.isotope({
		itemSelector : '.isotope-elements',
		masonry : {
		columnWidth : 10,
		cornerStampSelector: '.calendar-title'
		},
		animationOptions: {
			duration: 750,
			easing: 'linear',
			queue: false, 
		}
	});
	$('#filters a').click(function(){
		var selector = $(this).attr('data-filter');
		$container.isotope({ filter: selector });
		return false;
	});
});