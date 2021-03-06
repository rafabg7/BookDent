<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/adduser.css">
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
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Agregar Usuario</a>
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


<div class="container">
  <div class="row justify-content-center mt-5 pt-5">
    <div class="col-md-7">
      <h1 class="display-4">Formulario de registro de personal</h1>
      <hr class="bg-info">
      <p class="text-danger small pt-0 mt-0">**Todos los campos son obligatorios</p>

      
<form action="registrar.php" method="post">

<div class="row form-group">  
    <label for="name" class="col-form-label col-md-4">Nombre:</label>
    <input type="text" class="form-control" name="nombre" id="name" required>
    </div>

    <div class="row form-group">  
    <label for="lastname"  class="col-form-label col-md-4">Apellidos:</label>
    <input type="text" class="form-control" name="apellidos"  id="apellidos" required>
    </div>

    <div class="row form-group">  
    <label for="phone"  class="col-form-label col-md-4">Telefono:</label>
    <input type="text" class="form-control" name="telefono"  id="telefono" required>
    </div>

    <div class="row form-group">  
    <label for="usuario"  class="col-form-label col-md-4">Nombre de usuario:</label>
    <input type="text" class="form-control"  name="nombreusuario" id="nombreusuario" required>
    </div>

  <div class="row form-group">  
    <label for="email"  class="col-form-label col-md-4">Correo electronico:</label>
    <input type="email" class="form-control" name="correo"  id="correo" required>
    </div>

    <div class="row form-group">  
    <label for="tipousuario"  class="col-form-label col-md-4">Tipo de usuario:</label>
 
  <select class="custom-select" name="tipousuario"  id="tipousuario" required>
    <option selected>Elije uno</option>
    <option value="Admin">Dentista</option>
    <option value="Admin">Asistente</option>
    <option value="Usuario">Recepcionista</option>
  </select>
</div>
  
  <div class="row form-group">
    <label for="password"  class="col-form-label col-md-4">Password:</label>
    <input type="password" class="form-control" name="contrasena" id="contrasena" required>
  </div>
									
                                    
  <button type="submit" value="Registrar" class="btn btn-info">Crear usuario</button>
                </form>
                </div>
    </div>
  </div>
</div>








    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
