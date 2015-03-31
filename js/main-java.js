//Show LL images and the text in between

$("#banner-headline-image-left").delay(4000).fadeIn(1000);
$("#banner-headline-text").delay(4300).fadeIn(1300);
$("#banner-headline-image-right").delay(4600).fadeIn(1000);


// Mobile version of main menu, dropdown menu
$(".navigation-mobile-menu").click(function() {
	
	$(".navigation-mobile-menu-closed").slideToggle("slow", function() {
		
		var openMobileMenu = "+";
		var closeMobileMenu = "-";
		
		if ($(".navigation-mobile-menu").text() === openMobileMenu){
			$(".navigation-mobile-menu").html(closeMobileMenu);
		} else {
			$(".navigation-mobile-menu").html(openMobileMenu);
		}

	});
			
});

// Adjust the down arrow top position based on display viewport height
var viewportHeight = $(window).height();
$(".arrow-down-clearfix").css("top", viewportHeight - 70);

//Actions based on scrolling for the side.
window.onscroll = scrollEffects;

function scrollEffects () {
	// Turn header to solid color from transparent
	if (window.pageYOffset > 73) {
		$("header").css("background-color", "#fff").css("transition-duration", "0.5s");
		
		} else {
		
		$("header").css("background-color", "rgba(0,0,0,0.0)");
	}
	
	// Hide the the down arrow when user scroll the page or if the page is not at the top.
	var scroll = $(window).scrollTop();
	if (window.pageYOffset > 5) {
		$(".arrow-down-clearfix").fadeOut(1000);
	} 
	if (scroll > 80) {
		$(".arrow-down-clearfix").css("display", "none");
	 }
}
















