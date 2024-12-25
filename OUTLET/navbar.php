<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="#">
        <i class="fas fa-tshirt"></i> Outlet Baju
      </a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="navbar.php">
            <i class="fas fa-home"></i> Beranda
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./admin/produk.php">
            <i class="fas fa-link"></i> Produk
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./admin/kontak.php">
            <i class="fas fa-phone"></i> Kontak
          </a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">
          <i class="fas fa-search"></i> Search
        </button>
      </form>
    </div>
  </div>
</nav>
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
