<?php
include 'conexion1.php';


$nombre = $_POST['nombre'];
$email = $_POST['email'];
$producto = $_POST['producto'];
$opinion = $_POST['opinion'];

$insert = $con -> query("INSERT INTO reseña (nombre,email,producto,opinion) VALUES ('$nombre','$email',
'$producto','$opinion')");

if ($insert){
    echo"<script>
location.href='formulario1.php'
</script>";
}else{
    echo "No se guardo ningun registro";
}