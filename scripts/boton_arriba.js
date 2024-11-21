$(document).ready(function(){

	$('.boton_arriba1').click(function(){
		$('body, html').animate({
			scrollTop: '0px'
		}, 650);
	});

	$(window).scroll(function(){
		if( $(this).scrollTop() > 0 ){
			$('.boton_arriba1').slideDown(300);
		} else {
			$('.boton_arriba1').slideUp(300);
		}
	});

});


