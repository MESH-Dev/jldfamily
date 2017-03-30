jQuery(document).ready(function($){

	//Are we loaded?
	console.log('New theme loaded!');

	//Let's do something awesome!

	// Controls the height for all content column items
	// var contentColumns = document.getElementsByClassName('content_columns');
	// var contentContainerHeight = document.getElementById('content_container').clientHeight;
	// var viewWidth = document.documentElement.clientWidth;

	// if(viewWidth > 750){
	// 	for (var i = 0; i < contentColumns.length; i++) {
	// 		contentColumns[i].style.height = contentContainerHeight + "px";
	// 	}
	// }

	$('.slider_container').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		//asNavFor: '.imgslider',
		dots: true,
		speed: 2000,
		infinite: true,
	 	autoplay: true,
	 	autoplaySpeed: 2000,
		arrows: false,
		fade: true,
		cssEase: 'ease-in-out',
		pauseOnHover: true,
		pauseOnFocus: true,
		pauseOnDotsHover: true
	});

	// $('.imgslider').slick({
	// 	slidesToShow: 1,
	// 	slidesToScroll: 1,
	// 	asNavFor: '.textslider',
	// 	arrows: false,
	// 	dots: true,
	// 	appendDots: $('.slider_container'),
	// 	autoplay: true,
	// 	autoplaySpeed: 8000
	// });
	// $('.textslider').slick({
	// 	slidesToShow: 1,
	// 	slidesToScroll: 1,
	// 	asNavFor: '.imgslider',
	// 	arrows: false,
	// 	fade: true,
	// 	cssEase: 'ease-in-out'
	// });

	//Show/Hide for nav (public/private) @mobile resolution
	$('#mobile_menu').click(function(){
		$('.menu').slideToggle();
		$('#mobile_menu').toggleClass('closed opened');
	});
});
