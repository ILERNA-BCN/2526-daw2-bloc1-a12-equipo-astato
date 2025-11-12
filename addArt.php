<?php include 'includes/LoginValidate.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="css/estilos.css">
  <title>Agregar Arte</title>
</head>



<body>
  <?php include_once 'views/header.php' ?>

  <section class="add-art">
    <form action="./includes/AddArt.php" method="post" enctype="multipart/form-data">
      <label for="titulo-obra">Titulo</label>
      <input id=titulo-obra name="titleArt" type="text">

      <label for="year-art">Año</label>
      <input id=year-art name="yearArt" type="number">

      <label for="art">Imagen de la obra de arte</label>
      <input class="form-control" type="file" name="imgArt" id="art">

      <button>Añadir</button>

    </form>
  </section>
  <?php include_once 'views/footer.php' ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>