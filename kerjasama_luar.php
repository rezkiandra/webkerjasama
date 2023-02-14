<?php
include_once "./bin/koneksi.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kerjasama Luar Negeri - Kerjasama</title>

    <!-- Data Tables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.css">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
        }

        #external {
            font-size: 14px;
        }
    </style>
</head>

<body>
    <section class="pt-3">
        <?php include "./layout/header.php" ?>
    </section>

    <section class="py-5 mb-4">
        <div class="container-fluid">
            <h3 class="text-center text-uppercase mb-4">Kerjasama Luar Negeri</h3>
            <table id="external" class="hover stripe display cell-border">
                <thead>
                    <tr>
                        <th>Nama Mitra</th>
                        <th>Bentuk Lembaga</th>
                        <th>Jenis Kegiatan</th>
                        <th>Waktu Mulai</th>
                        <th>Waktu Berakhir</th>
                        <th>MoU Poltesa</th>
                        <th>MoU Mitra</th>
                        <th>Lokasi</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql   = "SELECT * FROM tb_kerjasama_luar ORDER BY id";
                    $query    = mysqli_query($koneksi, $sql);
                    while ($q = mysqli_fetch_array($query)) {
                        $id                 = $q['id'];
                        $mitra_kerjasama    = $q['mitra_kerjasama'];
                        $bentuk_lembaga     = $q['bentuk_lembaga'];
                        $jenis_kegiatan     = $q['jenis_kegiatan'];
                        $waktu_mulai        = $q['waktu_mulai'];
                        $waktu_berakhir     = $q['waktu_berakhir'];
                        $mou_poltesa        = $q['mou_poltesa'];
                        $mou_mitra          = $q['mou_mitra'];
                        $lokasi             = $q['lokasi'];
                        $status             = $q['status'];
                    ?>
                        <tr class="text-start text-wrap">
                            <td scope="row"><?php echo $mitra_kerjasama ?></td>
                            <td scope="row"><?php echo $bentuk_lembaga ?></td>
                            <td scope="row"><?php echo $jenis_kegiatan ?></td>
                            <td scope="row"><?php echo date('d F Y', strtotime($waktu_mulai)) ?></td>
                            <td scope="row"><?php echo date('d F Y', strtotime($waktu_berakhir)) ?></td>
                            <td scope="row"><?php echo $mou_poltesa ?></td>
                            <td scope="row"><?php echo $mou_mitra ?></td>
                            <td scope="row"><?php echo $lokasi ?></td>
                            <td scope="row"><?php echo $status ?></td>
                            <td class="text-center">
                                <a href="kerjasama?op=detail-internal&id=<?php echo $id ?>">
                                    <button type="button" name="detail-internal" class="col-12 btn btn-warning" style="font-size: 14px;">Detail</button>
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

    <section>
        <?php include "./layout/footer.php" ?>
    </section>
</body>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.js"></script>
<script>
    $(document).ready(function() {
        $('#external').DataTable({
            ordering: false,
        });
    });
</script>

</html>