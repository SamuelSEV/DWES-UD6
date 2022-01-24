<html>

<head>
    <title>Libro</title>
</head>

<body>
    <h1>Libro consultado</h1>
    <table border="1">
        <tr>
            <th>TITULO</th>
            <th>PRECIO</th>
            <th>ISBN</th>
        </tr>
        
        <tr>
            <td><?php echo $libro['titulo'] ?></td>
            <td><?php echo number_format($libro['precio'], 2) ?></td>
            <td><?php echo $libro['isbn'] ?></td>
        </tr>

    </table>
</body>
</html>