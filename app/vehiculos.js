
$(document).ready(function() {
  $("#frmRegVehiculo").submit(function(event) {
    event.preventDefault();
    var formData = $(this).serialize();
    if ($("#btnRegVehiculo").length) { accion = $("#btnRegVehiculo").val();
    }
    $.ajax({
      url: "../model/vehiculos.php",
      type: "POST",
      data: formData + "&accion=" + accion, // pasar la acción como parámetro adicional
      success: function(response) {
        if (response == "success") {
            Swal.fire('Registro exitoso.','los datos han sido guardados','success')
            $("#frmRegVehiculo")[0].reset()
          //$("#result").html("Login successful");
        } else {
          $("#result").html("Login failed");
          Swal.fire({icon: 'error',title: 'Error inesperado',text: 'Los datos no han sido guardados',
        })
        }
      },
      error: function() {
        $("#result").html("Ha ocurrido un error.");
      }
    });
  });
});