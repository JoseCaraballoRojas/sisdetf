$(document).ready(function() {

    $('#btn_submit').hide();
    $('.segundo_form').hide();

    $('#btn_primero').on('click', function () {
      $('#btn_primero').hide();
      $('.primer_form').hide();
      $('#btn_submit').show();
      $('.segundo_form').show();
    })
});
