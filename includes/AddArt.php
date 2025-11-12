<?php
session_start();

$target_dir = __DIR__ . "/../img/";

$titleArt = isset($_POST['titleArt']) ? $_POST['titleArt'] : '';
$yearArt = isset($_POST['yearArt']) ? $_POST['yearArt'] : '';
$authorArt = isset($_SESSION['username']) ? $_SESSION['username'] : '';

if (isset($_FILES["imgArt"])) {

  // Generar un nombre único para evitar colisiones
  $file_extension = pathinfo($_FILES["imgArt"]["name"], PATHINFO_EXTENSION);
  $new_file_name = uniqid("obra_", true) . "." . $file_extension;
  $target_file = $target_dir . $new_file_name;

  // Mover el archivo subido de la ubicación temporal a la ubicación final
  if (move_uploaded_file($_FILES["imgArt"]["tmp_name"], $target_file)) {

    $newArt = $titleArt . ";" . $yearArt . ";" . $authorArt . ";" . "img/" . $new_file_name . "\n";

    $galleryFile = fopen(__DIR__ . '/../data/galeria.txt', "a");
    if ($galleryFile) {
      fwrite($galleryFile, $newArt);
      fclose($galleryFile);

      header("Location: ../index.php#gallery");
      exit();
    } else {
      echo "Error al abrir el archivo de galería.";
    }
  } else {
    echo "Error al subir el archivo.";
  }
}
