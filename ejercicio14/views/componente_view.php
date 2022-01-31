<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/botonera.css">
    <link rel="stylesheet" href="css/table.css">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>Componente</title>
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
    <h1>Componente consultado</h1>
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

            <?php

            echo "<tr>";
            echo "<td>" . $componente['marca'] . "</td>";
            echo "<td>" . $componente['modelo'] . "</td>";
            echo "<td>" . $componente['descripcion'] . "</td>";
            echo "<td>" . $componente['precio'] . "</td>";
            echo "<td>" . $componente['cantidad'] . "</td>";
            echo "<td>" . $componente['fechalanzamiento'] . "</td>";
            echo "<td>" . $componente['imagen'] . "</td>";
            echo "<td><a href='index.php?controller=componentes&action=detalleComponente&id=" . $componente['id'] . "'><i class='fas fa-search'></i></a></td>";
            echo "<td><a href='index.php?controller=componentes&action=editarComponente&id=" . $componente['id'] . "'><i class='fas fa-edit'></i></a></td>";
            echo "<td><a href='index.php?controller=componentes&action=eliminarComponente&id=" . $componente['id'] . "'><i class='fas fa-trash-alt'></i></a></td>";
            echo "</tr>";

            ?>
        </tbody>
    </table>

</body>

</html>