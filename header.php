<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome untuk ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>WorldGreen</title>
    <style>
    .navbar-brand {
        font-weight: 700;
        color:rgb(47, 163, 192);

    .navbar {
        background-color: #f8f9fa;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .nav-link {
        color:rgb(95, 110, 124);
        font-weight: 500;
        margin: 0 5px;
    }

    .nav-link:hover {
        color:rgb(1, 1, 3);
    }

    .logo-icon {
        color:rgb(47, 163, 192);
        margin-right: 8px;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container">
            <!-- Logo EcoGreen dengan ikon -->
            <a class="navbar-brand" href="index.php?page=landing_page">
                <i class="fas fa-leaf logo-icon"></i>EcoGreen
            </a>

            <!-- Tombol toggle untuk mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu navigasi -->
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav text-center">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php?page=landing_page">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=landing_page#about">Tentang Kami</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Produk
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="index.php?page=halaman_produk">Semua Produk</a></li>
                </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=landing_page#company">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="f">Kontak</a>
                </li>
                </ul>
            </div>

                <!-- Tombol aksi -->
                <div class="d-flex">
                    <a href="login.php" class="btn btn-outline-success me-2">
                        <i class="fas fa-user"></i> Masuk
                    </a>
                </div>
        </div>
    </nav>
    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>