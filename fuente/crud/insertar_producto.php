<?php
    include_once '../conexion_bd.php';

    $sql = "INSERT INTO productos (nombre,precio,categoria_id) VALUES ("
    ."'".$_POST['nombre']."', "
    .$_POST['precio'].", "
    .$_POST['categoria'].");";

    $insercion = mysqli_query($conexion, $sql);

    header('Location: ../../');
    //$insercion->exec();

?>