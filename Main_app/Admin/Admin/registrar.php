<?php 

include 'cn.php';

$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$telefono = $_POST["telefono"];
$nombreusuario = $_POST["nombreusuario"];
$correo = $_POST["correo"];
$tipousuario = $_POST["tipousuario"];
$contrasena = $_POST["contrasena"];

//consulta para insertar
$insertar = "INSERT INTO usuarios(nombres, usuario, password, tipo, apellidos, telefono, correo) 
            VALUES ('$nombre', '$nombreusuario', '$contrasena', '$tipousuario', '$apellidos', 
            '$telefono', '$correo')"; 

$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios where nombreusuario = '$nombreusuario'");
if (mysqli_num_rows($verificar_usuario) > 0){ //window.history.go(-1);   para regresar a la pagina anterior en este caso seria el mismo login
    echo  '<script>
    alert("El usuario ya esta registrado");
    window.history.go(-1);  
    </script>';
    exit; 
}


        $resultado = mysqli_query($conexion, $insertar);
        if(!$resultado){
            echo 'Error al registrar usuario';
        }    else{
            echo '<script>
            alert ("Usuario registrado exitosamente");
            window.history.go(-1);
            </script>';
        }
        mysqli_close($conexion); //cerrar conexion

?>