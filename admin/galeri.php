<?php
ob_start();
$hostname       = "localhost";
$user           = "root";
$pwd            = "";
$db             = "kerjasama";

$judul          = "";
$deskripsi      = "";
$link           = "";
$success        = "";
$failed         = "";
$op             = "";

$koneksi = mysqli_connect($hostname, $user, $pwd, $db);
if (!$koneksi) {
    die("Belum terkoneksi");
} else {
    // echo "Koneksi berhasil";
}

// if (isset($_GET['op'])) {
//     $op = $_GET['op'];
// } else {
//     $op = "";
// }

// if ($op == 'hapus') {
//     $id         = $_GET['id'];
//     $sql1       = "delete from tb_berita where id = '$id'";
//     $q1         = mysqli_query($koneksi, $sql1);
//     if ($q1) {
//         $success = "Berhasil menghapus data";
//     } else {
//         $failed  = "Gagal menghapus data";
//     }
// }

// if ($op == 'edit') {
//     $id         = $_GET['id'];
//     $sql1       = "select * from tb_berita where id = '$id'";
//     $q1         = mysqli_query($koneksi, $sql1);
//     $r1         = mysqli_fetch_array($q1);
//     $judul      = $r1['judul'];
//     $deskripsi  = $r1['deskripsi'];
//     $lokasi     = $r1['lokasi'];
//     $tanggal    = $r1['tanggal'];
//     $gambar     = $r1['gambar'];
// }

