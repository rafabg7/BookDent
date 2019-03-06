<?php
header('Content-Type: application/json'); //retorna en formato json
$pdo=new PDO('mysql:host=127.0.0.1;dbname=bookdentdatabase;charset=UTF8','root',''); //"mysql:dbname=bookdentdatabase;host=127.0.0.1","root",""    para conectar con base de datos

//seleccionar los eventos del calendario 

$sentenciaSQL = $pdo->prepare("SELECT * FROM events");
$sentenciaSQL->execute();

$resultado = $sentenciaSQL->fetchALL(PDO::FETCH_ASSOC); //permite consultar todos los registros y convertirlos en un arreglo
echo json_encode($resultado);

?>