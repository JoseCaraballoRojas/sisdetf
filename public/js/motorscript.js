$(document).ready(function() {

    $('#btn_submit').hide();
    $('.segundo_form').hide();
    $('#btn_atras').hide();
    $('#btnSiguienteFalla').hide();

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
        $('#id_Falla').attr('value', $('#id_falla').attr('value'));
        $('#tipo_Falla').attr('value', $('#tipoFalla').attr('value'));
        $('#tipo_Equipo').attr('value', $('#tipoEquipo').attr('value'));
        $('#btnSiguienteFalla').click();
        /*var idFalla = $('#id_falla').attr('value');
        var tipoEquipo = $('#tipoEquipo').attr('value');
        var tipoFalla = $('#tipoFalla').attr('value');
        var token = $('#_token').attr('value');
        //alert(tipoFalla);
        $.post("motor/siguienteFalla/",
        {
          _token: token,
          id: idFalla,
          tipoEquipo: tipoEquipo,
          tipoFalla: tipoFalla
        },
        function(res, status){
          $('#pregunta').html(res.pregunta);
          console.log(res.pregunta);
          console.log(res);
          res.forEach(element => {
              
              console.log(element.caracteristica);
            })
          
      });*/
   		};
   		if ($('input:radio[name=respuesta]:checked').val() == 'no') {
   			$('.solucion').show();
   			$('.guardar').show();	
   		};
   		   
   		
   })

});
