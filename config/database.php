<?php
    $host="localhost:3309";
    $db="tacos_db";
    $usuario="root";
    $contraseña="root";
    try{
       $conexion = new PDO('mysql:host=' . $host . ';dbname=' . $db .';charset=utf8', $usuario, $contraseña);
       //$conexion = mysqli_connect('localhost:3309', 'root', 'root', 'tacos_db');//
    } catch (Exception $ex) {
        echo $ex->getMessage();
    }
?>    