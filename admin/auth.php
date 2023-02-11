<?php
include_once "../bin/koneksi.php";
session_start();

$username       = "";
$password       = "";
$me             = "";

// if (isset($_COOKIE['cookie_username'])) {
//     $cookie_username        = $_COOKIE['cookie_username'];
//     $cookie_password        = $_COOKIE['cookie_password'];

//     $sql            = "SELECT * FROM tb_user WHERE username = '$username'";
//     $query          = mysqli_query($koneksi, $sql);
//     $result         = mysqli_fetch_array($query);
//     if ($result['password'] == $cookie_password) {
//         $_SESSION['session_username'] = $cookie_username;
//         $_SESSION['session_password'] = $cookie_password;
//     }
// }

// if (isset($_SESSION['session_username'])) {
//     header("location:index");
//     exit();
// }

// if (isset($_POST['login'])) {
//     $id             = $_POST['id'];
//     $username       = $_POST['username'];
//     $password       = $_POST['password'];

//     if ($username == '' && $password = '') {
//         $error      = "Silahkan masukkan username dan password";
//     } else {
//         $sql            = "SELECT * FROM tb_user WHERE username = '$username'";
//         $query          = mysqli_query($koneksi, $sql);
//         $result         = mysqli_fetch_array($query);

//         if ($result['username'] == '') {
//             $error      = "Username '$username' tidak terdaftar";
//         } elseif ($result['password'] != md5($password)) {
//             $error      = "Password yang dimasukkan tidak sesuai";
//         }

//         if (empty($error)) {
//             $_SESSION['session_username'] = $username;
//             $_SESSION['session_password'] = md5($password);

//             if ($me == 1) {
//                 $cookie_name    = "cookie_username";
//                 $cookie_value   = $username;
//                 $cookie_time    = time() + (60 * 60 * 24 * 30);
//                 setcookie($cookie_name, $cookie_value, $cookie_time);

//                 $cookie_name    = "cookie_password";
//                 $cookie_value   = md5($password);
//                 $cookie_time    = time() + (60 * 60 * 24 * 30);
//                 setcookie($cookie_name, $cookie_value, $cookie_time);
//             }
//         }
//     }
// }
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.3/font/bootstrap-icons.min.css">
    <!-- End Bootstrap CSS -->

    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!--End Custom Css-->
    <title>Admin - Login</title>
</head>

<body>
    <div class="container-lg my-5 d-lg-flex justify-content-center align-items-center">
        <div class="card col-lg-5 shadow-sm">
            <div class="card-header">
                <h3 class="text-center">Login</h3>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="Username">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Password">
                    </div>
                    <input type="submit" value="Login" name="login" class="btn btn-sm btn-success col-lg-12 col-12">
                </form>
            </div>
            <div class="card-footer text-center">&copy Copyrights 2023 Poltesa</div>
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>