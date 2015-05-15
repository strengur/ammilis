//Show LL images and the text in between

// $("#banner-headline-image-left").delay(3000).fadeIn(1000);
$(".banner-headline").delay(2300).fadeIn(1300);
// $("#banner-headline-image-right").delay(4600).fadeIn(1000);


// Mobile version of main menu, dropdown menu
$(".navigation-mobile-menu").click(function() {

	$(".navigation-mobile-menu img").toggle();
	$("header").css("background-color", "#fff").css("transition-duration", "0.5s");

	$(".navigation-mobile-menu-closed").slideToggle("slow");

});

// Adjust the down arrow top position based on display viewport height
var viewportHeight = $(window).height();
$(".arrow-down-clearfix").css("top", viewportHeight - 70);

//Actions based on scrolling for the side.
window.onscroll = scrollEffects;

function scrollEffects () {
	// Turn header to solid color from transparent
	if (window.pageYOffset > 33) {
		$("header").css("background-color", "#fff").css("transition-duration", "0.5s");

		} else {

		$("header").css("background-color", "rgba(255,255,255,0.5)");
	}

	// Hide the down arrow when user scroll the page or if the page is not at the top.
	var scroll = $(window).scrollTop();
	if (window.pageYOffset > 5) {
		$(".arrow-down-clearfix").fadeOut(1000);
	}
	if (scroll > 80) {
		$(".arrow-down-clearfix").css("display", "none");
	}

}

// Background image scroll.
$(document).ready(function(){
	$('div[data-type="background"]').each(function(){
		var $bgobj = $(this); // assigning the object
		var $window = $(window);
		$(window).scroll(function() {

		var yPos = -( ($window.scrollTop() - $bgobj.offset().top) / $bgobj.data('speed'));

		// Put together our final background position
		var coords = '50% '+ yPos + 'px';

		// Move the background
		$bgobj.css({ backgroundPosition: coords });
		});
	});
});

document.getElementById('input_1_4').focus();

