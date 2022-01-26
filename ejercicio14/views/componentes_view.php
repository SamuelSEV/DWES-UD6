<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/botonera.css">
    <link rel="stylesheet" href="css/table.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>Lista Componentes</title>
</head>

<body>
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
                    echo "<td><a href='index.php?controller=componentes&action=mostrarComponente&id=" . $key['id'] . "'><i class='fas fa-search'></i></a></td>";
                    echo "<td><a href='index.php?controller=componentes&action=editarComponente&id=" . $key['id'] . "'><i class='fas fa-edit'></i></a></td>";
                    echo "<td><a href='index.php?controller=componentes&action=eliminarComponente&id=" . $key['id'] . "'><i class='fas fa-trash-alt'></i></a></td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>