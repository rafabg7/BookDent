<?php
$conexion = mysqli_connect('localhost','root', '', 'bookdentdatabase' );
if(!$conexion){
   echo 'Error al conectar con base de datos';

}else{
    echo 'Conectado a la base de datos';
}
//recibir los datos y almacenar
?>