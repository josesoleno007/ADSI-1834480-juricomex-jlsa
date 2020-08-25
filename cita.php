<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
    <style>

      .jumbotron {

        margin-top: 3em;

      }

    </style>  

  <div class="container">
  <div class="jumbotron">
  <img class="img-thumbnail" src="images/logo_juricomex.jpg" alt="" width="150px" height="150px">
  <img class="img-thumbnail" src="images/form.png" alt="" width="150px" height="150px">
  <h1 class="display-4">Agenda tu cita aquí!</h1>
  <p class="lead">Envianos tus datos usando este formulario. Luego, te llamaremos para darte los detalles de la cita.</p>
  <hr class="my-4">
  <form class="needs-validation" method="post" action="guardarcita2.php" novalidate>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom01">Nombre completo</label>
      <input type="text" class="form-control" name="nombre" id="validationCustom01" required>
      <div class="invalid-feedback">
        por favor proporcione un nombre válido.
      </div>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationCustom02">Fecha</label>
      <input type="date" class="form-control" name="fecha" id="validationCustom02" required>
      <div class="invalid-feedback">
        por favor proporcione una fecha válida.
      </div>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom03">Hora</label>
      <input type="time" class="form-control" name="hora" id="validationCustom03" required>
      <div class="invalid-feedback">
        por favor proporcione una hora válida.
      </div>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
       <div class="col-md-6 mb-3">
      <label for="validationCustom03">Telefono</label>
      <input type="text" class="form-control" name="telefono" id="validationCustom03" required>
      <div class="invalid-feedback">
        por favor proporcione un telefono válido.
      </div>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
  <div class="col-md-12 mb-3">
      <label for="validationCustom05">Correo</label>
      <input type="email" class="form-control" name="correo" id="validationCustom04" required>
      <div class="invalid-feedback">
        por favor proporcione un correo válido.
      </div>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
  </div>
 <button type="submit" class="btn btn-primary btn-lg btn-block">Enviar solicitud</button>
 <hr class="my-4">
 <div class="text-center">
 <a class="btn btn-lg btn-primary" href="index.php">Volver a inicio</a>
 </div>
</form>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
  
 </div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>