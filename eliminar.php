<?php
include 'conexion1.php';
$nombre= $_REQUEST['nombre'];
$nombre = $con ->query("DELETE FROM reseña WHERE nombre='$nombre' ");

if ($nombre){
echo "<script>
location.href='reseñas.php';
</script>";
}else{
echo "<script>
alert('El registo no pudo ser eliminado');
location.href= 'formulario1.php';
</script>";
}