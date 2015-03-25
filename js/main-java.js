//Show LL images and the text in between

$("#banner-headline-image-left").delay(4000).fadeIn(1000);
$("#banner-headline-text").delay(4300).fadeIn(1300);
$("#banner-headline-image-right").delay(4600).fadeIn(1000);

/*
$(".navigation-mobile-menu").toggle(function() {
	$(".navigation-mobile-menu-closed").slideDown(800);
*/


$(".navigation-mobile-menu").click(function() {
	
	$(".navigation-mobile-menu-closed").slideToggle("slow", function() {
		
		var openMobileMenu = "+";
		var closeMobileMenu = "-";
		
		if ($(".navigation-mobile-menu").text() === openMobileMenu){
			$(".navigation-mobile-menu").html(closeMobileMenu);
		} else {
			$(".navigation-mobile-menu").html(openMobileMenu);
		}

/*
		$(".navigation-mobile-menu").html("&nbsp;&diams;&nbsp;");
		$(".navigation-mobile-menu").html("&nbsp;&loz;&nbsp;");
*/

	});
			
});

/*
	$(".navigation-mobile-menu-closed").slideDown(800);	
	$(".navigation-mobile-menu").html("&nbsp;&diams;&nbsp;");
	$(".navigation-mobile-menu").addClass("navigation-mobile-menu-clicked");
*/
//});
/*

$(".button-grey-gradient").click(function() {

	$(".navigation-mobile-menu-closed").html("hggh");	
	$(".navigation-mobile-menu").html("&nbsp;&loz;&nbsp;");
});
*/
