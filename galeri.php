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

    <!-- Fonts Google -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <title>Galeri - Kerjasama</title>

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap-icons/bootstrap-icons.css">
</head>

<body>
    <section>
        <?php include "./layout/header.php" ?>
    </section>

    <!-- ========== Start Video ========== -->
    <section id="video">
        <div class="container my-5">
            <h3 class="text-uppercase text-start my-4">Video</h3>
            <div class="d-lg-flex justify-content-around flex-row align-items-center gap-5">
                <div class="col-lg-6 border shadow-sm">
                    <div class="col-lg-12">
                        <div class="ratio ratio-16x9 embed-responsive embed-responsive-16by9">
                            <iframe class="rounded shadow-sm" width="560" height="315" src="https://www.youtube.com/embed/X3wXl_KM7Jo" title="Profil POLTESA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <h4 class="text-secondary my-2 fw-light">Profil Politeknik Negeri Sambas (POLTESA)</h4>
                        <p class="fw-light" style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, beatae! Ex tenetur, quasi quaerat sed et voluptate repudiandae molestiae magnam, voluptas laudantium voluptatum at odit recusandae, eum maiores consequatur sit?</p>
                    </div>
                </div>
                <div class="col-lg-6 border shadow-sm">
                    <div class="col-lg-12">
                        <div class="ratio ratio-16x9 embed-responsive embed-responsive-16by9">
                            <iframe class="rounded shadow-sm" width="560" height="315" src="https://www.youtube.com/embed/X3wXl_KM7Jo" title="Profil POLTESA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <h4 class="text-secondary my-2 fw-light">Profil Politeknik Negeri Sambas (POLTESA)</h4>
                        <p class="fw-light" style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, beatae! Ex tenetur, quasi quaerat sed et voluptate repudiandae molestiae magnam, voluptas laudantium voluptatum at odit recusandae, eum maiores consequatur sit?</p>
                    </div>
                </div>
            </div>

            <div class="d-lg-flex justify-content-evenly flex-row align-items-center my-5">
                <div class="col-lg-3 border shadow-sm">
                    <div class="col-lg-12">
                        <div class="ratio ratio-16x9 embed-responsive embed-responsive-16by9">
                            <iframe class="rounded shadow-sm" width="560" height="315" src="https://www.youtube.com/embed/X3wXl_KM7Jo" title="Profil POLTESA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <h4 class="text-secondary my-2 fw-light">Profil Politeknik Negeri Sambas (POLTESA)</h4>
                    </div>
                </div>
                <div class="col-lg-3 border shadow-sm">
                    <div class="col-lg-12">
                        <div class="ratio ratio-16x9 embed-responsive embed-responsive-16by9">
                            <iframe class="rounded shadow-sm" width="560" height="315" src="https://www.youtube.com/embed/X3wXl_KM7Jo" title="Profil POLTESA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <h4 class="text-secondary my-2 fw-light">Profil Politeknik Negeri Sambas (POLTESA)</h4>
                    </div>
                </div>
                <div class="col-lg-3 border shadow-sm">
                    <div class="col-lg-12">
                        <div class="ratio ratio-16x9 embed-responsive embed-responsive-16by9">
                            <iframe class="rounded shadow-sm" width="560" height="315" src="https://www.youtube.com/embed/X3wXl_KM7Jo" title="Profil POLTESA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <h4 class="text-secondary my-2 fw-light">Profil Politeknik Negeri Sambas (POLTESA)</h4>
                    </div>
                </div>
            </div>

    </section>
    <!-- ========== End Video ========== -->

    <!-- Start Foto -->
    <section id="foto" class="py-5">
        <div class="container class my-5">
            <h3 class="text-uppercase text-start my-4">Foto</h3>
            <div class="grid my-4">
                <div class="d-lg-flex flex-row align-items-center justify-content-around gap-4">
                    <div class="col-lg-4 border rounded shadow-sm">
                        <img src="./assets/img/poltesa-home.jpg" class="img-fluid" alt="">
                        <div class="container">
                            <div class="title d-lg-flex justify-content-between align-items-center">
                                <h5 class="text-start my-4">Judul Foto</h5>
                                <h6 class="text-right">5 Juni 2022</h6>
                            </div>
                            <p class="my-3">Deskripsi Berita Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias optio animi consequatur impedit est numquam ipsum quisquam ad, totam illo?</p>
                            <p class="my-3 col-lg-4 text-center rounded shadow-sm bg-warning">Kampus</p>
                        </div>
                    </div>
                    <div class="col-lg-4 border rounded shadow-sm">
                        <img src="./assets/img/poltesa-home.jpg" class="img-fluid" alt="">
                        <div class="container">
                            <div class="title d-lg-flex justify-content-between align-items-center">
                                <h5 class="text-start my-4">Judul Foto</h5>
                                <h6 class="text-right">5 Juni 2022</h6>
                            </div>
                            <p class="my-3">Deskripsi Berita Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias optio animi consequatur impedit est numquam ipsum quisquam ad, totam illo?</p>
                            <p class="my-3 col-lg-4 text-center rounded shadow-sm bg-warning">Kampus</p>
                        </div>
                    </div>
                    <div class="col-lg-4 border rounded shadow-sm">
                        <img src="./assets/img/poltesa-home.jpg" class="img-fluid" alt="">
                        <div class="container">
                            <div class="title d-lg-flex justify-content-between align-items-center">
                                <h5 class="text-start my-4">Judul Foto</h5>
                                <h6 class="text-right">5 Juni 2022</h6>
                            </div>
                            <p class="my-3">Deskripsi Berita Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias optio animi consequatur impedit est numquam ipsum quisquam ad, totam illo?</p>
                            <p class="my-3 col-lg-4 text-center rounded shadow-sm bg-warning">Kampus</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid my-5">
                <div class="d-lg-flex flex-row align-items-center justify-content-around gap-4">
                    <div class="col-lg-4 border rounded shadow-sm">
                        <img src="./assets/img/poltesa-home.jpg" class="img-fluid" alt="">
                        <div class="container">
                            <div class="title d-lg-flex justify-content-between align-items-center">
                                <h5 class="text-start my-4">Judul Foto</h5>
                                <h6 class="text-right">5 Juni 2022</h6>
                            </div>
                            <p class="my-3">Deskripsi Berita Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias optio animi consequatur impedit est numquam ipsum quisquam ad, totam illo?</p>
                            <p class="my-3 col-lg-4 text-center rounded shadow-sm bg-warning">Kampus</p>
                        </div>
                    </div>
                    <div class="col-lg-4 border rounded shadow-sm">
                        <img src="./assets/img/poltesa-home.jpg" class="img-fluid" alt="">
                        <div class="container">
                            <div class="title d-lg-flex justify-content-between align-items-center">
                                <h5 class="text-start my-4">Judul Foto</h5>
                                <h6 class="text-right">5 Juni 2022</h6>
                            </div>
                            <p class="my-3">Deskripsi Berita Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias optio animi consequatur impedit est numquam ipsum quisquam ad, totam illo?</p>
                            <p class="my-3 col-lg-4 text-center rounded shadow-sm bg-warning">Kampus</p>
                        </div>
                    </div>
                    <div class="col-lg-4 border rounded shadow-sm">
                        <img src="./assets/img/poltesa-home.jpg" class="img-fluid" alt="">
                        <div class="container">
                            <div class="title d-lg-flex justify-content-between align-items-center">
                                <h5 class="text-start my-4">Judul Foto</h5>
                                <h6 class="text-right">5 Juni 2022</h6>
                            </div>
                            <p class="my-3">Deskripsi Berita Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias optio animi consequatur impedit est numquam ipsum quisquam ad, totam illo?</p>
                            <p class="my-3 col-lg-4 text-center rounded shadow-sm bg-warning">Kampus</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Foto -->

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