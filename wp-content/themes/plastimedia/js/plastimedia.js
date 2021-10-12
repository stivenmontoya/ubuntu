	 $(document).ready(function() {
	/* Ir arriba */
	$('#ir-arriba').click(function(){
		$('body, html').animate({
			scrollTop: '0px'
		}, 300);
	});

	$(window).scroll(function(){
		if( $(this).scrollTop() > 0 ){
			$('#ir-arriba').fadeIn(300);
		} else {
			$('#ir-arriba').fadeOut(300);
		}
	});

	// $(".header").sticky({ topSpacing: 0, className: 'fijo', zIndex: 100 });

	// cuando sea móvil no coloque la clase fijo
		// if ($(window).width() > 1024) {
		// 	$(".header").sticky({ topSpacing: 0, className: 'fijo', zIndex: 100 });
		// }


	// JS del menu
	jQuery("#menu_chk").change(function () {   //Funcion para mostrar u ocultar el menu de la versión de moviles
		if(jQuery("#menu_chk").is(':checked')){
			jQuery( ".menu-ppl" ).addClass( "verMenu" );  // checked
			jQuery( "#btn_menu" ).addClass( "btn_activo" );  // checked
		}
		else {
			jQuery( ".menu-ppl" ).removeClass( "verMenu" );  // unchecked
			jQuery( "#btn_menu" ).removeClass( "btn_activo" );  // unchecked
		}
	})



     // Funcion para permitir la animación completa
 	$('.menu-ppl > ul > li').hover(function() {
  		$(this).addClass('in-hover').delay(210).queue(function() {
  			$(this).removeClass('in-hover').clearQueue();
  		});
  	});

	// quitarle el autocomplete al formulario de contacto
	$('.hugeit_form').attr('autocomplete','off');
	$('#hugeit_preview_textbox_17').val('');

	/* Parallax scrolling */
	$(window).bind('scroll',function(e){
		parallaxScroll();
	});
	/* Scroll the background */
	function parallaxScroll(){
		if ($(window).width() > 768) {
			var scrolled = $(window).scrollTop();
			var ventana = $(window).height();
			if ($('.paralax').offset()) {
				var div = $('.paralax').offset();
				div = div.top;
			}
			$('.img-paralax').css('top',( (scrolled - div)*0.2 )+'px');
		}
	}

	/* jQuery propio para tener la misma altura en diferentes div */
	function altura() {

		if ( $( window ).width() > 600 ) {
			var altomax = 0;
			$('.category-post-area').each(function(){
				if($(this).height() > altomax){
					altomax = $(this).height();
				}
			});

			$('.category-post-area').height(altomax);

			var altomax = 0;

			$('.post-area').each(function(){
				if($(this).height() > altomax){
					altomax = $(this).height();
				}
			});

			$('.post-area').height(altomax);

			var alt = 0;

			$('.servicios .wg-servicio').each(function(){
				if($(this).height() > alt){
					alt = $(this).height();
				}
				$('.servicios .wg-servicio').height(alt);
			});
		}
	}

	altura();
	
	$( window ).resize(function() {
		altura();
	});




	// slider

	function sliderm(x) {
		if (x.matches) { //si ya esta en el mediaquery
			$(".contenedor-slide").css("display","none");
			$(".contenedor-slide-mobil").css("display","block");
		} else {
			$(".contenedor-slide").css("display","block");
			$(".contenedor-slide-mobil").css("display","none");
		}
	}

	var x = window.matchMedia("(max-width: 728px)")
	sliderm(x) // Call listener function at run time
	x.addListener(sliderm) // Attach listener function on state changes

});
