define(
	[
		'jquery', 
	], 
	function ($) {
		var $sticky = $('.sticky-header');
		
		$(document).on('scroll', function(event) {
			var scrollTop = $(window).scrollTop();
			console.log('scroll', scrollTop);
			if (scrollTop > 50) {
				$sticky.css('position', 'fixed');
			} else if (scrollTop <= 50) {
				$sticky.css('position', 'static');
			}
		});
	}
);