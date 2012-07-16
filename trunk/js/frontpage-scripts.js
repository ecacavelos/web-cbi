// JavaScript Document
$(document).ready(function() {
	// executes when HTML-Document is loaded and DOM is ready
	$("body").css("display", "none");
});

$(window).load(function() {
	// executes when complete page is fully loaded, including all frames, objects and images
	//$("body").fadeIn(750);
	$("body").show();
	var button_height_claro = $("img.claro").height();
	var button_height_oscuro = $("img.oscuro").height();
	
	$("a.transition-up").click(function(event){
		var clicked = $(this);
        event.preventDefault();
        linkLocation = this.href;
        //$("body").fadeOut(750, redirectPage);
		
		$("#logo").animate({left: '5%'}, 500);
		
		if(clicked.hasClass('b1')){
			$("img.b1").animate({height: button_height_claro}, 500);
			$("img.b1").attr("src","images/boton-empresa.png");
			
			$("img.b2").animate({height: '19'}, 500);
			$("img.b2").attr("src","images/boton-oscuro.png");
			$("img.b3").animate({height: '19'}, 500);
			$("img.b3").attr("src","images/boton-claro.png");
			$("img.b4").animate({height: '19'}, 500);
			$("img.b4").attr("src","images/boton-oscuro.png");
			$("img.b5").animate({height: '19'}, 500);
			$("img.b5").attr("src","images/boton-claro.png");
		}
		else if(clicked.hasClass('b2')){
			$("img.b2").animate({height: button_height_oscuro}, 500);
			$("img.b2").attr("src","images/boton-servicios.png");
			
			$("img.b1").animate({height: '19'}, 500);
			$("img.b1").attr("src","images/boton-claro.png");
			$("img.b3").animate({height: '19'}, 500);
			$("img.b3").attr("src","images/boton-claro.png");
			$("img.b4").animate({height: '19'}, 500);
			$("img.b4").attr("src","images/boton-oscuro.png");
			$("img.b5").animate({height: '19'}, 500);
			$("img.b5").attr("src","images/boton-claro.png");
		}
		else if(clicked.hasClass('b3')){
			$("img.b3").animate({height: button_height_claro}, 500);
			$("img.b3").attr("src","images/boton-desarrollo.png");
			
			$("img.b1").animate({height: '19'}, 500);
			$("img.b1").attr("src","images/boton-claro.png");
			$("img.b2").animate({height: '19'}, 500);
			$("img.b2").attr("src","images/boton-oscuro.png");
			$("img.b4").animate({height: '19'}, 500);
			$("img.b4").attr("src","images/boton-oscuro.png");
			$("img.b5").animate({height: '19'}, 500);
			$("img.b5").attr("src","images/boton-claro.png");
		}
		else if(clicked.hasClass('b4')){
			$("img.b4").animate({height: button_height_oscuro}, 500);
			$("img.b4").attr("src","images/boton-clientes.png");
			
			$("img.b1").animate({height: '19'}, 500);
			$("img.b1").attr("src","images/boton-claro.png");
			$("img.b2").animate({height: '19'}, 500);
			$("img.b2").attr("src","images/boton-oscuro.png");
			$("img.b3").animate({height: '19'}, 500);
			$("img.b3").attr("src","images/boton-claro.png");
			$("img.b5").animate({height: '19'}, 500);
			$("img.b5").attr("src","images/boton-claro.png");
		}
		else if(clicked.hasClass('b5')){
			$("img.b5").animate({height: button_height_claro}, 500);
			$("img.b5").attr("src","images/boton-contacto.png");
			
			$("img.b1").animate({height: '19'}, 500);
			$("img.b1").attr("src","images/boton-claro.png");
			$("img.b2").animate({height: '19'}, 500);
			$("img.b2").attr("src","images/boton-oscuro.png");
			$("img.b3").animate({height: '19'}, 500);
			$("img.b3").attr("src","images/boton-claro.png");
			$("img.b4").animate({height: '19'}, 500);
			$("img.b4").attr("src","images/boton-oscuro.png");
		}
				
		$("#main-section").animate({top: '7%'}, 500, redirectPage);
    });
	
	function redirectPage() {
        window.location = linkLocation;
		//$("#main-section").css("top", "40%");
    }

	window.addEventListener("load", displayPage, false);
	window.addEventListener("unload", displayPage, false);
	
});

function displayPage() {
	//alert("holo");
}
