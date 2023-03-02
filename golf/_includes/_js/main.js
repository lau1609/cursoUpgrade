// JavaScript Document

/* PREPARATIVOS */	


var isMobile = false; //initiate as false
// device detection
if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) 
    || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))) isMobile = true;

	// Touch or Click Definimos si se usará click o Touch según disponibilidad // touchstart
	var clickHandler = ('ontouchstart' in document.documentElement ? "touchend" : "click");
	var touchmoved;
	if ('ontouchstart' in document.documentElement){ document.addEventListener("touchstart", function(){}, false); /*var touchSet = true;*/ }

	/* EJEMPLO 

	$(document).on(clickHandler, "SELECTOR", function(){		
		if(!touchmoved){	
			
			CODIGO
		
			
		}
	}).on('touchmove', function(e){
		touchmoved = true;
	}).on('touchstart', function(){
		touchmoved = false;
	});*/
	
	// Long Tab or Click Derecho
	var tapHandler = ('ontouchstart' in document.documentElement ? "taphold" : "contextmenu");
	
	if(!isMobile)
		{
		   clickHandler = 'click';
		   tapHandler = 'contextmenu';
		}


$(document).ready(function() {
    "use strict";
	

});



$(document).on('click', "#cbox1", function(e){
	if (document.getElementById('cbox1').checked){
	$('.not-visible').addClass('is-visible');
	$('.inp-desp').addClass('deploy');
	} else{
		$('.not-visible').removeClass('is-visible');
		$('.inp-desp').removeClass('deploy');
	}
});


$(document).on('click', ".inp-check", function(e){
	if (document.getElementById('cboxG').checked){
	$('.golf-inp').addClass('is-visible');
	/* $('.inp-desp').addClass('deploy'); */
	} else{
		$('.golf-inp').removeClass('is-visible');
		/* $('.inp-desp').removeClass('deploy'); */
	}
});

$(document).on('click', ".check-cboxPD", function(e){
	console.log('cboxp');
	$('.pop-act').removeClass('is-visible');
	if (document.getElementById('cboxP').checked){
	$('.desp-sec1').addClass('is-visible');
	$('.desp-sec2').removeClass('is-visible');
	} else {
		console.log('cboxd');
		$('.desp-sec2').addClass('is-visible');
		$('.desp-sec1').removeClass('is-visible');
		/* $('.inp-desp').removeClass('deploy'); */
	}
});
let cont = "";
let click = 0;

