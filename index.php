<?php require 'source/modal.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="asset/css/bootstrap.css">
    <link rel="stylesheet" href="asset/css/animasi.css">
    <link rel="stylesheet" href="asset/css/tambahan.css">
    <title>Basis Data</title>
</head>

<body>

    <!-- Awal Navbar -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php?halaman=home">Basis Data</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php?halaman=home">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Tampil Data
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="index.php?halaman=mahasiswa">Data Mahasiswa</a>
                            <a class="dropdown-item" href="index.php?halaman=matakuliah">Data Matakuliah</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tentang" data-toggle="modal" data-target="#tentang">Tentang</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Mulai Main Body -->
    <div class="py-3">
        <div class="container animated fadeInUp">
            <?php require 'source/menu.php' ?>
        </div>
    </div>
    <!-- Akhir Main Body -->

    <!-- Mulai Footer -->
    <footer id="sticky-footer" class="py-3 bg-dark text-white-50">
        <div class="container text-center">
            <small>Copyright &copy; <?= date('Y'); ?></small>
        </div>
    </footer>
    <!-- Akhir Footer -->

    <!-- Font Awesome -->
    <script src="asset/js/all.min.js"></script>
    <!-- Jquery -->
    <script src="asset/js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="asset/js/popper.min.js"></script>
    <!-- Bootstrap Min -->
    <script src="asset/js/bootstrap.min.js"></script>
</body>

</html>
