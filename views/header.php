<style>

</style>

<!-- Header Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light container-fluid">
    <div class="container-fluid">
        <!-- Logo -->
        <a class="navbar-brand" href="index.php">
            <img src="./assets/images/logo.png" alt="Logo" />
        </a>

        <!-- Botón Toggler  -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Contenido colapsable -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#gallery">Galería</a>
                </li>
            </ul>

            <!-- User Section -->
            <div class="header-user-section d-flex flex-colum flex-lg-row align-right-">
                <?php if (isset($_SESSION['username'])): ?>
                <p class="header-user-name mb-0 me-2">Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>
                </p>
                <button class="btn btn-add-art me-1" onclick="window.location.href='./agregar_obra.php'">+ Add
                    Art</button>
                <button class="btn btn-logout" onclick="window.location.href='includes/Logout.php'">Logout</button>
                <?php else: ?>
                <button class="btn btn-add-art" onclick="window.location.href='./login.php'">+ Add Art</button>
                <?php endif; ?>
            </div>
        </div>
    </div>
</nav>
<!-- End Header -->