<?php
ob_start();
$hostname       = "localhost";
$user           = "root";
$pwd            = "";
$db             = "kerjasama";

$banner         = "";
$success        = "";
$failed         = "";


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

if ($op == 'hapus') {
    $id         = $_GET['id'];
    $sql1       = "delete from tb_tentang where id = '$id'";
    $q1         = mysqli_query($koneksi, $sql1);
    if ($q1) {
        $success = "Berhasil menghapus data mitra";
    } else {
        $failed  = "Gagal menghapus data mitra";
    }
}

if ($op == 'edit') {
    $id         = $_GET['id'];
    $sql1       = "select * from tb_tentang where id = '$id'";
    $q1         = mysqli_query($koneksi, $sql1);
    $r1         = mysqli_fetch_array($q1);
    $banner      = $r1['banner'];
}

if (isset($_POST['simpan'])) { //untuk create data
    $banner             = $_FILES["banner"]["name"];
    $tmp_name           = $_FILES["banner"]["tmp_name"];
    $path               = "../../kerjasama/admin/assets/upload/tentang/";
    move_uploaded_file($tmp_name, $path . $banner);

    if ($op == 'edit') { //untuk update
        $sql1       = "update tb_tentang set banner = '$banner' where id = '$id'";
        $q1         = mysqli_query($koneksi, $sql1);
        if ($q1) {
            $success = "Data berhasil diupdate";
        } else {
            $failed  = "Data gagal diupdate";
        }
    } else {
        $sql1   = "insert into tb_tentang(banner) values ('$banner')";
        $q1     = mysqli_query($koneksi, $sql1);
        if ($q1) {
            $success     = "Berhasil memasukkan data baru";
        } else {
            $failed      = "Gagal memasukkan data baru";
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
    <title>Admin - Tentang</title>
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
        <!-- sidebar menu area start -->
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
                            <h4 class="page-title pull-left">Tentang</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.html">Admin</a></li>
                                <li><span>Tentang</span></li>
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
                    header("refresh:3; url=tentang.php");
                } elseif ($failed) {
                ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $failed ?>
                    </div>
                <?php
                    header("refresh:3; url=tentang.php");
                }
                ?>
                <form method="post" enctype="multipart/form-data">
                    <div class="row mb-3">
                        <label for="banner" class="col-sm-2 col-form-label">Banner Foto</label>
                        <div class="col-sm-10">
                            <input type="file" name="banner" id="banner" class="form-control" required>
                        </div>
                    </div>
                    <input type="submit" value="Simpan" name="simpan" class="btn btn-primary text-uppercase col-2 offset-2">
                </form>
            </div>
        </section>
        <section id="record" class="py-5 my-5">
            <div class="container-fluid">
                <table id="myTable" class="hover display compact cell-border stripe">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Banner</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql   = "select * from tb_tentang order by id";
                        $query    = mysqli_query($koneksi, $sql);
                        $no_urut  = 1;
                        while ($q = mysqli_fetch_array($query)) {
                            $id                 = $q['id'];
                            $banner             = $q['banner'];
                        ?>
                            <tr class="text-center text-wrap">
                                <td scope="row"><?php echo $no_urut++ ?></td>
                                <td scope="row">
                                    <img src="../admin/assets/upload/tentang/<?php echo $banner ?>" style="width: 500px;" class="img-fluid">
                                </td>
                                <td class="text-center">
                                    <a href="tentang.php?op=edit&id=<?php echo $id ?>">
                                        <button type="button" name="edit" class="col-4 btn btn-warning">Edit</button>
                                    </a>
                                    <a href="tentang.php?op=hapus&id=<?php echo $id ?>" onclick="return confirm('Apakah yakin mau delete data?')">
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
        $('#myTable').DataTable({
            ordering: false,
        });
    });
</script>

</html>