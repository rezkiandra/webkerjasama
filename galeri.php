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

    <!-- Fonts Google -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <title>Galeri - Poltesa</title>

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
                <button class="navbar-toggler border-light rounded shadow-sm d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
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
                                    <a class="dropdown-item d-block" href="./kerjasama_dalam.php">Dalam Negeri</a>
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

    <!-- ========== Start Frame ========== -->
    <section id="frame">
        <div class="container my-5 d-lg-flex flex-row justify-content-between">
            <div class="col-lg-6">
                <div class="d-grid gap-5">
                    <div class="content d-lg-flex justify-content-around flex-column align-items-center border border-light rounded shadow-sm">
                        <div class="col-lg-12">
                            <div class="ratio ratio-16x9 embed-responsive embed-responsive-16by9">
                                <iframe class="rounded shadow-sm" width="560" height="315" src="https://www.youtube.com/embed/X3wXl_KM7Jo" title="Profil POLTESA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <h4 class="text-secondary my-2 fw-light">Profil Politeknik Negeri Sambas (POLTESA)</h4>
                            <p class="fw-light" style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, beatae! Ex tenetur, quasi quaerat sed et voluptate repudiandae molestiae magnam, voluptas laudantium voluptatum at odit recusandae, eum maiores consequatur sit?</p>
                        </div>
                    </div>
                    <div class="content d-lg-flex justify-content-around flex-column align-items-center border border-light rounded shadow-sm">
                        <div class="col-lg-12">
                            <div class="ratio ratio-16x9 embed-responsive embed-responsive-16by9">
                                <iframe class="rounded shadow-sm" width="560" height="315" src="https://www.youtube.com/embed/X3wXl_KM7Jo" title="Profil POLTESA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <h4 class="text-secondary my-2 fw-light">Profil Politeknik Negeri Sambas (POLTESA)</h4>
                            <p class="fw-light" style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, beatae! Ex tenetur, quasi quaerat sed et voluptate repudiandae molestiae magnam, voluptas laudantium voluptatum at odit recusandae, eum maiores consequatur sit?</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="d-grid gap-5">
                    <div class="content d-lg-flex justify-content-around flex-row border border-light rounded shadow-sm">
                        <div class="col-lg-6">
                            <div class="ratio ratio-16x9 embed-responsive embed-responsive-16by9">
                                <iframe class="rounded shadow-sm" width="560" height="315" src="https://www.youtube.com/embed/X3wXl_KM7Jo" title="Profil POLTESA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col-lg-6 px-2">
                            <h5 class="text-uppercase text-secondary fw-light">Profil POLTESA</h5>
                            <p class="fw-light" style="font-size: 14px;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit, saepe?</p>
                        </div>
                    </div>
                    <div class="content d-lg-flex justify-content-around flex-row border border-light rounded shadow-sm">
                        <div class="col-lg-6">
                            <div class="ratio ratio-16x9 embed-responsive embed-responsive-16by9">
                                <iframe class="rounded shadow-sm" width="560" height="315" src="https://www.youtube.com/embed/X3wXl_KM7Jo" title="Profil POLTESA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col-lg-6 px-2">
                            <h5 class="text-uppercase text-secondary fw-light">Profil POLTESA</h5>
                            <p class="fw-light" style="font-size: 14px;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit, saepe?</p>
                        </div>
                    </div>
                    <div class="content d-lg-flex justify-content-around flex-row border border-light rounded shadow-sm">
                        <div class="col-lg-6">
                            <div class="ratio ratio-16x9 embed-responsive embed-responsive-16by9">
                                <iframe class="rounded shadow-sm" width="560" height="315" src="https://www.youtube.com/embed/X3wXl_KM7Jo" title="Profil POLTESA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col-lg-6 px-2">
                            <h5 class="text-uppercase text-secondary fw-light">Profil POLTESA</h5>
                            <p class="fw-light" style="font-size: 14px;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit, saepe?</p>
                        </div>
                    </div>
                    <div class="content d-lg-flex justify-content-around flex-row border border-light rounded shadow-sm">
                        <div class="col-lg-6">
                            <div class="ratio ratio-16x9 embed-responsive embed-responsive-16by9">
                                <iframe class="rounded shadow-sm" width="560" height="315" src="https://www.youtube.com/embed/X3wXl_KM7Jo" title="Profil POLTESA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col-lg-6 px-2">
                            <h5 class="text-uppercase text-secondary fw-light">Profil POLTESA</h5>
                            <p class="fw-light" style="font-size: 14px;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit, saepe?</p>
                        </div>
                    </div>
                    <div class="content d-lg-flex justify-content-around flex-row border border-light rounded shadow-sm">
                        <div class="col-lg-6">
                            <div class="ratio ratio-16x9 embed-responsive embed-responsive-16by9">
                                <iframe class="rounded shadow-sm" width="560" height="315" src="https://www.youtube.com/embed/X3wXl_KM7Jo" title="Profil POLTESA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col-lg-6 px-2">
                            <h5 class="text-uppercase text-secondary fw-light">Profil POLTESA</h5>
                            <p class="fw-light" style="font-size: 14px;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit, saepe?</p>
                        </div>
                    </div>
                    <div class="content d-lg-flex justify-content-around flex-row">
                        <div class="col-lg-6">
                            <div class="ratio ratio-16x9 embed-responsive embed-responsive-16by9">
                                <iframe class="rounded shadow-sm" width="560" height="315" src="https://www.youtube.com/embed/X3wXl_KM7Jo" title="Profil POLTESA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col-lg-6 px-2">
                            <h5 class="text-uppercase text-secondary fw-light">Profil POLTESA</h5>
                            <p class="fw-light" style="font-size: 14px;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit, saepe?</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========== End Frame ========== -->

</body>

<!-- Boostrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Chart JS -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="../assets/js/chart.js"></script>
<script src="../assets/js/chart2.js"></script>
<script src="../assets/js/chart3.js"></script>
<!-- End Chart JS -->



</html>