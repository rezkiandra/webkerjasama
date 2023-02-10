<?php
require_once("./bin/koneksi.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Mitra - Kerjasama</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <section class="pt-3">
        <?php include "./layout/header.php" ?>
    </section>

    <section id="internal">
        <div class="title">
            <h2 class="text-uppercase text-center mt-5 mb-4">Mitra Dalam Negeri</h2>
        </div>
        <div class="">
            <div class="rows-1"> <!-- Tumpuan -->
                <div class="d-lg-flex flex-row justify-content-center align-items-center gap-5">
                    <?php
                    $sql      = "SELECT * FROM tb_mitra WHERE lokasi = 'Dalam Negeri' LIMIT 0, 6";
                    $query    = mysqli_query($koneksi, $sql);
                    while ($q = mysqli_fetch_array($query)) {
                        $id             = $q['id'];
                        $nama_mitra     = $q['nama_mitra'];
                        $lokasi         = $q['lokasi'];
                        $tanggal        = $q['tanggal'];
                        $gambar         = $q['gambar'];
                    ?>
                        <div class="col-lg-1 d-flex flex-row justify-content-center align-items-center my-4">
                            <div class="d-flex flex-column gap-3 justify-content-center align-items-center">
                                <img src="./admin/assets/upload/mitra/<?php echo $gambar ?>" class="img-fluid">
                                <p class="text-center"><?php echo $nama_mitra ?></p>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="">
            <div class="rows-1 my-5"> <!-- Tumpuan -->
                <div class="d-lg-flex flex-row justify-content-center align-items-center gap-5">
                    <?php
                    $sql      = "SELECT * FROM tb_mitra WHERE lokasi = 'Dalam Negeri' LIMIT 6, 6";
                    $query    = mysqli_query($koneksi, $sql);
                    while ($q = mysqli_fetch_array($query)) {
                        $id             = $q['id'];
                        $nama_mitra     = $q['nama_mitra'];
                        $lokasi         = $q['lokasi'];
                        $tanggal        = $q['tanggal'];
                        $gambar         = $q['gambar'];
                    ?>
                        <div class="col-lg-1 d-flex flex-row justify-content-center align-items-center">
                            <div class="d-flex flex-column gap-3 justify-content-center align-items-center">
                                <img src="./admin/assets/upload/mitra/<?php echo $gambar ?>" class="img-fluid">
                                <p class="text-center"><?php echo $nama_mitra ?></p>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <section id="external" class="pt-5">
        <div class="title">
            <h2 class="text-uppercase text-center mt-5 mb-4">Mitra Luar Negeri</h2>
        </div>
        <div class="">
            <div class="rows-1 my-5"> <!-- Tumpuan -->
                <div class="d-lg-flex flex-row justify-content-center align-items-center gap-5">
                    <?php
                    $sql      = "SELECT * FROM tb_mitra WHERE lokasi = 'Luar Negeri' LIMIT 0, 6";
                    $query    = mysqli_query($koneksi, $sql);
                    while ($q = mysqli_fetch_array($query)) {
                        $id             = $q['id'];
                        $nama_mitra     = $q['nama_mitra'];
                        $lokasi         = $q['lokasi'];
                        $tanggal        = $q['tanggal'];
                        $gambar         = $q['gambar'];
                    ?>
                        <div class="col-lg-1 d-flex flex-row justify-content-center align-items-center my-4">
                            <div class="d-flex flex-column gap-3 justify-content-center align-items-center">
                                <img src="./admin/assets/upload/mitra/<?php echo $gambar ?>" class="img-fluid">
                                <p class="text-center"><?php echo $nama_mitra ?></p>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <section>
        <?php include "./layout/footer.php" ?>
    </section>
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