<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/botonera.css">
    <title>Document</title>
</head>

<body>
    <nav>
        <ul>
            <li><a href="index.php?controller=usuarios&action=formularioLogin">Página principal</a></li>
            <li><a href="index.php?controller=componentes&action=insertarComponente">Nuevo elemento</a></li>
            <li><a href="index.php?controller=componentes&action=listar">Lista elementos</a></li>
            <li><a href="index.php?controller=usuarios&action=cerrarSesion">Cerrar sesion</a></li>
        </ul>
    </nav>

    <div><?php echo $correcto ?></div>
    <div id="errores"> <?php echo $errorBorrar ?></div>

</body>

</html>