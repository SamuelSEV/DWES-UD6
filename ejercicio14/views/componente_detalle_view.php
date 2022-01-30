<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/botonera.css">
    <link rel="stylesheet" href="css/view.css">
    <title>Vista detalle</title>
</head>

<body>
    <nav>
        <ul>
            <li><a href="index.php?controller=componentes&action=loginUser">Página principal</a></li>
            <li><a href="index.php?controller=componentes&action=insertarComponente">Nuevo elemento</a></li>
            <li><a href="index.php?controller=componentes&action=listar">Lista elementos</a></li>
            <li><a href="index.php?controller=componentes&action=cerrarSesion">Cerrar sesion</a></li>
        </ul>
    </nav>
    <div class="container">
        <header>
            <div class="bio">
                <img src="images/<?php echo $componente['imagen'] ?>" alt="background" class="bg">
                <div>
                    <h3><?php echo $componente['marca'] ?></h3>
                    <p><?php echo $componente['modelo'] ?></p>
                    <p><?php echo $componente['descripcion'] ?></p>
                </div>
            </div>
        </header>

        <div class="content">
            <div class="data">
                <ul>
                    <li>
                        <?php echo $componente['precio'] ?>
                        <span>Precio</span>
                    </li>
                    <li>
                        <?php echo $componente['cantidad'] ?>
                        <span>Cantidad</span>
                    </li>
                    <li>
                        <?php echo $componente['fechalanzamiento'] ?>
                        <span>Fecha lanzamiento</span>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</body>

</html>