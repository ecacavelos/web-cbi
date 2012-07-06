// JavaScript Document
$(document).ready(function() {
	// executes when HTML-Document is loaded and DOM is ready
	$("body").css("display", "none");
});

$(window).load(function() {
	// executes when complete page is fully loaded, including all frames, objects and images	
	//$("body").fadeIn(750);
	$("body").show();
	$("#text-area").hide();
	$("#footer-line").hide();
	$("#text-area").fadeIn(750);
	$("#footer-line").fadeIn(750);
	
	var button_height_claro = $("img.claro").height()
	var button_height_oscuro = $("img.oscuro").height();
	$("img.claro").css("height", "19px");
	$("img.oscuro").css("height", "19px");
		
	$("img.claro").hover(	
		function () {
			if($(this).hasClass('b1') == false) {
				//$(this).animate({height: '70%'}, 500);
				curHeight = $(this).height(),
				autoHeight = $(this).css('height', 'auto').height();
				$(this).height(curHeight).animate({height: autoHeight}, 500);
				if($(this).hasClass('b3')) {
					$(this).attr("src","images/boton-proyectos.png");
				}
				if($(this).hasClass('b5')) {
					$(this).attr("src","images/boton-contacto.png");
				}
			}
		}, 
		function () {
			if($(this).hasClass('b1') == false) {
				$(this).animate({height: '19px'}, 500);
				$(this).attr("src","images/boton-claro.png");
			}
		}
	);
	
	$("img.oscuro").hover(	
		function () {
			//$(this).animate({height: '65%'}, 500);
			curHeight = $(this).height(),
			autoHeight = $(this).css('height', 'auto').height();
			$(this).height(curHeight).animate({height: autoHeight}, 500);
			if($(this).hasClass('b2')) {
				$(this).attr("src","images/boton-servicios.png");
			}
			if($(this).hasClass('b4')) {
				$(this).attr("src","images/boton-clientes.png");
			}		
		}, 
		function () {
			$(this).animate({height: '19px'}, 500);
			$(this).attr("src","images/boton-oscuro.png");
		}
	);
	
	$("a.transition-out").click(function(event){
		var clicked = $(this);
        event.preventDefault();
        linkLocation = this.href;
        //$("body").fadeOut(750, redirectPage);
		
		$("#logo").animate({left: '45%'}, 500);
		$("#main-section").animate({top: '40%'}, 500);
		$("#footer-line").animate({opacity: '0%'}, 500);
		$("#text-area").animate({opacity: '0%'}, 500, redirectPage);
    });
	
	window.addEventListener("load", displayPage, false);
	window.addEventListener("unload", displayPage, false);
	
	function redirectPage() {
        window.location = linkLocation;
		//$("#main-section").css("top", "40%");
    }
	
});

function displayPage() {

}
