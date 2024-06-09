<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css" />
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <?php   
            include_once './fuente/conexion_bd.php';
            $query = "select nombre from clientes;";
            $consulta_clientes = mysqli_query($conexion, $query);
           
        ?>
        <h1>Bienvenido a su tiendita de tecnología Las Waifus de Evangelion</h1>
        <img src="./recursos/logo.jpg" alt="logo" width=400px>
        <br>
        <a href="./fuente/crud/index_productos.php">
            <button class="btn btn-primary">
                Nuestros productos
            </button>
        </a>
        <h3>Clientes satisfechos:</h3>
        <table id="productos" class="display">
            <?php    
                while($fila = mysqli_fetch_assoc($consulta_clientes)){
                    echo "<tr>";
                    echo "<td>".$fila["nombre"]."</td>";
                    echo "</tr>";
                }  
            ?>
        </table>
        
        <footer>
            <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
            <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
            <script >
                $(document).ready( function () {
                    $('#productos').DataTable();
                } );
            </script>
        
        </footer>
    </div>
</body>
</html>