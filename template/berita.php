<?php
$hostname       = "localhost";
$user           = "root";
$pwd            = "";
$db             = "kerjasama";

$id             = "";
$judul          = "";
$deskripsi      = "";
$lokasi         = "";
$tanggal        = "";
$gambar         = "";
$op             = "";

$koneksi = mysqli_connect($hostname, $user, $pwd, $db);
if (!$koneksi) {
    die("Belum terkoneksi");
} else {
    // echo "Koneksi berhasil";
}

if (isset($_GET['op'])) {
    $op = $_GET['op'];
} else {
    $op = "";
}

if ($op == 'pilih') {
    $sql1       = "select * from tb_berita where id = '$id'";
    $q1         = mysqli_query($koneksi, $sql1);
    $r1         = mysqli_fetch_array($q1);
    $id         = $_GET['id'];
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $sql      = "select * from tb_berita where id = '$id'";
    $query    = mysqli_query($koneksi, $sql);
    $author   = "Rezkiandra";
    while ($q = mysqli_fetch_array($query)) {
        $id         = $q['id'];
        $judul      = $q['judul'];
        $deskripsi  = $q['deskripsi'];
        $lokasi     = $q['lokasi'];
        $tanggal    = $q['tanggal'];
        $gambar     = $q['gambar'];
    ?>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="../assets/css/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../assets/vendor/bootstrap-icons/bootstrap-icons.css">
        <title><?php echo $judul ?></title>
    <?php
    }
    ?>
</head>

<body>
    <!-- ========== Start Navbar ========== -->
    <div class="navbar navbar-expand-lg py-2 mx-3" id="bg-nav">
        <div class="container">
            <a class="navbar-brand" href="./index.php">
                <img src="../../kerjasama/assets/img/logo.png" alt="" style="height: 51px; width: 150;">
            </a>
            <button class="navbar-toggler border-light rounded d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi bi-list"></i>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <div class="container-lg">
                    <ul class="navbar-nav d-lg-flex justify-content-around">
                        <li class="nav-item">
                            <a class="nav-link text-light d-flex flex-column align-items-center" href="../../kerjasama/index.php"><i class="bi bi-house-fill"></i>Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light d-flex flex-column align-items-center" href="../../kerjasama/berita.php"><i class="bi bi-globe2"></i>Berita</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light d-flex flex-column align-items-center" href="../../kerjasama/mitra.php"><i class="bi bi-people-fill"></i>Mitra</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link text-light d-flex flex-column align-items-center dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="bi bi-bookmark"></i>Kerjasama</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownId">
                                <a class="dropdown-item d-block" href="../../kerjasama/kemitraan_keluar.php">Prosedur Kerjasama Kemitraan Keluar</a>
                                <a class="dropdown-item d-block" href="../../kerjasama/kemitraan_kunjungan.php">Prosedur Kerjasama Kunjungan Tamu Kemitraan</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light d-flex flex-column align-items-center" href="../../kerjasama/galeri.php"><i class="bi bi-folder"></i>Galeri</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex flex-column align-items-center text-light" href="../../kerjasama/tentang.php">
                                <i class="bi bi-headphones"></i>Tentang
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- ========== End Navbar ========== -->

    <!-- ========== Start Template ========== -->
    <section id="main">
        <div class="container">
            <img src="../assets/img//carousel1.jpg" alt="Gambar Berita" class="img-fluid my-5">
            <div class="my-4">
                <h2 class="text-start"><?php echo $judul ?></h2>
            </div>
            <!-- <div class="col-6 my-4">
                <h6 class="text-start"><i class="bi bi-people me-3"></i>Author : <?php echo $author ?></h6>
            </div> -->
            <div class="d-lg-flex justify-content-between">
                <div class="col-6">
                    <h6 class="text-start"><i class="bi bi-people me-2"></i>Lokasi : <?php echo $lokasi ?></h6>
                </div>
                <div class="col-6">
                    <h6 class="text-start"><i class="bi bi-people me-2"></i>Tanggal : <?php echo $tanggal ?></h6>
                </div>
            </div>
            <div class="my-4">
                <p class="text-start"><?php echo $deskripsi ?></p>
            </div>
        </div>
    </section>
    <!-- ========== End Template ========== -->

    <!-- ========== Start Footer ========== -->
    <section id="footer" class="mt-5 position-static bottom-0 w-100">
        <div class="container">
            <div class="d-lg-flex justify-content-start align-items-center">
                <div class="col-lg-3 mb-3 d-flex flex-column justify-content-center text-start">
                    <h4 class="text-uppercase text-light mt-4 text-center">Alamat</h4>
                    <p class="text-light" style="font-size: 14px;"><i class="bi bi-globe me-2"></i>Jalan Raya Sejangkung Pendidikan Sambas - Kalimantan Barat 79460</p>
                    <p class="text-light" style="font-size: 14px;"><i class="bi bi-globe me-2"></i>(0562) 6303123</p>
                    <p class="text-light" style="font-size: 14px;"><i class="bi bi-globe me-2"></i>info@poltesa.ac.id</p>
                </div>
                <div class="col-lg-6 mb-3 d-flex flex-column justify-content-center align-items-center">
                    <a href="#"><i style="font-size: 50px;" class="text-warning bi bi-arrow-up-circle-fill"></i></a>
                    <img src="../../kerjasama/assets/img/white.png" class="img-fluid w-25">
                </div>
                <div class="col-lg-3 mb-3">
                    <div class="d-flex flex-column justify-content-center text-start">
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
        <div class="bg-dark d-flex justify-content-center pt-3">
            <p class="text-light">&copy 2022 Poltesa All Rights Reserved</p>
        </div>
    </section>
    <!-- ========== End Footer ========== -->
</body>

</html>