<?php

$usu=$_POST['usuariolg'];
$pass=$_POST['passlg'];
$usuarios=$mysqli->query("Select nombres,tipo
                        From usuarios Where usuario='".$usu."'
                      AND password='".$pass."'");
                      if ($usuarios->num_rows >0):
                        $datos= $usuarios->fetch_assoc();
                        echo json_encode(array('error'=>false,'tipo'=>$datos['tipo']));
                    else:
                        echo json_encode(array('error'=>true));
                    endif;

                    if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) $$ strolower($_SERVER['HTTP_X_REQUESTED_WTH']) == 'xmlhttprequest'){


?>
