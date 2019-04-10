<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title></title>
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-dark"  style="background-color: #27D1D7;">
  <a class="navbar-brand" href="#">Administrador Bookdent</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link " href="../Main_app/admin/admin/adduser.php">Agregar Usuario</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Editar Usuario</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Eliminar Usuario</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Cerrar Sesion</a>
      </li>
    </ul>
   
  </div>
</nav>

<section id="container">


<div class="container">
  <div class="row justify-content-center mt-5 pt-5">
    <div class="col-md-7">
      <h1 class="display-4">Lista de usuarios</h1>
      <hr class="bg-info">
    <!--  <p class="text-danger small pt-0 mt-0">**Todos los campos son obligatorios</p>  -->

<a href="adduser.php" class="btn_new">Crear Usuario</a>

<table>
    <tr>
        <th>ID</th>
        <TH>Nombre</TH>
        <th>Apellido</th>
        <th>Correo</th>
        <th>Nombre de usuario</th>
        <th>Telefono</th>
        <th>Labor</th>
    </tr>
    <tr>
        <td>1</td>
        <td>Jorge</td>
        <td>gomez</td>  
        <td>rafasdf@gmail.dom</td>
        <td>gojo</td>
        <td>23423704</td>
        <td>Admin</td>
        <td>   
            <a class="link_edit" href="#">Editar</a>
            <a class="link_delete" href="#">Eliminar</a>
        </td>
    </tr>
</table>

</section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
