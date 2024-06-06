<?php include 'conexion1.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reseñas</title>
       
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
        <h1>¿Tienes dudadas sobre nuestros productos?<br>¡<i>Animate </i>leyendo  las experiencias de otros usuarios!</h1>
    </div>
    <div class="reseñas">
        <?php
        $selec = $con->query("SELECT * FROM reseña");
        while ($fila = $selec->fetch_assoc()) {
            echo "<div class='reseña'>";
            echo "<h2>" . htmlspecialchars($fila['nombre']) . "</h2>";
            echo "<p>" . htmlspecialchars($fila['email']) . "</p>";
            echo "<b><p>Producto: </b>" . htmlspecialchars($fila['producto']) . "</p>";
            echo "<p>" . htmlspecialchars($fila['opinion']) . "</p>";
            echo "<a href='actualizar1.php?nombre=" . urlencode($fila['nombre']) . "'><button>Editar</button></a>";
            echo "<a href='eliminar.php?nombre=" . urlencode($fila['nombre']) . "'><button>Eliminar</button></a>";
            echo "</div><br>";
        }
        ?>
    </div>
</body>

<footer>
    <h3><a href="pdp.html">POLITICA DE PRIVACIDAD</a></h3>
    <h3><a href="contacto.html">CONTACTO</a></h3>
</footer>
</html>
