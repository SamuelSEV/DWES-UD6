<?php
    session_start();
    if (!isset($_SESSION['nombre'])) {
            
        header("Location: index.php?controller=usuarios&action=formularioLogin");
            
    }
    
    function listar() {
       
        require 'models/componentes_model.php';   
        $componentes = obtenerTodos();
        include 'views/componentes_view.php';
    }

    function mostrarComponente() {
        require 'models/componentes_model.php';
        
        $componente = obtenerElemento($_GET['id']);
        include 'views/componente_view.php';
    }

    function detalleComponente() {
        require 'models/componentes_model.php';        
        $componente = obtenerElemento($_GET['id']);
       
        include 'views/componente_detalle_view.php';
    }

    function eliminarComponente() {
        require 'models/componentes_model.php';        
        $componente = obtenerElemento($_GET['id']);
        $errorBorrar = "";
        $correcto = "";
        if (!eliminarElemento($_GET['id'])){
            $errorBorrar = "Ha ocurrido un error al borrar intentelo de nuevo";
        }
        else {
            $correcto = "Se ha eliminado el elemento con la id: $_GET[id] correctamente ";
        }
        
        include 'views/componente_delete_view.php';
    }

    function insertarComponente() {
        require 'models/componentes_model.php';
        $imagen;
        $errorCrear = "";
        $noimagen = "";
        $imagenExiste = "";
        $imposibleSubir = "";
        $errorSubir = "";
        $imagenSubida = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['submit'] == "Registrar") {

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
            
            //Se extraigan los campos de los inputs y se llame a la funci??n **insertaElemento**, 
            //el campo relacionado con la imagen almacenar?? el nombre de esta.
            
            $marca = $_POST['marca'];
            $modelo = $_POST['modelo'];
            $descripcion =  $_POST['descripcion'];
            $precio = $_POST['precio'];
            $cantidad = $_POST['cantidad'];
            $fecha = $_POST['fecha'];
            $imagen = $_FILES['imagen']['name'];

            //Si ha sido posible insertar el elemento, se redirigir?? a la p??gina ***view.php*** con un par??metro que sea el id del elemento que se acaba de a??adir.
            $id =  insertarElemento($marca, $modelo, $descripcion, $precio, $cantidad, $fecha, $imagen);
            if ($id > 0){
                header("Location: index.php?controller=componentes&action=detalleComponente&id=$id");
                
            }
            //Si no ha sido posible insertar el elemento, se mostrar?? un mensaje de error.
            else {
                $errorCrear = "Error al insertar elemento";
                
            }
        }
       include 'views/componente_crear_view.php';
    }

    function editarComponente() {
        require 'models/componentes_model.php';
        $componente = obtenerElemento($_GET['id']);
        $errorEditar = "";
        $noimagen = "";
        $imagenExiste = "";
        $imposibleSubir = "";
        $errorSubir = "";
        $imagenSubida = "";        
       
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $id = $_POST['id'];
            $componente = obtenerElemento($id);
            $marca = $_POST['marca'];
            $modelo = $_POST['modelo'];
            $descripcion =  $_POST['descripcion'];
            $precio = $_POST['precio'];
            $cantidad = $_POST['cantidad'];
            $fecha = $_POST['fecha'];
            $imagen = $_FILES['imagen']['name'];
            
            if ($imagen == "") {
                $imagen = $componente['imagen'];
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
                if ($marca == $componente['marca'] && $modelo == $componente['modelo'] && $descripcion == $componente['descripcion'] && $precio == $componente['precio'] && $cantidad == $componente['cantidad'] && $fecha == $componente['fechalanzamiento'] && $imagen == $componente['imagen']) {
                    $errorEditar = "Error al editar  elemento";
                    header("Location: index.php?controller=componentes&action=editarComponente&id=$id");
                }
                else {
                    editarElemento($id, $marca, $modelo, $descripcion, $precio, $cantidad, $fecha, $imagen);
                    
                    header("Location: index.php?controller=componentes&action=mostrarComponente&id=$id");
                }
            }
        }
        include 'views/componente_edit_view.php'; 
    }
