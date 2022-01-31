<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/botonera.css">
    <link rel="stylesheet" href="css/form.css">
    <title>Edita elemento</title>
</head>

<body>
    <nav>
        <ul>
            <li><a href="index.php?controller=componentes&action=loginUser">Página principal</a></li>
            <li><a href="index.php?controller=componentes&action=insertarComponente">Nuevo elemento</a></li>
            <li><a href="index.php?controller=componentes&action=listar">Lista elementos</a></li>
            <li><a href="index.php?controller=usuarios&action=cerrarSesion">Cerrar sesion</a></li>
        </ul>
    </nav>
    <form action="index.php?controller=componentes&action=editarComponente" method="POST" enctype="multipart/form-data" class="form-register">
        <h2 class="form-titulo">Características:</h2>
        <div class="contenedor-inputs">
            <input type="hidden" name="id" value="<?php echo $componente['id'] ?>">
            <input type="text" name="marca" placeholder="Marca" class="input-100" required value="<?php echo $componente['marca'] ?>">
            <input type="text" name="modelo" placeholder="Modelo" class="input-100" required value="<?php echo $componente['modelo'] ?>">
            <input type="text" name="descripcion" placeholder="Descripcion" class="input-100" required value="<?php echo $componente['descripcion'] ?>">
            <input type="number" name="precio" placeholder="Precio" class="input-48" required value="<?php echo $componente['precio'] ?>">
            <input type="number" name="cantidad" placeholder="Cantidad" class="input-48" required value="<?php echo $componente['cantidad'] ?>">
            <input type="date" name="fecha" placeholder="Fecha lanzamiento" class="input-100" required value="<?php echo $componente['fechalanzamiento'] ?>">
            <img name="avatarActual" width=200px src="images/<?php echo $componente['imagen'] ?>"><!-- Aquí tienes que cargar la imagen actual -->
            <input type="file" name="imagen" accept="image/png, image/jpeg" class="input-100">
            <input type="submit" value="Editar" class="btn-enviar" name="submit">
            <div id="errores"> <?php echo $errorEditar . "<br>";
                                echo $noimagen . "<br>";
                                echo $imagenExiste . "<br>";
                                echo $imposibleSubir . "<br>";
                                echo $errorSubir . "<br>"; ?></div>
            <div id="correcto"> <?php echo $imagenSubida . "<br>"; ?></div>
        </div>
    </form>
</body>

</html>