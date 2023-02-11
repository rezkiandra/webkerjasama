<?php
require_once("./bin/koneksi.php");

$hostname           = "localhost";
$user               = "root";
$pwd                = "";
$db                 = "kerjasama";

$koneksi = mysqli_connect($hostname, $user, $pwd, $db);
if (!$koneksi) {
    die("Belum terkoneksi");
} else {
    // echo "Koneksi berhasil";
}

// Kerjasama Dalam Negeri
$sql                    = "SELECT * FROM tb_kerjasama_dalam";
$kerjasama_dalam        = mysqli_query($koneksi, $sql);
$jumlah_internal        = mysqli_num_rows($kerjasama_dalam);

// Kerjasama Luar Negeri
$sql                    = "SELECT * FROM tb_kerjasama_luar";
$kerjasama_luar         = mysqli_query($koneksi, $sql);
$jumlah_external        = mysqli_num_rows($kerjasama_luar);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <title>Beranda - Kerjasama</title>

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="./assets/vendor/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <!-- ========== Start Banner ========== -->
    <section id="banner" class="h-75">
        <div class="pt-3 pb-4">
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
            <a href="#carousel" class="btn btn-outline-dark btn-warning rounded border border-warning border-2 shadow my-4">Selengkapnya</a>
        </div>
    </section>
    <!-- ========== End Banner ========== -->

    <!-- ========== Start Carousel ========== -->
    <section id="carousel" class="pt-5">
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></button>
                </div>
                <div class="carousel-inner shadow-sm">
                    <div class="carousel-item active" data-bs-interval="5000">
                        <img src="./assets/img/carousel1.jpg" class="d-block w-100">
                    </div>
                    <div class="carousel-item" data-bs-interval="5000">
                        <img src="./assets/img/carousel2.jpg" class="d-block w-100">
                    </div>
                    <div class="carousel-item" data-bs-interval="5000">
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
        <div class="container bg-light mt-5 rounded shadow-sm pb-3">
            <h2 class="text-center pt-4">Grafik MoU</h2>
            <div class="d-lg-flex justify-content-around">
                <div class="col-lg-8 d-lg-flex justify-content-center gap-5">
                    <div class="col-lg-6 border rounded shadow-sm my-4">
                        <h5 class="text-uppercase text-center rounded text-bold text-light py-2 bg-chart" style="font-size: 16px;">Kerjasama Dalam 3 Tahun Terakhir</h5>
                        <canvas id="myChart"></canvas>
                    </div>
                    <div class="col-lg-6 border rounded shadow-sm my-4">
                        <h5 class="text-uppercase text-center rounded text-bold text-light py-2 bg-chart" style="font-size: 16px;">Jumlah MoU Dalam 5 Tahun Terakhir</h5>
                        <canvas id="myChart3" style="height: 20vh;"></canvas>
                    </div>
                </div>
            </div>
            <div class="d-lg-flex flex-row justify-content-center align-items-center gap-5">
                <div class="col-lg-4 border rounded bg-white d-flex justify-content-center my-3 shadow-sm">
                    <div class="bg-counter text-light w-25 d-flex justify-content-center align-items-center" style="font-size: 20px;"><?php echo $jumlah_internal ?></div>
                    <div class="subject container my-1">
                        <p class="text-uppercase">Total Kerjasama Dalam Negeri</p>
                        <a href="" class="btn btn-sm mb-1 btn-outline-dark text-uppercase">Detail</a>
                    </div>
                </div>
                <div class="col-lg-4 border rounded bg-white d-flex justify-content-center my-3 shadow-sm">
                    <div class="bg-counter text-light w-25 d-flex justify-content-center align-items-center" style="font-size: 20px;"><?php echo $jumlah_external ?></div>
                    <div class="subject container my-1">
                        <p class="text-uppercase">Total Kerjasama Luar Negeri</p>
                        <a href="" class="btn btn-sm mb-1 btn-outline-dark text-uppercase">Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========== End Deskripsi ========== -->

    <!-- ========== Start Berita ========== -->
    <section id="berita" class="h-50">
        <div class="container rounded shadow-sm mt-5 bg-light d-lg-flex justify-content-center align-items-center">
            <div class="col-lg-8 pt-4">
                <h4 class="text-uppercase text-center">Berita Terbaru</h4>
                <div class="d-lg-flex flex-column justify-content-evenly align-items-center">
                    <div class="d-lg-flex    flex-row justify-content-evenly align-items-center">
                        <?php
                        $sql   = "SELECT * FROM tb_berita ORDER BY ID DESC LIMIT 2";
                        $query    = mysqli_query($koneksi, $sql);
                        while ($q = mysqli_fetch_array($query)) {
                            $id                = $q['id'];
                            $judul             = $q['judul'];
                            $deskripsi         = $q['deskripsi'];
                            $lokasi            = $q['lokasi'];
                            $tanggal           = $q['tanggal'];
                            $gambar            = $q['gambar'];
                        ?>
                            <div class="col-lg-5 border rounded my-4 shadow-sm">
                                <div class="rounded mt-2 ms-2 bg-warning position-absolute"><?php echo date('d F Y', strtotime($tanggal)) ?></div>
                                <img src="./admin/assets/upload/berita/<?php echo $gambar ?>" alt="" class="img-fluid">
                                <div class="my-3 mx-2">
                                    <h6><?php echo $judul ?></h6>
                                    <p><?php echo $deskripsi ?></p>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                    <div class="d-lg-flex flex-row justify-content-evenly align-items-center">
                        <?php
                        $sql   = "SELECT * FROM tb_berita ORDER BY ID DESC LIMIT 2, 2";
                        $query    = mysqli_query($koneksi, $sql);
                        while ($q = mysqli_fetch_array($query)) {
                            $id                = $q['id'];
                            $judul             = $q['judul'];
                            $deskripsi         = $q['deskripsi'];
                            $lokasi            = $q['lokasi'];
                            $tanggal           = $q['tanggal'];
                            $gambar            = $q['gambar'];
                        ?>
                            <div class="col-lg-5 border rounded my-4 shadow-sm">
                                <div class="rounded mt-2 ms-2 bg-warning position-absolute"><?php echo date('d F Y', strtotime($tanggal)) ?></div>
                                <img src="./admin/assets/upload/berita/<?php echo $gambar ?>" alt="" class="img-fluid">
                                <div class="my-3 mx-2">
                                    <h6><?php echo $judul ?></h6>
                                    <p><?php echo $deskripsi ?></p>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <h4 class="text-uppercase text-center mt-5">Galeri</h4>
                <div class="d-lg-flex flex-column mt-4 pb-2">
                    <?php
                    $sql      = "SELECT * FROM tb_foto ORDER BY ID ASC LIMIT 2";
                    $query    = mysqli_query($koneksi, $sql);
                    while ($q = mysqli_fetch_array($query)) {
                        $id                = $q['id'];
                        $judul_foto        = $q['judul_foto'];
                        $lokasi            = $q['lokasi'];
                        $tanggal           = $q['tanggal'];
                        $gambar            = $q['gambar'];
                    ?>
                        <div class="col-lg-12 border rounded mb-4 shadow-sm">
                            <div class="rounded mt-2 ms-2 bg-warning position-absolute"><?php echo date('d F Y', strtotime($tanggal)) ?></div>
                            <img src="./admin/assets/upload/galeri/<?php echo $gambar ?>" alt="" class="img-fluid">
                            <div class="my-3 mx-2">
                                <h6><?php echo $judul_foto ?></h6>
                                <p><?php echo $deskripsi ?></p>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <?php include "./layout/footer.php"; ?>
    </section>
    <!-- ========== End Berita ========== -->
</body>

<!-- Chart JS -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="./assets/js/chart.js"></script>
<script src="./assets/js/chart2.js"></script>
<script src="./assets/js/chart3.js"></script>
<!-- End Chart JS -->

<script>
    // Memanggil data dari database
    <?php

    ?>

    // Chart 1
    const ctx = document.getElementById("myChart");
    ctx.height = 300;

    new Chart(ctx, {
        type: "bar",
        data: {
            labels: ["2018", "2019", "2020", "2021", "2022", "Luar Negeri"],
            datasets: [{
                label: 'Total Kerjasama',
                data: [
                    <?php
                    $sql          = "SELECT * FROM tb_kerjasama_dalam WHERE waktu_mulai LIKE '%2018'";
                    $jml_thn_2018 = mysqli_query($koneksi, $sql);
                    echo mysqli_num_rows($jml_thn_2018);
                    ?>,
                    <?php
                    $sql          = "SELECT * FROM tb_kerjasama_dalam WHERE waktu_mulai LIKE '%2019'";
                    $jml_thn_2019 = mysqli_query($koneksi, $sql);
                    echo mysqli_num_rows($jml_thn_2019);
                    ?>,
                    <?php
                    $sql          = "SELECT * FROM tb_kerjasama_dalam WHERE waktu_mulai LIKE '%2020'";
                    $jml_thn_2020 = mysqli_query($koneksi, $sql);
                    echo mysqli_num_rows($jml_thn_2020);
                    ?>,
                    <?php
                    $sql          = "SELECT * FROM tb_kerjasama_dalam WHERE waktu_mulai LIKE '%2021'";
                    $jml_thn_2021 = mysqli_query($koneksi, $sql);
                    echo mysqli_num_rows($jml_thn_2021);
                    ?>,
                    <?php
                    $sql          = "SELECT * FROM tb_kerjasama_dalam WHERE waktu_mulai LIKE '%2022'";
                    $jml_thn_2022 = mysqli_query($koneksi, $sql);
                    echo mysqli_num_rows($jml_thn_2022);
                    ?>,
                    <?php
                    $sql          = "SELECT * FROM tb_kerjasama_luar";
                    $jml_luar_negeri = mysqli_query($koneksi, $sql);
                    echo mysqli_num_rows($jml_luar_negeri);
                    ?>,
                ],
                borderWidth: 2,
                backgroundColor: [
                    "rgba(255, 99, 132, .7)",
                    "rgba(255, 159, 64, .7)",
                    "rgba(255, 205, 86, .7)",
                    "rgba(75, 192, 192, .7)",
                    "rgba(54, 162, 235, .7)",
                    "rgba(54, 112, 14, .7)",
                ],
                borderColor: [
                    "rgba(255, 99, 132)",
                    "rgba(255, 159, 64)",
                    "rgba(255, 205, 86)",
                    "rgba(75, 192, 192)",
                    "rgba(54, 162, 235)",
                    "rgba(54, 112, 14)",
                ],
            }, ],
        },
        options: {
            interaction: {
                mode: "nearest",
            },
            plugins: {
                legend: {
                    display: true,
                    position: "top",
                    align: "center",
                },
            },
            scales: {
                y: {
                    min: 0,
                    setInterval: 10,
                    max: 50,
                    beginAtZero: true,
                },
            },
        },
    });

    // End Chart1

    // Chart 3
    const ctx3 = document.getElementById("myChart3");
    ctx3.height = 100;

    new Chart(ctx3, {
        type: "pie",
        data: {
            labels: ["2018", "2019", "2020", "2021", "2022", "Luar Negeri"],
            datasets: [{
                label: "Total MoU",
                data: [
                    <?php
                    $sql          = "SELECT * FROM tb_kerjasama_dalam WHERE waktu_mulai LIKE '%2018'";
                    $jml_thn_2018 = mysqli_query($koneksi, $sql);
                    echo mysqli_num_rows($jml_thn_2018);
                    ?>,
                    <?php
                    $sql          = "SELECT * FROM tb_kerjasama_dalam WHERE waktu_mulai LIKE '%2019'";
                    $jml_thn_2019 = mysqli_query($koneksi, $sql);
                    echo mysqli_num_rows($jml_thn_2019);
                    ?>,
                    <?php
                    $sql          = "SELECT * FROM tb_kerjasama_dalam WHERE waktu_mulai LIKE '%2020'";
                    $jml_thn_2020 = mysqli_query($koneksi, $sql);
                    echo mysqli_num_rows($jml_thn_2020);
                    ?>,
                    <?php
                    $sql          = "SELECT * FROM tb_kerjasama_dalam WHERE waktu_mulai LIKE '%2021'";
                    $jml_thn_2021 = mysqli_query($koneksi, $sql);
                    echo mysqli_num_rows($jml_thn_2021);
                    ?>,
                    <?php
                    $sql          = "SELECT * FROM tb_kerjasama_dalam WHERE waktu_mulai LIKE '%2022'";
                    $jml_thn_2022 = mysqli_query($koneksi, $sql);
                    echo mysqli_num_rows($jml_thn_2022);
                    ?>,
                    <?php
                    $sql          = "SELECT * FROM tb_kerjasama_luar";
                    $jml_luar_negeri = mysqli_query($koneksi, $sql);
                    echo mysqli_num_rows($jml_luar_negeri);
                    ?>,
                ],
                backgroundColor: [
                    "rgba(2, 99, 132, .9)",
                    "rgba(54, 162, 235, .9)",
                    "rgba(255, 205, 86, .9)",
                    "rgba(15, 205, 86, .9)",
                    "rgba(87, 7, 86, .9)",
                    "rgba(87, 7, 86, .9)",
                ],
                borderColor: [
                    "rgb(2, 99, 132)",
                    "rgb(54, 162, 235)",
                    "rgb(255, 205, 86)",
                    "rgb(15, 205, 86)",
                    "rgb(87, 7, 86)",
                    "rgb(87, 7, 86)",
                ],
                hoverOffset: 2,
                borderWidth: 2,
            }, ],
            options: {
                responsive: true,
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Chart.js Doughnut Chart'
                },
                animation: {
                    animateScale: true,
                    animateRotate: true
                },
                maintainAspectRatio: false,
            },
        },
    });
    // End Chart 3
</script>

</html>