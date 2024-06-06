<?php 
include 'conexion1.php'; 

$nombre = $_REQUEST['nombre']; 
$selec = $con->query("SELECT * FROM reseña WHERE nombre='$nombre'"); 
if ($fila = $selec->fetch_assoc()) {
    $email = $fila['email'];
    $producto = $fila['producto'];
    $opinion = $fila['opinion'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Datos</title>
    <div id="free">
            <h3>Envío gratis en pedidos mayores de $1,000. Más informacion en el proceso de pago</h3>
        </div> 
        <div id="menu">
            <h3 align="center"><a href="inicio.html">INICIO</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="skincare.html">SKINCARE</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="reseñas.php">OPINIONES</a></h3>    
        </div>
</head>
<body>
    <form action="update1.php" method="post"><br><br><br><br>
        <h2>Nombre</h2>
        <input type="text" name="nombre" value="<?php echo $nombre ?>"><br><br>
        <h2>Email</h2>
        <input type="text" name="email" value="<?php echo $email ?>" readonly><br><br>
        <h2>Producto</h2>
        <input type="text" name="producto" value="<?php echo $producto ?>" readonly><br><br>
        <h2>Opinión</h2>
        <input class="a" type="text" name="opinion" value="<?php echo $opinion ?>" readonly><br><br>
        <input type="submit" value="Actualizar"><br><br>
    </form><br><br>
</body>
</html>
