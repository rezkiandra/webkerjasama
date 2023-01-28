<?php
require_once("../bin/koneksi.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Kontak - Poltesa</title>
    <!-- Fonts Google -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <!-- Vendor CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap-icons/bootstrap-icons.css">
</head>

<body>
    <!-- ========== Start Topbar ========== -->
    <section id="topbar">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <div class="col-4">
                    <img src="../assets/img/brand.png" alt="" class="top-brand w-100">
                </div>
                <div class="col-8">
                    <div class="d-flex justify-content-end align-items-center">
                        <button class="btn text-uppercase text-primary">
                            <i class="bi bi-globe text-primary me-2"></i>in
                        </button>
                        <span class="wall text-primary btn">|</span>
                        <button class="btn text-uppercase text-primary">
                            <i class="bi bi-globe text-primary me-2"></i>en
                        </button>
                    </div>
                </div>
            </div>
        </nav>
    </section>
    <!-- ========== End Topbar ========== -->

    <!-- ========== Start Navbar ========== -->
    <section id="navbar">
        <nav class="navbar navbar-expand-lg navbar-light bg-primary shadow-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="./index.php">
                    <i class="bi bi-house"></i>
                </a>
                <button class="navbar-toggler border-light rounded d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="bi bi-list"></i>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <div class="container-lg">
                        <ul class="navbar-nav d-flex justify-content-evenly align-items-start">
                            <li class="nav-item">
                                <a class="nav-link text-light text-uppercase" href="./berita.php"><i class="bi bi-globe pe-3"></i>Berita</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link text-light text-uppercase dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="bi bi-envelope pe-3"></i>Mitra</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownId">
                                    <a class="dropdown-item d-block" href="./mitra.php#internal">Dalam Negeri</a>
                                    <a class="dropdown-item d-block" href="./mitra.php#external">Luar Negeri</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link text-light text-uppercase dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="bi bi-bookmark pe-3"></i>Kerjasama</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownId">
                                    <a class="dropdown-item d-block" href="./kerjasama_2018.php">Tahun 2018</a>
                                    <a class="dropdown-item d-block" href="./kerjasama_2019.php">Tahun 2019</a>
                                    <a class="dropdown-item d-block" href="./kerjasama_2020.php">Tahun 2020</a>
                                    <a class="dropdown-item d-block" href="./kerjasama_2021.php">Tahun 2021</a>
                                    <a class="dropdown-item d-block" href="./kerjasama_luar.php">Luar Negeri</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link text-light text-uppercase dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="bi bi-folder pe-3"></i>Galeri</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownId">
                                    <a class="dropdown-item d-block" href="#">Dalam Negeri</a>
                                    <a class="dropdown-item d-block" href="#">Luar Negeri</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link text-light text-uppercase dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="bi bi-telephone pe-3"></i>Hubungi Kami</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownId">
                                    <a class="dropdown-item d-block" href="#">Facebook</a>
                                    <a class="dropdown-item d-block" href="#">Youtube</a>
                                    <a class="dropdown-item d-block" href="#">Instagram</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <button class="btn d-lg-flex justify-content-end align-items-center">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
            </div>
        </nav>
    </section>
    <!-- ========== End Navbar ========== -->

    <!-- ========== Start Main ========== -->
    <section id="main">
        <div class="container my-5">
            <h2 class="text-dark fw-normal">Hubungi Kami</h2>
            <p class="text-dark">Bagian Kerjasama dan Kelembagaan Politeknik Negeri Sambas</p>
            <p class="text-dark">Gedung Direktorat POLTESA</p>
            <p class="text-dark">
                <i class="bi bi-house-fill me-1"></i>
                Jalan Sejangkung 50 Sambas
            </p>
            <p class="text-dark">
                <i class="bi bi-telephone-inbound-fill me-1"></i>
                (0562) 6303123
            </p>
            <p class="text-dark">
                <i class="bi bi-envelope-fill me-1"></i>
                info@poltesa.ac.id
            </p>
        </div>
    </section>
    <!-- ========== End Main ========== -->

    <!-- ========== Start Footer ========== -->
    <section id="footer" class="mt-5 bg-secondary">
        <div class="container bg-secondary">
            <div class="d-lg-flex justify-content-start align-items-center">
                <div class="col-lg-3 mb-3 d-lg-flex flex-column justify-content-center text-start">
                    <h4 class="text-uppercase text-light mt-4 text-center">Alamat</h4>
                    <p class="text-light" style="font-size: 14px;"><i class="bi bi-globe me-2"></i>Jalan Raya Sejangkung Pendidikan Sambas - Kalimantan Barat 79460</p>
                    <p class="text-light" style="font-size: 14px;"><i class="bi bi-globe me-2"></i>(0562) 6303123</p>
                    <p class="text-light" style="font-size: 14px;"><i class="bi bi-globe me-2"></i>info@poltesa.ac.id</p>
                </div>
                <div class="col-lg-6 mb-3 d-lg-flex flex-column justify-content-center align-items-center">
                    <h4 class="text-uppercase text-light mt-4">Politeknik Negeri Sambas</h4>
                    <img src="../assets/img/white.png" class="img-fluid w-25">
                </div>
                <div class="col-lg-3 mb-3">
                    <div class="col-lg d-lg-flex flex-column justify-content-center text-start">
                        <h4 class="text-uppercase text-light text-center mt-4">Ikuti Kami</h4>
                        <div class="d-grid gap-3">
                            <a href="" class="text-decoration-none text-light text-uppercase" style="font-size: 14px;">
                                <i class="bi bi-facebook me-2"></i>Facebook
                            </a>
                            <a href="" class="text-decoration-none text-light text-uppercase" style="font-size: 14px;">
                                <i class="bi bi-twitter me-2"></i>Twitter
                            </a>
                            <a href="" class="text-decoration-none text-light text-uppercase" style="font-size: 14px;">
                                <i class="bi bi-instagram me-2"></i>Instagram
                            </a>
                            <a href="" class="text-decoration-none text-light text-uppercase" style="font-size: 14px;">
                                <i class="bi bi-youtube me-2"></i>Youtube
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-dark d-lg-flex align-items-center justify-content-center">
            <p class="text-light text-center py-2">&copy 2022 Poltesa All Rights Reserved</p>
        </div>
    </section>
    <!-- ========== End Footer ========== -->
</body>
<!-- Boostrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>