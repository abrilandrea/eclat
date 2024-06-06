<?php
include 'conexion1.php';

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$producto = $_POST['producto'];
$opinion = $_POST['opinion'];

$act = $con->query("UPDATE reseña SET nombre='$nombre' WHERE email='$email' AND producto='$producto' AND opinion='$opinion'");

if ($act) {
    echo "<script>
    location.href='reseñas.php'
    </script>";
} else {
    echo "<script>
    location.href='actualizar1.php?nombre=".$nombre."';
    </script>";
}
?>