if (isset($_POST['simpan-video'])) { //untuk create data
    $judul          = $_POST['judul-video'];
    $deskripsi      = $_POST['deskripsi'];
    $link           = $_POST['link'];

    if ($judul && $deskripsi && $link) {
        if ($op == 'edit') { //untuk update
            $sql1       = "update tb_berita set judul : '$judul', deskripsi : '$deskripsi', lokasi : '$lokasi', tanggal : '$tanggal', gambar : '$gambar' where id = '$id'";
            $q1         = mysqli_query($koneksi, $sql1);
            if ($q1) {
                $success = "Data berhasil diupdate";
            } else {
                $failed  = "Data gagal diupdate";
            }
        } else { //untuk insert
            $sql1   = "insert into tb_video(judul, deskripsi, link) values ('$judul','$deskripsi', '$link')";
            $q1     = mysqli_query($koneksi, $sql1);
            if ($q1) {
                $success     = "Berhasil memasukkan data video baru";
            } else {
                $failed      = "Gagal memasukkan data video baru";
            }
        }
    }
}
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin - Galeri</title>
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="../admin/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../admin/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../admin/assets/css/themify-icons.css">
    <link rel="stylesheet" href="../admin/assets/css/metisMenu.css">
    <link rel="stylesheet" href="../admin/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../admin/assets/css/slicknav.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="../admin/assets/css/typography.css">
    <link rel="stylesheet" href="../admin/assets/css/default-css.css">
    <link rel="stylesheet" href="../admin/assets/css/styles.css">
    <link rel="stylesheet" href="../admin/assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="../admin/assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <div class="page-container">
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <h3 class="text-uppercase text-light">Kerjasama</h3>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li><a href="./index.php" aria-expanded="true"><i class="ti-dashboard"></i><span>Dashboard</span></a></li>
                            <li><a href="./berita.php" aria-expanded="true"><i class="ti-world"></i><span>Berita</span></a></li>
                            <li><a href="./mitra.php" aria-expanded="true"><i class="ti-user"></i><span>Mitra</span></a></li>
                            <li><a href="./kerjasama.php" aria-expanded="true"><i class="ti-link"></i><span>Kerjasama</span></a></li>
                            <li><a href="./galeri.php" aria-expanded="true"><i class="ti-announcement"></i><span>Galeri</span></a></li>
                            <li><a href="./tentang.php" aria-expanded="true"><i class="ti-headphone"></i><span>Tentang</span></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="form">
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Galeri</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.html">Admin</a></li>
                                <li><span>Galeri</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown">Username Admin<i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="./auth.php">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section id="tambah-data" class="py-5 bg-light">
            <div class="container">
                <?php
                if ($success) {
                ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $success ?>
                    </div>
                <?php
                    header("refresh:3; url=galeri.php");
                } elseif ($failed) {
                ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $failed ?>
                    </div>
                <?php
                    header("refresh:3; url=galeri.php");
                }
                ?>
                <form method="post">
                    <div class="row mb-3">
                        <label for="judul-video" class="col-sm-2 col-form-label">Judul Video</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="judul-video" name="judul-video" placeholder="Masukkan Judul Video" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi Video</label>
                        <div class="col-sm-10">
                            <textarea type="textarea" rows="10" class="form-control" id="deskripsi" name="deskripsi" placeholder="Masukkan Deskripsi Video" required></textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="link" class="col-sm-2 col-form-label">Link Video</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="link" name="link" placeholder="Masukkan Link Video" required>
                        </div>
                    </div>
                    <input type="submit" value="Simpan Video" name="simpan-video" class="btn btn-primary text-uppercase col-2 offset-2">
                </form>
                <form action="" method="post" class="py-5">
                    <div class="row mb-3">
                        <label for="judul-foto" class="col-sm-2 col-form-label">Judul Foto</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="judul-foto" name="judul-foto" placeholder="Masukkan Judul Video" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="lokasi" class="col-sm-2 col-form-label">Lokasi</label>
                        <div class="col-sm-10">
                            <select class="form-control form-select" id="validationDefault04" required>
                                <option selected disabled value="">Pilih Lokasi</option>
                                <option value="Dalam Negeri">Dalam Negeri</option>
                                <option value="Luar Negeri">Luar Negeri</option>
                                <option value="Kampus">Kampus</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                        <div class="col-sm-10">
                            <input type="date" name="tanggal" id="tanggal" class="form-control" required>

                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="dokumentasi" class="col-sm-2 col-form-label">Gambar Dokumentasi</label>
                        <div class="col-sm-10">
                            <input type="file" name="dokumentasi" id="dokumentasi" class="form-control" required>
                        </div>
                    </div>
                    <input type="submit" value="Simpan Foto" name="simpan-foto" class="btn btn-danger text-uppercase col-2 offset-2">
                </form>
            </div>
            <div class="d-flex flex-row">
                <div class="col-lg-6">
                    <section id="record" class="py-5 my-5">
                        <div class="container">
                            <h5 class="text-center mb-3">Record Video</h5>
                            <table id="video" class="hover display compact border cell-border stripe">
                                <thead>
                                    <tr>
                                        <th>Judul Video</th>
                                        <th>Deskripsi Video</th>
                                        <th>Link Video</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql   = "select * from tb_video order by id";
                                    $query    = mysqli_query($koneksi, $sql);
                                    while ($q = mysqli_fetch_array($query)) {
                                        $id             = $q['id'];
                                        $judul          = $q['judul'];
                                        $deskripsi      = $q['deskripsi'];
                                        $link           = $q['link'];
                                    ?>
                                        <tr class="text-start text-wrap">
                                            <td scope="row"><?php echo $judul ?></td>
                                            <td scope="row"><?php echo $deskripsi ?></td>
                                            <td scope="row"><?php echo $link ?></td>
                                            <td class="text-center">
                                                <a href="galeri.php?op=edit-video&id=<?php echo $id ?>">
                                                    <button type="button" name="edit" class="col-4 btn btn-warning">Edit</button>
                                                </a>
                                                <a href="galeri.php?op=hapus-video&id=<?php echo $id ?>" onclick="return confirm('Apakah yakin mau delete video?')">
                                                    <button type="button" name="hapus" class="col-4 btn btn-danger">Delete</button>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </section>
                </div>
                <div class="col-lg-6">
                    <section id="record" class="py-5 my-5">
                        <div class="container">
                            <h5 class="text-center mb-3">Record Foto</h5>
                            <table id="foto" class="hover display compact border cell-border stripe">
                                <thead>
                                    <tr>
                                        <th>Judul Foto</th>
                                        <th>Lokasi</th>
                                        <th>Tanggal</th>
                                        <th>Dokumentasi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql   = "select * from tb_foto order by id";
                                    $query    = mysqli_query($koneksi, $sql);
                                    while ($q = mysqli_fetch_array($query)) {
                                        $id                 = $q['id'];
                                        $judul              = $q['judul'];
                                        $lokasi             = $q['lokasi'];
                                        $tanggal            = $q['tanggal'];
                                        $gambar             = $q['gambar'];
                                    ?>
                                        <tr class="text-start text-wrap">
                                            <td scope="row"><?php echo $judul ?></td>
                                            <td scope="row"><?php echo $lokasi ?></td>
                                            <td scope="row"><?php echo $tanggal ?></td>
                                            <td scope="row"><?php echo $gambar ?></td>
                                            <td class="text-center">
                                                <a href="berita.php?op=edit&id=<?php echo $id ?>">
                                                    <button type="button" name="edit" class="col-4 btn btn-warning">Edit</button>
                                                </a>
                                                <a href="berita.php?op=hapus&id=<?php echo $id ?>" onclick="return confirm('Apakah yakin mau delete data?')">
                                                    <button type="button" name="hapus" class="col-4 btn btn-danger">Delete</button>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </section>
                </div>
            </div>
        </section>
        <footer>
            <div class="footer-area">
                <p>© Copyright 2023 Poltesa | All Right Reserved</p>
            </div>
        </footer>
    </div>
</body>

<script src="../admin/assets/js/vendor/jquery-2.2.4.min.js"></script>
<script src="../admin/assets/js/popper.min.js"></script>
<script src="../admin/assets/js/bootstrap.min.js"></script>
<script src="../admin/assets/js/owl.carousel.min.js"></script>
<script src="../admin/assets/js/metisMenu.min.js"></script>
<script src="../admin/assets/js/jquery.slimscroll.min.js"></script>
<script src="../admin/assets/js/jquery.slicknav.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://cdn.zingchart.com/zingchart.min.js"></script>
<script src="../admin/assets/js/line-chart.js"></script>
<script src="../admin/assets/js/pie-chart.js"></script>
<script src="../admin/assets/js/plugins.js"></script>
<script src="../admin/assets/js/scripts.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function() {
        $('#video').DataTable({
            ordering: false,
        });
    });

    $(document).ready(function() {
        $('#foto').DataTable({
            ordering: false,
        });
    });
</script>

</html>