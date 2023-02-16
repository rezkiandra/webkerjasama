<?php
// include_once "../bin/koneksi.php";
session_start();

$username       = "";
$password       = "";
$me             = "";
$error          = "";
$success        = "";

$hostname           = "localhost";
$user               = "root";
$pwd                = "";
$db                 = "kerjasama";


$koneksi = mysqli_connect($hostname, $user, $pwd, $db);
if (!$koneksi) {
    die("Belum terkoneksi");
} else {
    // echo "Koneksi berhasil";
}

if (isset($_COOKIE['cookie_username'])) {
    $cookie_username        = $_COOKIE['cookie_username'];
    $cookie_password        = $_COOKIE['cookie_password'];

    $sql            = "SELECT * FROM tb_user WHERE username = '$username'";
    $query          = mysqli_query($koneksi, $sql);
    $result         = mysqli_fetch_array($query);
    if ($result['password'] == $cookie_password) {
        $_SESSION['session_username'] = $cookie_username;
        $_SESSION['session_password'] = $cookie_password;
    }
}

if (isset($_SESSION['session_username'])) {
    header("location: index");
    exit();
}

if (isset($_POST['login'])) {
    $username       = $_POST['username'];
    $password       = $_POST['password'];

    if (empty($username) && empty($password)) {
        $error      = "Silahkan masukkan username dan password";
    } else {
        $sql            = "SELECT * FROM tb_user WHERE username = '$username'";
        $query          = mysqli_query($koneksi, $sql);
        $result         = mysqli_fetch_array($query);

        if (empty($result['username'])) {
            $error      = "Username '$username' tidak terdaftar";
        } elseif ($result['password'] != md5($password)) {
            $error      = "Password yang dimasukkan tidak sesuai";
        } else {
            $success    = "Login berhasil, anda akan diarahkan ke halaman admin";
        }

        if (empty($error)) {
            $_SESSION['session_username'] = $username;
            $_SESSION['session_password'] = md5($password);

            if ($me == 1) {
                $cookie_name    = "cookie_username";
                $cookie_value   = $username;
                $cookie_time    = time() + (60 * 60 * 24 * 30);
                setcookie($cookie_name, $cookie_value, $cookie_time);

                $cookie_name    = "cookie_password";
                $cookie_value   = md5($password);
                $cookie_time    = time() + (60 * 60 * 24 * 30);
                setcookie($cookie_name, $cookie_value, $cookie_time);
            }
        }
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.3/font/bootstrap-icons.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Admin - Login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="my-5 d-flex justify-content-center align-self-center">
            <div class="card col-lg-5 shadow-sm">
                <div class="card-header">
                    <h3 class="text-center">Login</h3>
                </div>
                <div class="card-body">
                    <?php
                    if ($success) {
                    ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo $success ?>
                        </div>
                    <?php
                        header("refresh:2; url=auth");
                    } elseif ($error) {
                    ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $error ?>
                        </div>
                    <?php
                        header("refresh:2; url=auth");
                    }
                    ?>
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                        </div>
                        <input type="submit" value="Login" name="login" class="btn text-uppercase btn-success col-lg-12 col-12">
                    </form>
                </div>
                <div class="card-footer text-center">&copy Copyrights 2023 Poltesa</div>
            </div>
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>