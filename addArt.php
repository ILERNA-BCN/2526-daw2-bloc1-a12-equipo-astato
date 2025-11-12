<?php include 'includes/LoginValidate.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="css/estilos.css">
  <link rel="icon" type="image/png" href="./assets/images/logo.png">

  <title>Agregar Arte</title>
</head>



<body>
  <?php include_once 'views/header.php' ?>

  <h1 class="d-flex flex-column text-center my-4">
    <span class="">Sube Tu</span>
    <span class="fw-bold">Obra De Arte</span>
  </h1>

  <section class="add-art container  my-5 p-4 border rounded-3 bg-light shadow ">
    <form action="./includes/AddArt.php" method="post" enctype="multipart/form-data">
      <div class="my-3 mb-3">


        <label for="titulo-obra">Titulo</label>
        <input class="form-control" id=titulo-obra name="titleArt" type="text" required>

        <label for="year-art">Año</label>
        <input class="form-control" id=year-art name="yearArt" type="number" required>

        <label for="art">Imagen de la obra de arte</label>
        <input class="form-control" type="file" name="imgArt" id="art" required>

      </div>
      <button class="btn-add-art">Añadir</button>




    </form>
  </section>
  <?php include_once 'views/footer.php' ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>