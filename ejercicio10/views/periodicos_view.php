<html>
    <head>
        <title>Catálogo Periodicos</title>
    </head>
    <body>
        <h1>Periodicos dados de alta en nuestra libreria</h1>
        <table border="1">
        <tr>
            <th>Nombre</th>
            <th>fecha</th>
        </tr>
        <?php foreach ($periodicos as $periodico): ?>
            <tr>
                <td><?php echo $periodico['nombre']?></td>
                <td><?php echo $periodico['fecha'] ?></td>
            </tr>
        <?php endforeach; ?>
        
    </table>
    </body>
</html>