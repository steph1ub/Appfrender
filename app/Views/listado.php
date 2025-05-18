





<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="sweetalert2.min.css">
    

    <title>REGISTRO</title>
  </head>
  <body>
  <br>
    <br>
    <div class="container">
    <h1>Registro de participantes</h1>
   
    <br>
    <br>
        <div class="row">
            <div class="col-sm-12">
                <form method="POST" action="<?php echo base_url().'/crear'?>">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" class="form-control">
                <label for="paterno">Apellido paterno</label>
                <input type="text" id="paterno" name="paterno" class="form-control">
                <label for="materno">Apellido materno</label>
                <input type="text" id="materno" name="materno" class="form-control">
                <br>
                <button class="btn btn-primary">Guardar</button>
            </form>
            </div>
        </div>
        <hr>
        <h2>Listado de personas</h2>
  
<div class="row">
<div class="col-sm-12">
    <div class="table table-responsive">
<table class="table table-hover table-bordered">
<tr>
<th>Nombre</th>
<th>Apellido paterno</th>
<th>Apellido Materno</th>
<th>Editar</th>
<th>Eliminar</th>
</tr>

<?php foreach ($datos as $key): ?>
    <tr>
        <td><?php echo $key->Nombre ?></td>
        <td><?php echo $key->dato1 ?></td>
        <td><?php echo $key->dato2 ?></td>
        <td>
            <a href="<?php echo base_url().'/obtenerNombre/'.$key->idNombre ?>" class="btn btn-warning btn-sm">Editar</a>
        </td>
        <td>
           <a href="<?php echo base_url().'/eliminar/'.$key->idNombre ?>" class="btn btn-danger btn-sm">Eliminar</a>
        </td>
    </tr>

    <?php endforeach; ?>




</table>


    </div>


</div>
</div>


    </div>





    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>


    <script type="text/javascript">
        let mensaje='<?php echo $mensaje ?> ';

        if(mensaje == '1'){
            Swal.fire({title: 'Bien!', text: 'Se ha agregado', icon: 'success', confirmButtonText: 'Cool'});
         
            
        }else if(mensaje == '0'){
            Swal.fire({title: 'Error!', text: 'Continuar?', icon: 'error', confirmButtonText: 'Cool'});

        }else if(mensaje == '2'){
            Swal.fire({title: 'Bien!', text: 'Se ha actualizado', icon: 'success', confirmButtonText: 'Cool'});
        }else if(mensaje == '3'){

            Swal.fire({title: 'Error!', text: 'Continuar?', icon: 'error', confirmButtonText: 'Cool'});
        }else if(mensaje == '4'){
            Swal.fire({title: 'Bien!', text: 'Se ha eliminado', icon: 'success', confirmButtonText: 'Cool'});
        }else if(mensaje == '5'){
            
            Swal.fire({title: 'Error!', text: 'Continuar?', icon: 'error', confirmButtonText: 'Cool'});
        }
        
       



    </script>


  </body>
</html>