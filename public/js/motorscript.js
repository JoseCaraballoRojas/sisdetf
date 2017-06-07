$(document).ready(function() {

    $('#btn_submit').hide();
    $('.segundo_form').hide();
    $('#btn_atras').hide();

    $('#btn_primero').on('click', function () {
      $('#btn_primero').hide();
      $('.primer_form').hide();
      $('#btn_submit').show();
      $('.segundo_form').show();
      $('#btn_atras').show();

    })
    $('#btn_atras').on('click', function () {
      $('#btn_primero').show();
      $('.primer_form').show();
      $('#btn_submit').hide();
      $('.segundo_form').hide();
      $('#btn_atras').hide();

    })
    //para solucion de fallas electricas
   $('.solucion').hide();
   $('.guardar').hide();

   $("input[name=respuesta]").click(function () { 
   		if ($('input:radio[name=respuesta]:checked').val() == 'si') {
   			$('.solucion').hide();
   			$('.guardar').hide();	
   		};
   		if ($('input:radio[name=respuesta]:checked').val() == 'no') {
   			$('.solucion').show();
   			$('.guardar').show();	
   		};
   		   
   		
   })

});
