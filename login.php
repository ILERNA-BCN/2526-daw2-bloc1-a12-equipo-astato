<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/estilos.css">
  <title>Login</title>
</head>

<body>

  <section class="vh-100">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 text-black justify-content-center d-flex flex-column align-items-center">

          <div class="px-5 ms-xl-4">
            <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
            <span class="h1 fw-bold mb-0">Logo</span>
          </div>

          <div class="d-flex align-items-start h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5 flex-column">
            <?php if (isset($_SESSION["messageLogin"]["successMessage"]) && !empty($_SESSION["messageLogin"]["successMessage"])): ?>
              <div class="login-message-success alert alert-success mb-3" role="alert"><?php echo $_SESSION["messageLogin"]["successMessage"]; ?></div>
            <?php endif; ?>
            <?php if (isset($_SESSION["messageLogin"]["errorMessage"]) && !empty($_SESSION["messageLogin"]["errorMessage"])): ?>
              <div class="login-message alert alert-danger mb-3" role="alert"><?php echo $_SESSION["messageLogin"]["errorMessage"]; ?></div>
            <?php endif; ?>
            <?php unset($_SESSION["messageLogin"]); ?>
            <form action="./includes/LoginService.php" method="post" style="width: 23rem;">

              <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in</h3>

              <div class="form-outline mb-4">
                <input type="text" id="form2Example18" name="username" class="form-control form-control-lg" />
                <label class="form-label" for="form2Example18">Usuario</label>
              </div>

              <div class="form-outline mb-4">
                <input type="password" id="form2Example28" name="password" class="form-control form-control-lg" />
                <label class="form-label" for="form2Example28">Contraseña</label>
              </div>

              <div class="pt-1 mb-4">
                <button class="btn btn-info btn-lg btn-block" type="submit">Login</button>
              </div>

              <p>¿No tienes una cuenta? <a href="#!" class="link-info">Regístrate aquí</a></p>

            </form>

          </div>

        </div>
        <div class="col-sm-6 px-0 d-none d-sm-block">
          <img src="./assets/images/login.jpg"
            alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
        </div>
      </div>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>