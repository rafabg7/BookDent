
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <title>BookDent</title>
</head>
<body>
<?php include("menu.php"); ?>
<!--
<div class="container">
    <div class="row justify-content-center mt-5 pt-5">
       <div class="col-md-7">
            <h1 class="display-4">Inicio de Sesión</h1>
            <hr class="bg-info">

            <div class="row form-group">
                <form action="userAccount.php" method="post">
                    <div class="form-group">

                        <div class="col-md-14">
                        
                            <input type="email" name="email" class="form-control" id="InputEmail"  placeholder="Enter email" required="">
                        
                         </div>
                  </div>

                        <div class="form-group">
                            <div class="col-md-14">
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control" id="InputPassword" placeholder="Ingrese contraseña"  required="">
                                </div>
                            </div>
                        </div>
                        <a href="forgotPassword.php">Olvide mi contrasena</a> <br> <br>
                        <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                </form>
             </div>
          </div>
      </div>
              
</body>
</html>

-->

<?php 
session_start();
$sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:'';
if(!empty($sessData['status']['msg'])){
    $statusMsg = $sessData['status']['msg'];
    $statusMsgType = $sessData['status']['type'];
    unset($_SESSION['sessData']['status']);
}
?>
<div class="container">
    <?php
        if(!empty($sessData['userLoggedIn']) && !empty($sessData['userID'])){
            include 'user.php';
            $user = new User();
            $conditions['where'] = array(
                'id' => $sessData['userID'],
            );
            $conditions['return_type'] = 'single';
            $userData = $user->getRows($conditions);
    ?>
    <h2>Welcome <?php echo $userData['first_name']; ?>!</h2>
    <a href="userAccount.php?logoutSubmit=1" class="logout">Logout</a>
    <div class="regisFrm">
        <p><b>Name: </b><?php echo $userData['first_name'].' '.$userData['last_name']; ?></p>
        <p><b>Email: </b><?php echo $userData['email']; ?></p>
        <p><b>Phone: </b><?php echo $userData['phone']; ?></p>
    </div>
    <?php }else{ ?>
    <h2>Inicia sesion</h2>
    <?php echo !empty($statusMsg)?'<p class="'.$statusMsgType.'">'.$statusMsg.'</p>':''; ?>

    <div class="container">
    <div class="row justify-content-center mt-5 pt-5">
       <div class="col-md-7">
            <h1 class="display-4">Inicio de Sesión</h1>
            <hr class="bg-info">

            <div class="row form-group">

    <div class="regisFrm">
        <form action="userAccount.php" method="post">
        <div class="form-group">

            <div class="col-md-14">

                    <input type="email" name="email" class="form-control" id="InputEmail"  placeholder="Enter email" required="">   <!--  <input type="email" name="email" placeholder="Correo" required=""> -->

                       
                    </div>
                  </div>


                        <div class="form-group">
                            <div class="col-md-14">
                                <div class="form-group">


                    <input type="password" name="password" class="form-control" id="InputPassword" placeholder="Ingrese contraseña"  required="">  <!--  <input type="password" name="password" placeholder="Contrasena" required=""> -->
                    </div>
                            </div>
                        </div>
                        <a href="forgotPassword.php">Olvide mi contrasena</a> <br> <br>
                        <div class="send-button">
                        <button type="submit"  name="loginSubmit" class="btn btn-primary">Iniciar Sesión</button>
                        </div>

                        <p>No tienes cuenta?? <a href="registration.php">Registrate aqui</a></p>
                        </form>
          
       <!--     <div class="send-button">
                <input type="submit" name="loginSubmit" value="Iniciar sesion">
            </div>
        </form>
        <p>No tienes cuenta?? <a href="registration.php">Registrate aqui</a></p>
    </div>-->
    <?php } ?>
</div>