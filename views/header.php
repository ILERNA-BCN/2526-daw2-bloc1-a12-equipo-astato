<style>

</style>

<!-- Header Navbar -->
<nav class="header-nav">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center">
      <!-- Logo -->
      <div class="header-logo" onclick="window.location.href='index.php'">
        <img src="./assets/images/logo.png" alt="Logo" />
      </div>

      <!-- Navigation Links -->
      <ul class="nav-links">
        <li><a href="index.php" class="active">Home</a></li>
        <li><a href="#gallery">Gallery</a></li>
      </ul>

      <!-- User Section -->
      <div class="header-user-section">
        <?php if (isset($_SESSION['username'])): ?>
          <p class="header-user-name">Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?></p>
          <button class="btn-add-art" onclick="window.location.href='./agregar_obra.php'">
            + Add Art
          </button>
          <button class="btn-logout" onclick="window.location.href='includes/Logout.php'">
            Logout
          </button>
        <?php else: ?>
          <button class="btn-add-art" onclick="window.location.href='./login.php'">
            + Add Art
          </button>
        <?php endif; ?>
      </div>

    </div>
  </div>
</nav>
<!-- End Header -->