<?php
// require_once("./bin/koneksi.php");
ob_start();

$hostname       = "localhost";
$user           = "root";
$pwd            = "";
$db             = "kerjasama";

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
    $id         = $_GET['id'];
    $sql1       = "select * from tb_berita where id = '$id'";
    $q1         = mysqli_query($koneksi, $sql1);
    $r1         = mysqli_fetch_array($q1);
    $judul      = $r1['judul'];
    $deskripsi  = $r1['deskripsi'];
    $lokasi     = $r1['lokasi'];
    $tanggal    = $r1['tanggal'];
    $gambar     = $r1['gambar'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Berita - Kerjasama</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <section>
        <?php include "./layout/header.php" ?>
    </section>
    <!-- ========== Start Main ========== -->
    <section id="main">
        <div class="container my-5">
            <div class="title">
                <h2 class="text-uppercase text-center my-5">Berita Kerjasama</h2>
            </div>
            <div class="rows my-5">
                <div class="d-lg-flex flex-row justify-content-center align-items-center gap-5">
                    <?php
                    $perPage            = 3;
                    $page               = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
                    $start              = ($page > 1) ? ($page * $perPage) - $perPage : 0;
                    $sql                = "SELECT * FROM tb_berita LIMIT $start, $perPage";

                    $result         = mysqli_query($koneksi, "SELECT * FROM tb_berita");
                    $total          = mysqli_num_rows($result);

                    $pages          = ceil($total / $perPage);

                    $query          = mysqli_query($koneksi, $sql);
                    while ($q = mysqli_fetch_array($query)) {
                        $id         = $q['id'];
                        $judul      = $q['judul'];
                        $deskripsi  = $q['deskripsi'];
                        $lokasi     = $q['lokasi'];
                        $tanggal    = $q['tanggal'];
                        $gambar     = $q['gambar'];
                    ?>
                        <div class="col-lg-4 border rounded shadow-sm">
                            <img src="./admin//assets//upload/berita/<?php echo $gambar ?>" class="img-fluid" alt="">
                            <div class="d-lg-flex justify-content-between align-items-center my-2">
                                <h5 class="text-start mx-2"><?php echo $judul ?></h5>
                                <h6 class="text-right mx-2"><?php echo $tanggal ?></h6>
                            </div>
                            <p class="my-3 mx-2 text-start"><?php echo $deskripsi ?></p>
                            <p class="my-3 mx-2 col-lg-5 text-center rounded shadow-sm bg-warning"><?php echo $lokasi ?></p>
                            <hr>
                            </hr>
                            <a href="./template/berita.php?op=pilih&id=<?php echo $id ?>">
                                <button type="button" class="btn btn-sm btn-outline-dark mb-3 mx-2">Selengkapnya</button>
                            </a>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <?php if ($start <= 1) { ?>
                    <li class="page-item disabled">
                        <a class="page-link" href="?halaman=<?php echo $pages - 1; ?>">Kembali</a>
                    </li>
                <?php } else { ?>
                    <li class="page-item">
                        <a class="page-link" href="?halaman=<?php echo $pages - 1; ?>">Kembali</a>
                    </li>
                <?php } ?>


                <?php for ($i = 1; $i <= $pages; $i++) { ?>
                    <li class="page-item"><a class="page-link text-secondary" href="?halaman=<?php echo $i ?>"> <?php echo $i ?></a></li>
                <?php } ?>

                <?php if ($start >= 1) { ?>
                    <li class="page-item disabled">
                        <a class="page-link" href="?halaman=<?php echo $pages++; ?>">Lanjut</a>
                    </li>
                <?php } else { ?>
                    <li class="page-item">
                        <a class="page-link" href="?halaman=<?php echo $pages++; ?>">Lanjut</a>
                    </li>
                <?php } ?>
            </ul>
        </nav>
    </section>
    <!-- ========== End Main ========== -->
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