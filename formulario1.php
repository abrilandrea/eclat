<?php  include 'conexion1.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>  
<header>
        <div id="free">
            <h3>Envío gratis en pedidos mayores de $1,000. Más información en el proceso de pago</h3>
        </div> 
        <div id="menu">
            <nav class="dropdownmenu" id="ocultar">
                <ul>
                    <li><a href="index.html">INICIO</a></li>
                    <li>
                        <a href="#">PRODUCTOS</a>
                        <ul id="submenu">
                            <li><a href="skincare.html">SKINCARE</a></li>
                            <li><a href="#">MAQUILLAJE</a></li>
                            <li><a href="#">ACCESORIOS</a></li>
                        </ul>
                    </li>
                    <li><a href="reseñas.php">OPINIONES</a></li>
                    <li><a href="contacto.html">CONTACTO</a></li>
                </ul>
            </nav>
            <nav class="dropdownmenu" id="mostrar">
                <ul>
                    <li><a href="index.html">INICIO</a></li>
                    <li>
                        <a href="#">MENU</a>
                        <ul id="submenu">
                            <li><a href="skincare.html">SKINCARE</a></li>
                            <li><a href="#">MAQUILLAJE</a></li>
                            <li><a href="#">ACCESORIOS</a></li>
                            <li><a href="reseñas.php">OPINIONES</a></li>
                            <li><a href="contacto.html">CONTACTO</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </header><hr>
    <div class="reseñyform">
        <h1>Nos encantaria que compartas tu experiencia con nosotros!</h1>
    </div>
    <form action="conect_bd1.php" method="post">
        <h2>Nombre </h2>
        <input type="text" name='nombre' placeholder="Andrea R."><br><br>
        <h2>Email</h2>
        <input type="text" name='email' placeholder="tu_email@gmail.com"><br><br>
        <h2>Producto </h2>
        <input type="int" name='producto' placeholder="Jabon hidratante"><br><br>
        <h2>Opinion </h2>
        <input id="a" type="text" name='opinion' placeholder="Qué piensas acerca de este producto?"><br><br>

        <input type="submit" value="Enviar">
    </form><br><br><br>
   
<?php ?>
</body>

<footer>
        <h3><a href="pdp.html">POLITICA DE PRIVACIDAD</a></h3>
        <h3><a href="contacto.html">CONTACTO</a></h3>
    </footer>
</html>