$(document).on('click', ".cboxp", function(e){
	console.log('section1');
	var radios=$.trim($(".cboxp:checked").val());

	$(radios).val();
/* console.log(radios); */
switch (radios) {
	case '1':
		click = 1;
		/* console.log('case 1'); */
		cont = '<h4>Plata incluye</h4>'+
		'<p>1.- Asistencia de 1 persona al torneo.</p>'+
		'<p>2.- Logo en lonas oficiales del torneo.</p>';

		activePD();
		break;

	case '2':
		click = 1;
	/* console.log('case 2'); */
		cont = '<h4>BRONCE INCLUYE</h4>'+
		'<p>1.- Asistencia de 1 persona al torneo.</p>';

		activePD();
		break;

	case '3':
		click = 1;
		$('#inp-can').addClass('is-visible');
		$('.pop-act').removeClass('is-visible');
		$(".pop-act").html('');
		break;
	
	case '4':
		click = 1;
		/* console.log('case 4'); */
		cont = '<h4>EL CENTURIÓN INCLUYE.</h4>'+
		'<p>1.- Logotipo en lonas y rueda de prensa.</p>'+
		'<p>2.- Participación en rueda de prensa.</p>'+
		'<p>3.- Espacio para un stand durante el evento.</p>'+
		'<p>4.- 7 lonas de su empresa en el campo de golf.</p>'+
		'<p>5.- Sponsor del hoyo de su elección (Sujeto a disponibilidad).</p>'+
		'<p>6.- Podrá llevar 2 edecanes.</p>'+
		'<p>6.- Hasta 4 participantes.</p>';

		activePD();
		break;
	
	case '5':
		click = 1;
		/* console.log('case 5'); */
		cont = '<h4>EL DIAMANTE INCLUYE</h4>'+
		'<p>1.- Logotipo en lonas y rueda de prensa.</p>'+
		'<p>2.- Participación en rueda de prensa.</p>'+
		'<p>3.- Espacio para un stand durante el evento.</p>'+
		'<p>4.- 5 lonas de la empresa en el campo de golf.</p>'+
		'<p>5.- Sponsor del hoyo de su elección (Sujeto a disponibilidad).</p>'+
		'<p>6.- Podrá llevar 2 edecanes.</p>'+
		'<p>6.- Hasta 3 participantes.</p>';

		activePD();
		break;

	case '6':
		click = 1;
		/* console.log('case 6'); */
		cont = '<h4>EL PLATINO INCLUYE</h4>'+
		'<p>1.- Logotipo en lonas y rueda de prensa.</p>'+
		'<p>2.- Participación en rueda de prensa.</p>'+
		'<p>3.- Espacio para un stand durante el evento.</p>'+
		'<p>4.- 4 lonas de la empresa en el campo de golf.</p>'+
		'<p>5.- Sponsor del hoyo de su elección (Sujeto a disponibilidad).</p>'+
		'<p>6.- Podrá llevar 2 edecanes.</p>'+
		'<p>6.- Hasta 2 participantes.</p>';
		activePD();
		break;

	case '7':
		click = 1;
		/* console.log('case 7'); */
		cont = '<h4>EL ORO INCLUYE</h4>'+
		'<p>1.- Logotipo en lonas y rueda de prensa.</p>'+
		'<p>2.- 3 lonas de su empresa en el campo de Golf.</p>'+
		'<p>3.- Hasta 2 participantes.</p>';
		activePD();
		break;

	case '8':
		click = 1;
		$('#inp-can2').addClass('is-visible');
		$('.pop-act').removeClass('is-visible');
		$(".pop-act").html('');
		break;
}
	
	
});


function activePD(){
	console.log(click+' el click');
	$(".pop-act").html(cont);
	$('.pop-act').addClass('is-visible');
}


$(document).on('click', ".inp-pay", function(e){
	if (document.getElementById('pay-dep').checked){
		$('.dep').addClass('is-visible');
		$('.trans').removeClass('is-visible');
	} else{
		$('.trans').addClass('is-visible');
		$('.dep').removeClass('is-visible');
	}
});


let precio = new Array();
$(document).on('click', ".inp-hotel", function(e){
	
	
	/* console.log('section1'); */
	var option=$.trim($(".inp-hotel:checked").val());

	$(option).val();
/* console.log(option); */
switch (option) {
	case '1':
		click = 1;
		/* console.log('case 1'); */
		precio.push(
		'<input type="radio" class="inp-hotel" name="hotel"><span class="bold"> Sencilla/Single</span> $1,400.00 mxn Pesos + Impuestos/Taxes', 
		'<input type="radio" class="inp-hotel" name="hotel"><span class="bold">Doble/Double </span> $1,400.00 mxn Pesos + Impuestos/Taxes');
		popHotel(precio);
		break;

	case '2':
		click = 1;
	/* console.log('case 2'); */
		
		precio.push(
		'<input type="radio" class="inp-hotel" name="hotel"><span class="bold"> Sencilla/Single</span> $1,380.00 mxn Pesos + Impuestos/Taxes', 
		'<input type="radio" class="inp-hotel" name="hotel"><span class="bold">Doble/Double </span> $1,380.00 mxn Pesos + Impuestos/Taxes');

		popHotel(precio);
		break;

	case '3':
		click = 1;
		precio.push(
		'<input type="radio" class="inp-hotel" name="hotel"><span class="bold"> Sencilla/Single</span> $1,700.00 mxn Pesos + Impuestos/Taxes', 
		'<input type="radio" class="inp-hotel" name="hotel"><span class="bold">Doble/Double </span> $1,900.00 mxn Pesos + Impuestos/Taxes');
		popHotel(precio);
		break;
	
	case '4':
		click = 1;
		/* console.log('case 4'); */
		precio.push(
			'<input type="radio" class="inp-hotel" name="hotel"><span class="bold"> Sencilla/Single</span> $1,419.00 mxn Pesos + Impuestos/Taxes', 
			'<input type="radio" class="inp-hotel" name="hotel"><span class="bold">Doble/Double </span> $1,548.00 mxn Pesos + Impuestos/Taxes');

		popHotel(precio);
		break;
	
	case '5':
		click = 1;
		$('.ali-pop-hotel').removeClass('is-visible');
		$('.pop-hotel').removeClass('is-visible');
		$('.boxR').removeClass('is-visible');
		$("#op1").html('');
		$("#op2").html('');
		break;
}
	
	
});

