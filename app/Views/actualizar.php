<?php
$idNombre = $datos[0]['idNombre'];
$nombre = $datos[0]['Nombre'];
$dato1 = $datos[0]['dato1'];
$dato2 = $datos[0]['dato2'];


?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>ACTUALIZAR</title>
  </head>
  <body>
  <br>
    <br>
  <div class="container">
    <br>
    <br>
    <h1>Registro de participantes</h1>

        <div class="row">
            <div class="col-sm-12">
                <form method="POST" action="<?php echo base_url().'/actualizar'?>">
                <input type="text" id="idNombre" name="idNombre" hidden=""
                value="<?php echo $idNombre ?>">

                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" class="form-control"
                value="<?php echo $nombre ?>">

                <label for="paterno">Apellido paterno</label>
                <input type="text" id="paterno" name="paterno" class="form-control"
                value="<?php echo $dato1 ?>">

                <label for="materno">Apellido materno</label>
                <input type="text" id="materno" name="materno" class="form-control"
                value="<?php echo $dato2 ?>">
                <br>
                <button class="btn btn-warning">Guardar</button>
            </form>
            </div>
        </div>


    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>