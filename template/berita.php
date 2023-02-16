<?php
include "../../kerjasama/helpers/helpers.php";

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

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];
    $id = enkripsiUrl('decrypt', $id);
} else {
    $id = "";
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
    $author   = "Admin";
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="../assets/vendor/bootstrap-icons/bootstrap-icons.css">
        <title>Berita - <?php echo $judul ?></title>
    <?php
    }
    ?>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            scroll-behavior: smooth;
        }

        #bg-nav {
            background-color: #472272;
            border-radius: 40px;
            box-shadow: 0px 0px 5px orange;
        }

        #footer {
            background: linear-gradient(90deg, rgba(51, 27, 68, 1) 0%, rgba(135, 57, 195, 1) 50%, rgba(51, 27, 68, 1) 100%);
        }

        #footer .back-top {
            transition: all 0.5s ease 0s;
        }
    </style>
</head>

<body>
    <!-- ========== Start Navbar ========== -->
    <div class="navbar navbar-expand-lg py-2 mt-3 mb-5" id="bg-nav">
        <div class="container">
            <a class="navbar-brand" href="../../kerjasama/">
                <img src="../../kerjasama/assets/img/logo.png" alt="" style="height: 51px; width: 150;">
            </a>
            <button class="navbar-toggler border-light rounded d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi bi-list text-light"></i>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <div class="container">
                    <ul class="navbar-nav d-lg-flex justify-content-around">
                        <li class="nav-item">
                            <a class="nav-link text-light d-lg-flex flex-column align-items-center" href="../../kerjasama/"><i class="bi bi-house-fill"></i>Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light d-lg-flex flex-column align-items-center" href="../../kerjasama/berita/"><i class="bi bi-globe2"></i>Berita</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light d-lg-flex flex-column align-items-center" href="../../kerjasama/mitra/"><i class="bi bi-people-fill"></i>Mitra</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link text-light d-lg-flex flex-column align-items-center dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="bi bi-bookmark"></i>Kerjasama</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownId">
                                <a class="dropdown-item d-flex" href="../../kerjasama/kemitraan_keluar/">Prosedur Kerjasama Kemitraan Keluar</a>
                                <a class="dropdown-item d-flex" href="../../kerjasama/kemitraan_kunjungan/">Prosedur Kerjasama Kunjungan Tamu</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light d-lg-flex flex-column align-items-center" href="../../kerjasama/galeri/"><i class="bi bi-folder"></i>Galeri</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-lg-flex flex-column align-items-center text-light" href="../../kerjasama/tentang/">
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
        <div class="container d-flex justify-content-center align-items-center">
            <div class="col-lg-10 shadow-sm border rounded">
                <img src="../admin/assets/upload/berita/<?php echo $gambar ?>" alt="Gambar Berita" class="img-fluid img-thumbnail shadow-sm rounded">
                <div class="my-4 mx-3">
                    <h3 class="text-start"><?php echo $judul ?></h3>
                </div>
                <div class="col-2 col-lg-1 my-3 mx-3" style="font-size: 14px;">
                    <p class="px-1 text-center rounded bg-light"><?php echo $lokasi ?></p>
                </div>
                <div class="my-4 mx-3">
                    <p class="text-start"><?php echo $deskripsi ?></p>
                </div>
                <p class="mx-3" style="font-size: 13px;"><?php echo date('d F Y', strtotime($tanggal)) ?></p>
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
                    <div onclick="return scrollToTop()" class="back-top" style="cursor: pointer;"><i style="font-size: 50px;" class="text-warning bi bi-arrow-up-circle-fill"></i></div>
                    <img src="../../kerjasama/assets/img/white.png" class="img-fluid w-25">
                </div>
                <div class="col-lg-3 mb-3">
                    <div class="d-flex flex-column justify-content-center">
                        <h4 class="text-uppercase text-light text-center mt-4">Ikuti Kami</h4>
                        <div class="d-grid gap-3">
                            <a href="https://facebook.com/poltesa/" class="text-decoration-none text-light text-uppercase" style="font-size: 14px;">
                                <i class="bi bi-facebook me-2"></i>Facebook
                            </a>
                            <a href="https://twitter.com/officialpoltesa" class="text-decoration-none text-light text-uppercase" style="font-size: 14px;">
                                <i class="bi bi-twitter me-2"></i>Twitter
                            </a>
                            <a href="https://instagram.com/officialpoltesa" class="text-decoration-none text-light text-uppercase" style="font-size: 14px;">
                                <i class="bi bi-instagram me-2"></i>Instagram
                            </a>
                            <a href="https://youtube.com/@mediapoltesa" class="text-decoration-none text-light text-uppercase" style="font-size: 14px;">
                                <i class="bi bi-youtube me-2"></i>Youtube
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-dark d-lg-flex justify-content-center align-items-center py-2 pt-3">
            <p class="text-light text-center">&copy 2022 Poltesa All Rights Reserved</p>
        </div>
    </section>
</body>
<script>
    function scrollToTop() {
        window.scrollTo(0, 0);
    }
</script>

</html>