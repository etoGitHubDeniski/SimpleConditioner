import '/js/scroll-timeline.js';

$(document).ready(function () {
	// Scroll Events
	$(window).scroll(function () {

		var wScroll = $(this).scrollTop();

		// Activate menu
		if (wScroll > 20) {
			$('#main-nav').addClass('active');
			$('#menu-close').addClass('active');
		}
		else {
			$('#main-nav').removeClass('active');
			$('#menu-close').removeClass('active');
		};

		//Scroll Effects

	});

	// Navigation
	$('#navigation').on('click', function (e) {
		e.preventDefault();
		$('#body').toggleClass('open');
		$('#menu').toggleClass('open');
		$('#progress').toggleClass('open');

		if ($('#menu').hasClass('open')) {
			$('.menu-close').on('click', function (e) {
				$('#menu').removeClass('open');
				$('#body').removeClass('open');
				$('#progress').removeClass('open');
			})
			$('.menu-close-button').on('click', function (e) {
				e.preventDefault();
				$('#menu').removeClass('open');
				$('#body').removeClass('open');
				$('#progress').removeClass('open');
			})
		}
	});

	//Progress Bar
	// Create ScrollTimeline
	const myScrollTimeline = new ScrollTimeline({
		source: document.scrollingElement,
		scrollSource: document.scrollingElement, // For legacy implementations
		orientation: 'block',
		scrollOffsets: [
			new CSSUnitValue(0, 'percent'),
			new CSSUnitValue(100, 'percent'),
		],
	});
	// Animate Progress Bar on Scroll
	new Animation(
		new KeyframeEffect(
			document.querySelector('#progress'),
			{
				transform: ['scaleX(0)', 'scaleX(1)'],
			},
			{ duration: 1, fill: "forwards" }
		),
		myScrollTimeline
	).play();

});
