<?php
require_once "./bin/koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="./assets/vendor/bootstrap-icons/bootstrap-icons.css">

    <!-- Style Header -->
    <link rel="stylesheet" href="./assets/css/footer.css">
</head>

<body>
    <section id="footer" class="mt-5 position-static bottom-0 w-100">
        <div class="container">
            <div class="d-lg-flex justify-content-start align-items-center">
                <div class="col-lg-3 mb-3 d-lg-flex flex-column justify-content-center text-start">
                    <h4 class="text-uppercase text-light mt-4 text-center">Alamat</h4>
                    <p class="text-light" style="font-size: 14px;"><i class="bi bi-globe me-2"></i>Jalan Raya Sejangkung Pendidikan Sambas - Kalimantan Barat 79460</p>
                    <p class="text-light" style="font-size: 14px;"><i class="bi bi-globe me-2"></i>(0562) 6303123</p>
                    <p class="text-light" style="font-size: 14px;"><i class="bi bi-globe me-2"></i>info@poltesa.ac.id</p>
                </div>
                <div class="col-lg-6 mb-3 d-lg-flex flex-column justify-content-center align-items-center">
                    <a href="#"><i style="font-size: 60px;" class="text-warning bi bi-arrow-up-circle-fill"></i></a>
                    <img src="../../kerjasama/assets/img/white.png" class="img-fluid w-25">
                </div>
                <div class="col-lg-3 mb-3">
                    <div class="col-lg d-lg-flex flex-column justify-content-center text-start">
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
        <div class="bg-dark d-lg-flex align-items-center justify-content-center">
            <p class="text-light text-center py-2">&copy 2022 Poltesa All Rights Reserved</p>
        </div>
    </section>
</body>

</html>