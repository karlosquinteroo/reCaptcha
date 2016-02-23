$(document).ready(function() {
      $( "form" ).submit(function( event ) {
            $.ajax({
                type: 'POST',
                data: $("form").serialize(),
                url: 'procesa.php',
                success: function (msg) {
                    if (msg == 1) {
                      alert("bienvenido");
                    } else {
                      alert("error");
                    }
                }
            });
            return false;
        });
});
