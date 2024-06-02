<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar</title>
</head>
<body>
    <h1>Agregar producto</h1>
    <form action="./crud/insertar_producto.php" method="POST">
        <div>
            <label for="">Nombre:</label>
            <input type="text" id="nombre" name="nombre">
        </div>
        <br> 
        <div>
            <label for="">Precio:$</label>
            <input type="number" name="precio">
        </div>
        <br>
        <div>
            <label for="">Categoría:</label>
            <input type="number" name="categoria">
        </div>
        <br> 
        <input type="submit" value="Agregar">
    </form>
</body>
</html>