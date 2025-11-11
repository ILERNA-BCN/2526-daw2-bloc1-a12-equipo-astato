<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Galería</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="css/estilos.css">
</head>


<body>
  <?php include 'views/header.php'; ?>
  <?php include 'views/hero.php'; ?>



  <header class="bg-dark py-3 mb-4">
    <div class="container d-flex justify-content-center">
      <h1 class="text-white">Galería</h1>
    </div>
  </header>

  <div class="container">
    <div class="row">
      <?php
      $columnas = [[], [], []];
      $col_index = 0;
      $num_columnas = 3;

      foreach ($obras as $index => $linea) {
        $datos = explode(';', $linea);
        $titulo = $datos[0] ?? 'Sin título';
        $año = $datos[1] ?? '';
        $autor = $datos[2] ?? ($creador[$index] ?? 'Desconocido');
        $imagen = $datos[3] ?? '';
        $contenido_item = '
                    <div class="card-flip"> 
                        <div class="card-flip-inner">
                            <div class="card-flip-front">
                                <img
                                    src="' . htmlspecialchars($imagen) . '"
                                    class="w-100 rounded"
                                    alt="' . htmlspecialchars($titulo) . '"
                                />
                            </div>
                            <div class="card-flip-back rounded">
                                <div>
                                    <h5 class="card-title text-center mb-2">' . htmlspecialchars($titulo) . '</h5>
                                    <p class="card-text text-center mb-0">
                                        <strong>Autor:</strong> ' . htmlspecialchars($autor) . '<br>
                                        <strong>Año:</strong> ' . htmlspecialchars($año) . '
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                ';

        $columnas[$col_index][] = $contenido_item;
        $col_index = ($col_index + 1) % $num_columnas;
      }

      for ($i = 0; $i < $num_columnas; $i++) {
        echo '<div class="col-lg-4 col-md-12 mb-4 mb-lg-0">';
        echo implode("\n", $columnas[$i]);
        echo '</div>';
      }
      ?>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<?php
include 'views/footer.php';
?>