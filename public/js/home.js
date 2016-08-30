var nav = $("nav");
var homeSplash = $("#homesplash");
var homeSplashHeight = homeSplash.height();
var opa, negOpa;
var leftButton = $("#home_splash_button-left");
var rightButton = $("#home_splash_button-right");
var count = 1;
var text1 = $("#text1");
var text2 = $("#text2");
var text3 = $("#text3");
var timer = setInterval(splashTimer, 10000);
// $(window).scroll(function() {
//   if($(this).scrollTop() > 0) {
//     nav.removeClass(scrolled);
//   }
//   else {
//     nav.addClass(scrolled);
//     opa = 1 - ($(this).scrollTop() / window.innerHeight * 20);
//     negOpa = 1 - opa;
//     navSplash.css("opacity", opa);
//     navSection.css("opacity", negOpa);
//   }
// });

$(window).scroll(function() {
  if($(this).scrollTop() > 0) {
    nav.css("background", "#3F51B5");
  }
  else{
    nav.css("background", "transparent");
  }
});

leftButton.click(function() {
	window.clearTimeout(splashTimer);
	count--;
	if(count<1){
		count = 3;
	}
	if(count == 1){
		text3.css("display", "none");
		text2.css("display", "none");
		text1.css("display", "block");
	}
	if(count == 2){
		text3.css("display", "none");
		text1.css("display", "none");
		text2.css("display", "block");
	}
	if(count == 3){
		text2.css("display", "none");
		text1.css("display", "none");
		text3.css("display", "block");
	}
});

rightButton.click(function() {
	window.clearTimeout(splashTimer);
	count++
	if(count>3){
		count = 1;
	}
	if(count == 1){
		text3.css("display", "none");
		text2.css("display", "none");
		text1.css("display", "block");
	}
	if(count == 2){
		text3.css("display", "none");
		text1.css("display", "none");
		text2.css("display", "block");
	}
	if(count == 3){
		text2.css("display", "none");
		text1.css("display", "none");
		text3.css("display", "block");
	}
});

$(".button--splash").click(function() {
  $('html,body').animate({
        scrollTop: homeSplashHeight},
        'slow');
});

function splashTimer() {
    count++
	if(count>3){
		count = 1;
	}
	if(count == 1){
		text3.css("display", "none");
		text2.css("display", "none");
		text1.css("display", "block");
	}
	if(count == 2){
		text3.css("display", "none");
		text1.css("display", "none");
		text2.css("display", "block");
	}
	if(count == 3){
		text2.css("display", "none");
		text1.css("display", "none");
		text3.css("display", "block");
	}
}