function popHotel(precio){
	$('.ali-pop-hotel').removeClass('is-visible');
	$('.pop-hotel').removeClass('is-visible');
	$('.boxR').removeClass('is-visible');
	$("#op1").html('');
	$("#op2").html('');

	setTimeout(function(){ 
	/* console.log(precio); */
	$('.ali-pop-hotel').addClass('is-visible');
	$('.pop-hotel').addClass('is-visible');
	$('.boxR').addClass('is-visible');
	$("#op1").html(precio[0]);
	$("#op2").html(precio[1]);}, 200);

}

$(document).on('click', "#transportY", function(e){
	if (document.getElementById('transportY').checked){
	$('.ali-transport').addClass('is-visible');
	$('.text-trans').addClass('is-visible');
	/* $('.inp-desp').addClass('deploy'); */
	} else{
		$('.ali-transport').removeClass('is-visible');
		$('.text-trans').removeClass('is-visible');
		/* $('.inp-desp').removeClass('deploy'); */
	}
});

$(document).on('click', "#check", function(e){
	if (document.getElementById('check').checked){
	$('.tour').addClass('is-visible');
	/* $('.inp-desp').addClass('deploy'); */
	} else{
		$('.tour').removeClass('is-visible');
		/* $('.inp-desp').removeClass('deploy'); */
	}
});



$(document).on('submit','#form',function(e){
	"use strict";
	console.log("Enviando");	
			// Variable que contiene la solicitud
			var request;
			// Establecemos la variable del Formulario
			var $form = $(this);
		
			// Seleccionamos todos los posibles inputs
			var $inputs = $form.find("input, select, button, textarea, checkbox, number, radio, text, range, label");
		
			// Serializamos la información del Formulario 
			var serializedData = $form.serialize();
			
			console.log(serializedData);
			
			// Deshabilitamos los inputs mientras se ejecuta el Ajax
			$inputs.prop("disabled", true);
			// Disparamos la solicitud (request) 
			request = $.ajax({
				url: '_includes/_php/querys.php',
				//dataType: "json",
				type: "post",
				data: serializedData
			});
			
			// Conexión exitosa
			request.done(function (response, textStatus, jqXHR){					
				console.log('vino');

				/* if (i>0) {
					
				} */$inputs.prop("disabled", false);
				if(response != 'fail'){
					
					console.log('se envio el correo');
					$("#content").html("¡Gracias por registrarte! <br> Tu solicitud será respondida en breve, es un placer estar a tu servicio");
								setTimeout(function() {
									$("#form").addClass('display');
									$(".title").addClass('display');
									document.getElementById('edit').style.cssText = 'height: 500px; !important;';	
									
								}, 1000);
				}else{
					$("#content").html("Error al enviar el formulario");
					
				}
				
			}); 
		
			 //Si falla la conexión
			request.fail(function (jqXHR, textStatus, errorThrown){
				console.error(
				"Han ocurrido los siguientes errores: "+
				textStatus, errorThrown
				);
			});			
			// Habilitamos de nuevo los botones
			request.always(function () {
				
			});

		
		// No enviar el formulario
		return false; 
	
	});

//Cambio de tamaño en la vetana
function thisResize() {
	
}

var resizeTimer; $(window).resize(function () { if (resizeTimer) { clearTimeout(resizeTimer); } resizeTimer = setTimeout(function() { resizeTimer = null; thisResize(); }, 500);});