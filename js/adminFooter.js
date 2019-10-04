tinymce.init({
  selector: 'textarea#basic-example',
  height: 500,
  menubar: false,
  plugins: [
    'advlist autolink lists link image charmap print preview anchor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime media table paste code help wordcount'
  ],
  toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tiny.cloud/css/codepen.min.css'
  ]
});
$(function () {
  $('#sortable-8').sortable({
    update: function (event, ui) {
      var posicionOrden = $(this).sortable('toArray').toString();
      $("#sortable-9").text(posicionOrden);
      document.getElementById("posicionesD").value = posicionOrden;
    }
  });
});

$("#tipodirectorio")
  .change(function () {
    var str = "";
    $("#tipodirectorio option:selected").each(function () {
      str += $(this).text() + " ";
    });
    $("#direct").text(str);
  })
  .change();

function catmodif(id) {

  var idModal = 'edit' + id;
  var catm = $('#cat-modificada' + id).val().toUpperCase();
  if (catm.trim() == '') {
    alert('Por favor introduzca nueva categoria');
    $('#cat-modificada' + id).focus();
    return false;
  }
  else {
    $.ajax({
      url: 'https://larasalud.com/php/modificar.php',
      type: 'POST',
      dataType: 'html',
      data: "id=" + id + "&tabla=categorias&columna=categoria&fila=id&valor=" + catm,
      beforeSend: function () {
        $('#catmodificar').css({
          'display': 'block'
        });
      },
    })
      .done(function (data) {
        alert("Categoria modificada satisfactoriamente!");
        $('#' + idModal + ' .close').click();
      })
      .fail(function () {
        console.log('Error');
      })
      .always(function () {
        console.log("complete");
      });

  }
}

function espmodif(id) {
  var idModalesp = 'ed' + id;
  var espm = $('#esp-modificada' + id).val().toUpperCase();

  if (espm.trim() == '') {
    alert('Por favor introduzca nueva especialidad');
    $('#esp-modificada').focus();
    return false;
  }
  else {
    $.ajax({
      url: 'https://larasalud.com/php/modificar.php',
      type: 'POST',
      dataType: 'html',
      data: "id=" + id + "&tabla=especialidades&columna=especialidad&valor=" + espm + "&columna2=profesional&valor2=" + valor2 + "&fila=id",
      beforeSend: function () {
        $('#espmodificar').css({
          'display': 'block'
        });
      },
    })
      .done(function (data) {
        alert("Especialidad modificada satisfactoriamente!");
        $('#' + idModalesp + ' .close').click();
      })
      .fail(function () {
        console.log('Error');
      })
      .always(function () {
        console.log("complete" + valor2 + idModalesp + espm);
      });

  }
}