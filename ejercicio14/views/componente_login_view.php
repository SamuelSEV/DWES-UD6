<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/botonera.css">
    <link rel="stylesheet" href="css/form.css">
    <title>Login</title>
</head>

<body>
    <form action="index.php?controller=componentes&action=loginUser" method="POST" enctype="multipart/form-data" class="form-register">
        <h2 class="form-titulo">Login:</h2>
        <div class="contenedor-inputs">

            <input type="text" name="username" placeholder="Usuario" class="input-100" required /><br>

            <input type="password" name="password" placeholder="Contraseña" class="input-100" required /><br><br>
            <input type="submit" class="input-100" value="Iniciar Sesión">
            <p><?php echo $error ?></p>
        </div>
    </form>

</body>

</html>