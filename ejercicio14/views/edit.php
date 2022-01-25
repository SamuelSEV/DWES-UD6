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
        <?php
            
            $id = $_GET["id"];
            $datos = obtenerElemento($id);            
            $errorEditar = "";
            $noimagen = "";
            $imagenExiste = "";
            $imposibleSubir = "";
            $errorSubir = "";
            $imagenSubida = "";
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $id = $_POST['id'];
                $datos = obtenerElemento($id);
                $marca = $_POST['marca'];
                $modelo = $_POST['modelo'];
                $descripcion =  $_POST['descripcion'];
                $precio = $_POST['precio'];
                $cantidad = $_POST['cantidad'];
                $fecha = $_POST['fecha'];
                $imagen = $_FILES['imagen']['name'];
                
                if ($imagen == "") {
                    $imagen = $datos['imagen'];
                }
                else {
                    //subir imagen a carpeta images
                    $target_dir = "images/";
                    $target_file = $target_dir . basename($_FILES["imagen"]["name"]);
                    $uploadOk = 1;
                    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                    
                    if(isset($_POST["submit"])) {
                        $check = getimagesize($_FILES["imagen"]["tmp_name"]);
                        if($check !== false) {
                            $uploadOk = 1;
                        } else {
                            $noimagen = "Archivo no es una imagen";
                            $uploadOk = 0;
                        }
                        
                    }  
                    if (file_exists($target_file)) {
                        $imagenExiste = "Imagen ya existe.";
                        $uploadOk = 0;
                    }
                    if ($uploadOk == 0) {
                        $imposibleSubir = "Imposible subir";
                    } else {
                        if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $target_file)) {
                          $imagenSubida = "La imagen ". htmlspecialchars( basename( $_FILES["imagen"]["name"])). " a sido subida.";
                        } else {
                          $errorSubir = "Error al subir la imagen.";
                        }
                    } 
                }
              

                if(isset($_POST["submit"])) {
                    if ($marca == $datos['marca'] && $modelo == $datos['modelo'] && $descripcion == $datos['descripcion'] && $precio == $datos['precio'] && $cantidad == $datos['cantidad'] && $fecha == $datos['fechalanzamiento'] && $imagen == $datos['imagen']) {
                        $errorEditar = "Error al editar  elemento";
                        header("Location: index.php?controller=componentes&action=editarComponente&id=$id");
                    }
                    else {
                        editarElemento($id, $marca, $modelo, $descripcion, $precio, $cantidad, $fecha, $imagen);
                        
                        header("Location: index.php?controller=componentes&action=mostrarComponente&id=$id");
                    }
                }
            }
            
        ?>

        <form action="index.php?controller=componentes&action=editarComponente" method="POST" enctype="multipart/form-data"  class="form-register">
            <h2 class="form-titulo">Características:</h2>
            <div class="contenedor-inputs">
                <input type="hidden" name="id" value="<?php echo $datos['id']?>">
                <input type="text" name="marca" placeholder="Marca" class="input-100" required value="<?php echo $datos['marca']?>">
                <input type="text" name="modelo" placeholder="Modelo" class="input-100" required value="<?php echo $datos['modelo']?>">
                <input type="text" name="descripcion" placeholder="Descripcion" class="input-100" required value="<?php echo $datos['descripcion']?>">
                <input type="number" name="precio" placeholder="Precio" class="input-48" required value="<?php echo $datos['precio']?>">
                <input type="number" name="cantidad" placeholder="Cantidad" class="input-48"required value="<?php echo $datos['cantidad']?>">
                <input type="date" name="fecha" placeholder="Fecha lanzamiento" class="input-100" required value="<?php echo $datos['fechalanzamiento']?>">
                <img name="avatarActual" width=200px src="images/<?php echo $datos['imagen']?>"><!-- Aquí tienes que cargar la imagen actual -->
                <input type="file" name="imagen" accept="image/png, image/jpeg" class="input-100" >
                <input type="submit" value="Editar" class="btn-enviar" name="submit">
                <div id="errores"> <?php echo $errorEditar . "<br>"; echo $noimagen . "<br>"; echo $imagenExiste . "<br>"; echo $imposibleSubir . "<br>"; echo $errorSubir . "<br>";?></div>
                <div id="correcto"> <?php echo $imagenSubida . "<br>"; ?></div>
            </div>
        </form>
    </body>
</html>