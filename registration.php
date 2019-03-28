
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
    <h2>Crear nueva cuenta de administrador</h2>
    <hr class="bg-info">
    <?php echo !empty($statusMsg)?'<p class="'.$statusMsgType.'">'.$statusMsg.'</p>':''; ?>
    <div class="regisFrm">
        <form action="userAccount.php" method="post">

        <div class="form-group">

            <div class="col-md-14">



                <input type="text" name="first_name" placeholder="Nombre" required="">

                  
                </div>
                  </div>

                        <div class="form-group">
                            <div class="col-md-14">
                                <div class="form-group">

                <input type="text" name="last_name" placeholder="Apellidos" required="">

                </div>
                            </div>
                        </div>





                        <div class="form-group">
                            <div class="col-md-14">
                                <div class="form-group">

                                <input type="email" name="email" placeholder="EMAIL" required="">

                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-14">
                                <div class="form-group">

                                <input type="text" name="phone" placeholder="Numero de telefono" required="">

                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-14">
                                <div class="form-group">

                                <input type="password" name="password" placeholder="Contrasena" required="">

                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-14">
                                <div class="form-group">

                                <input type="password" name="confirm_password" placeholder="CONFIRMar Contrasena" required="">

                </div>
                            </div>
                        </div>


                
               
                
               
                <div class="send-button">
                    <input type="submit" name="signupSubmit" value="Crear usuario">
                </div>
        </form>
    </div>
</div>

</div>