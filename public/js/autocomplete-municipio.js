$(document).ready(function(){
  $('#municipio').keyup(function(){
        var municipio = $(this).val();
        if (municipio.length > 1) {
          var data = {name : municipio, _token : token};
          var url = '../Municipios/autocomplete';

          $.post(url, data, function(response) {
            //console.log(response);
            $( "#municipio" ).autocomplete({
              source: response.municipios,
              minLength: 2,
              select: function(event, ui) {
                event.preventDefault();
                $('#id_municipio').val(ui.item.value);
                $('#municipio').val(ui.item.label);
                //alert(ui.item.value);
              },
              focus: function(event, ui) {
                event.preventDefault();
              }
            });
          });
        }
    });
});
