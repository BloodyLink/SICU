<?php

require_once('..\dao\ProductoDAO.php');

$nombre = $_POST["nombreProducto"];
$uMayorista = $_POST["uMayorista"];
$uMinorista = $_POST["uMinorista"];
$pMayorista = $_POST["pMayorista"];
$pMinorista = $_POST["pMinorista"];
$pVenta = $_POST["pVenta"];
$foto = $_FILES["foto"]["name"];
$marca = $_POST["marca"];
$categoria = $_POST["categoria"];


    $target_dir = "../uploads/";
    $target_file = $target_dir . basename($_FILES["foto"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
// Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
// Check file size
    if ($_FILES["foto"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
// Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
// Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
            echo "The file " . basename($_FILES["foto"]["name"]) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }


$productoDao = new ProductoDAO();

$productoDao->insertProducto($nombre, $uMayorista, $uMinorista, $pMayorista, $pMinorista, $pVenta, $foto, $marca, $categoria);

header('Location: ' . $_SERVER['HTTP_REFERER']);
exit;