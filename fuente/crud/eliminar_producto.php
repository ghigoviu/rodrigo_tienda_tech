<?php
    include_once '../conexion_bd.php';
    $sql = "DELETE FROM productos WHERE id=".$_GET['id'];

    $eliminacion = mysqli_query($conexion, $sql);
    header('Location: ../../');
    
?>