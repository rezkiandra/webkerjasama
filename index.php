<?php
require_once("./bin/koneksi.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <title>Beranda - Kerjasama</title>

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="./assets/vendor/bootstrap-icons/bootstrap-icons.css">
</head>

<body>
    <!-- ========== Start Banner ========== -->
    <section id="banner" class="h-50">
        <div class="pt-5 pb-4">
            <?php include "./layout/header.php" ?>
        </div>
        <div class="container d-flex flex-column align-items-center">
            <div class="banner-title mt-3">
                <h2 class="fw-bold text-light text-center">Selamat Datang Di Website</h2>
                <h2 class="fw-bold text-light text-center">Kerja Sama Politeknik Negeri Sambas</h2>
            </div>
            <div class="banner-subtitle pt-4 pb-2">
                <h5 class="text-light text-center">Ayo Jalin Kerja Sama Bersama Kami</h5>
                <h5 class="text-light text-center">Untuk Meningkatkan Kebersamaan Antar Perguruan Tinggi</h5>
            </div>
            <a href="" class="btn btn-light text-dark rounded border border-warning border-3 shadow my-4">Selengkapnya</a>
        </div>
    </section>
    <!-- ========== End Banner ========== -->

    <!-- ========== Start Carousel ========== -->
    <section id="carousel" class="mt-5 pt-5">
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-interval="2000">
                        <img src="./assets/img/carousel1.jpg" class="d-block w-100">
                    </div>
                    <div class="carousel-item" data-interval="2000">
                        <img src="./assets/img/carousel2.jpg" class="d-block w-100">
                    </div>
                    <div class="carousel-item" data-interval="2000">
                        <img src="./assets/img/carousel3.jpg" class="d-block w-100">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    <!-- ========== End Carousel ========== -->


    <section id="grafik">
        <div class="container bg-light mt-5 rounded shadow pb-5">
            <h2 class="text-center py-4">Grafik MoU</h2>
            <div class="d-lg-flex justify-content-around">
                <div class="col-lg-8 d-lg-flex justify-content-around gap-5 pb-5">
                    <div class="col-lg-6 border rounded shadow-sm">
                        <h5 class="text-uppercase text-center rounded text-bold text-light py-2 bg-chart" style="font-size: 16px;">Kerjasama Dalam 3 Tahun Terakhir</h5>
                        <canvas id="myChart"></canvas>
                    </div>
                    <div class="col-lg-6 border rounded shadow-sm">
                        <h5 class="text-uppercase text-center rounded text-bold text-light py-2 bg-chart" style="font-size: 16px;">Kerjasama Dalam 3 Tahun Terakhir</h5>
                        <canvas id="myChart3" style="height: 20vh;"></canvas>
                    </div>
                </div>
            </div>
            <div class="d-lg-flex flex-row justify-content-center align-items-center gap-2">
                <div class="col-lg-4 border rounded bg-white d-flex justify-content-center">
                    <h4 class="bg-counter text-light w-25 d-flex justify-content-center align-items-center">15</h4>
                    <div class="subject">
                        <p class="text-uppercase ms-2">Kerjasama Dalam Negeri 3 Tahun Terakhir</p>
                        <a href="" class="btn btn-sm ms-2 btn-light text-uppercase">Detail</a>
                    </div>
                </div>
                <div class="col-lg-4 border rounded bg-white d-flex justify-content-center">
                    <h4 class="bg-counter text-light w-25 d-flex justify-content-center align-items-center">15</h4>
                    <div class="subject">
                        <p class="text-uppercase ms-2">Kerjasama Dalam Negeri 3 Tahun Terakhir</p>
                        <a href="" class="btn btn-sm ms-2 btn-light text-uppercase">Detail</a>
                    </div>
                </div>
                <div class="col-lg-4 border rounded bg-white d-flex justify-content-center">
                    <h4 class="bg-counter text-light w-25 d-flex justify-content-center align-items-center">15</h4>
                    <div class="subject">
                        <p class="text-uppercase ms-2">Kerjasama Dalam Negeri 3 Tahun Terakhir</p>
                        <a href="" class="btn btn-sm ms-2 btn-light text-uppercase">Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========== End Deskripsi ========== -->

    <!-- ========== Start Galeri ========== -->
    <section id="galeri">
        <div class="container rounded shadow mt-5 bg-light d-lg-flex justify-content-center align-items-center">
            <div class="col-lg-8 my-5">
                <h4 class="text-uppercase text-center">Galeri</h4>
                <div class="d-lg-flex flex-column justify-content-evenly align-items-center gap-4">
                    <div class="container d-lg-flex my-4 flex-row justify-content-evenly align-items-center">
                        <div class="col-lg-5 border rounded">
                            <div class="float-end mt-2 ms-2 bg-warning position-absolute">25/05/2015</div>
                            <img src="./assets/img/poltesa-home.jpg" alt="" class="img-fluid">
                            <div class="container my-3">
                                <h6>Foto Bersama Direktur Polnep</h6>
                                <p>Pada tanggal 24 September 2023...</p>
                                <a href="" class="btn btn-sm btn-secondary">Kunjungi</a>
                            </div>
                        </div>
                        <div class="col-lg-5 border rounded">
                            <div class="float-end mt-2 ms-2 bg-warning position-absolute">25/05/2015</div>
                            <img src="./assets/img/poltesa-home.jpg" alt="" class="img-fluid">
                            <div class="container my-3">
                                <h6>Foto Bersama Direktur Polnep</h6>
                                <p>Pada tanggal 24 September 2023...</p>
                                <a href="" class="btn btn-sm btn-secondary">Kunjungi</a>
                            </div>
                        </div>
                    </div>
                    <div class="container d-lg-flex flex-row justify-content-evenly align-items-center">
                        <div class="col-lg-5 border rounded">
                            <div class="float-end mt-2 ms-2 bg-warning position-absolute">25/05/2015</div>
                            <img src="./assets/img/poltesa-home.jpg" alt="" class="img-fluid">
                            <div class="container my-3">
                                <h6>Foto Bersama Direktur Polnep</h6>
                                <p>Pada tanggal 24 September 2023...</p>
                                <a href="" class="btn btn-sm btn-secondary">Kunjungi</a>
                            </div>
                        </div>
                        <div class="col-lg-5 border rounded">
                            <div class="float-end mt-2 ms-2 bg-warning position-absolute">25/05/2015</div>
                            <img src="./assets/img/poltesa-home.jpg" alt="" class="img-fluid">
                            <div class="container my-3">
                                <h6>Foto Bersama Direktur Polnep</h6>
                                <p>Pada tanggal 24 September 2023...</p>
                                <a href="" class="btn btn-sm btn-secondary">Kunjungi</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <h4 class="text-uppercase text-center mb-5">Berita Terbaru</h4>
                <div class="container d-lg-flex flex-column gap-5">
                    <div class="col-lg-12 border rounded">
                        <div class="float-end mt-2 ms-2 bg-warning position-absolute">25/05/2015</div>
                        <img src="./assets/img/poltesa-home.jpg" alt="" class="img-fluid">
                        <div class="container my-3">
                            <h6>Foto Bersama Direktur Polnep</h6>
                            <p>Pada tanggal 24 September 2023...</p>
                            <a href="" class="btn btn-sm btn-secondary">Kunjungi</a>
                        </div>
                    </div>
                    <div class="col-lg-12 border rounded">
                        <div class="float-end mt-2 ms-2 bg-warning position-absolute">25/05/2015</div>
                        <img src="./assets/img/poltesa-home.jpg" alt="" class="img-fluid">
                        <div class="container my-3">
                            <h6>Foto Bersama Direktur Polnep</h6>
                            <p>Pada tanggal 24 September 2023...</p>
                            <a href="" class="btn btn-sm btn-secondary">Kunjungi</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========== End Galeri ========== -->

    <section>
        <?php include "./layout/footer.php" ?>
    </section>
</body>

<!-- Chart JS -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="./assets/js/chart.js"></script>
<script src="./assets/js/chart2.js"></script>
<script src="./assets/js/chart3.js"></script>
<!-- End Chart JS -->



</html>