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
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Tentang - Kerjasama</title>
    <!-- Fonts Google -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <!-- Vendor CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap-icons/bootstrap-icons.css">
</head>

<body>
    <section>
        <?php include "./layout/header.php" ?>
    </section>

    <section id="banner">
        <div class="container">
            <h3 class="text-uppercase text-center my-5">Tentang Kami</h3>
            <img src="./assets//img//Struktur Bagan Kerja Sama.png" alt="" class="img-fluid shadow">
        </div>
    </section>

    <!-- ========== Start Main ========== -->
    <section id="main">
        <div class="container my-5 py-5">
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

    <section>
        <?php include "./layout/footer.php" ?>
    </section>

</body>
<!-- Boostrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>