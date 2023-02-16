<?php
include "./bin/koneksi.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prosedur Kerjasama Kemitraan Keluar - Kerjasama</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="./assets/vendor/bootstrap-icons/bootstrap-icons.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: content-box;
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body>
    <section class="pt-3">
        <?php include "./layout/header.php" ?>
    </section>

    <section id="gambar">
        <div class="container col-lg-8">
            <h2 class="text-center text-uppercase mt-5 mb-4">Prosedur Kemitraan Keluar</h2>
            <img src="./assets//img//Prosedur Kemitraan Keluar.png" alt="" class="img-fluid shadow-sm rounded">
        </div>
    </section>

    <section>
        <?php include "./layout/footer.php" ?>
    </section>
</body>

</html>