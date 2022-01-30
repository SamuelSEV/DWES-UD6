<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/botonera.css">
    <link rel="stylesheet" href="css/table.css">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>Lista Componentes</title>
</head>

<body>
    <nav>
        <ul>
            <li><a href="index.php?controller=componentes&action=loginUser">Página principal</a></li>
            <li><a href="index.php?controller=componentes&action=insertarComponente">Nuevo elemento</a></li>
            <li><a class="active" href="index.php?controller=componentes&action=listar">Lista elementos</a></li>
            <li><a href="index.php?controller=componentes&action=cerrarSesion">Cerrar sesion</a></li>
        </ul>
    </nav>
    <h1>Componentes en la bd</h1>
    <table class="styled-table">
        <thead>
            <tr>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Descripcion</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Fecha lanzamiento</th>
                <th>imagen</th>
                <th>Detalle</th>
                <th>Editar</th>
                <th>Borrar</th>
            </tr>
        </thead>
        <tbody>
            <!-- Aquí tendrás que mostrar las filas de la tabla-->
            <?php
            foreach ($componentes as $key) {
                echo "<tr>";
                echo "<td>" . $key['marca'] . "</td>";
                echo "<td>" . $key['modelo'] . "</td>";
                echo "<td>" . $key['descripcion'] . "</td>";
                echo "<td>" . $key['precio'] . "</td>";
                echo "<td>" . $key['cantidad'] . "</td>";
                echo "<td>" . $key['fechalanzamiento'] . "</td>";
                echo "<td>" . $key['imagen'] . "</td>";
                echo "<td><a href='index.php?controller=componentes&action=detalleComponente&id=" . $key['id'] . "'><i class='fas fa-search'></i></a></td>";
                echo "<td><a href='index.php?controller=componentes&action=editarComponente&id=" . $key['id'] . "'><i class='fas fa-edit'></i></a></td>";
                echo "<td><a href='index.php?controller=componentes&action=eliminarComponente&id=" . $key['id'] . "'><i class='fas fa-trash-alt'></i></a></td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <form action="index.php?controller=componentes&action=insertarComponente" method="POST" enctype="multipart/form-data" class="form-register">
        <h2 class="form-titulo">CREAR COMPONENTE:</h2>
        <div class="contenedor-inputs">

            <input type="submit" value="Crear" class="btn-enviar" name="submit">

        </div>
    </form>
</body>

</html>