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
    <form action="" method="post">
      <label for="titulo-obra">Titulo</label>
      <input id=titulo-obra name="titleArt" type="text">

      <label for="age-art">Año</label>
      <input id=age-art name="ageArt" type="number">

      <label for="author-art">Autor</label>
      <input id="author-art" name="authorArt" type="text">

      <label for="art">Imagen de la obra de arte</label>
      <input enctype="multipart/form-data" type="file">

      <button>Añadir</button>

    </form>
  </section>
  <?php include_once 'views/footer.php' ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>