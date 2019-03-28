<?php
header('Content-Type: application/json'); //retorna en formato json
$pdo=new PDO("mysql:dbname=bookdentdatabase;host=127.0.0.1","root","");   //


$accion= (isset($_GET['accion']))?$_GET['accion']:'leer';
switch($accion){
    case'agregar':
    //Intruccion de agregado
    $sentenciaSQL = $pdo->prepare("INSERT INTO
    events(title,description,color,txtColor,start,end)
    VALUES(:title,:description,:color,:textColor,:start,:end)");

    $respuesta=$sentenciaSQL->execute(array(
        "title" =>      $_POST['title'],
        "description" =>$_POST['description'],
        "color" =>      $_POST['color'],
        "textColor" =>  $_POST['txtColor'],
        "start" =>      $_POST['start'],
        "end" =>        $_POST['end']
    ));
    echo json_encode($respuesta);
     break;

     case 'eliminar':
     //Intruccion de eliminar
    // echo "Intruccion de eliminar";
     $respuesta=false;

     if(isset($_POST['id'])){

        $sentenciaSQL= $pdo->prepare("DELETE FROM events WHERE ID=:ID");
        $respuesta= $sentenciaSQL->execute(array("ID"=>$_POST['id']));
     }
     echo json_encode($respuesta);
     break;

     case 'modificar':
     //Intruccion de modificar
     //echo "Intruccion de modificar";

        $sentenciaSQL= $pdo->prepare("UPDATE events SET
        title=:title,
        description=:description,
        color=:color,
        textColor=:textColor,
        start=:start,
        end=:end,
        WHERE ID=:ID
        ");

    $respuesta= $sentenciaSQL->execute(array(

    "title" =>      $_POST['title'],
    "description" =>$_POST['description'],
    "color" =>      $_POST['color'],
    "textColor" =>  $_POST['txtColor'],
    "start" =>      $_POST['start'],
    "end" =>        $_POST['end']



));
     echo json_encode($respuesta);

        break;

    default:
    //seleccionar los eventos del calendario   
    $sentenciaSQL = $pdo->prepare("SELECT * FROM events");
    $sentenciaSQL->execute();

    $resultado = $sentenciaSQL->fetchALL(PDO::FETCH_ASSOC); //permite consultar todos los registros y convertirlos en un arreglo
    echo json_encode($resultado);

break;
}
//seleccionar los eventos del calendario 



?>