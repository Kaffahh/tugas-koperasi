<?php
session_start();
include 'config/app.php';
if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
     // secret key
    
          // check username
          $result = mysqli_query($db, "SELECT * FROM akun WHERE username = '$username'");

          // jika ada usernya
          if (mysqli_num_rows($result) == 1) {
              // check passwordnya
              $hasil = mysqli_fetch_assoc($result);

    // //cek username
    // $result = mysqli_query($db, "SELECT * FROM akun WHERE nama='$username'");
    // // jika username ada di database
    // if (mysqli_num_rows($result) == 1) {
    //     $hasil = mysqli_fetch_assoc($result);

        //cek password
        if (password_verify($password, $hasil['password'])) {
            //set session
            $_SESSION['login'] = true;
            $_SESSION['idakun'] = $hasil['idakun'];
            $_SESSION['nama'] = $hasil['nama'];
            $_SESSION['username'] = $hasil['username'];
            $_SESSION['email'] = $hasil['email'];
            $_SESSION['password'] = $hasil['password'];
            $_SESSION['level'] = $hasil['level'];

            header("Location:../index.php");
            exit;
            
        }  else {

            // jika username/password salah
            $error = true;
        }
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Signin Template · Bootstrap v5.0</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <!-- Bootstrap core CSS -->
    <link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="assets/css/sign.css" rel="stylesheet">
</head>

<body class="text-center">

    <main class="form-signin container w-50">
        <form action="" method="POST">

        <img class="mb-4" src="../../assets/img/pdi.jpeg" alt="" width="350vh" height="350vh">
            <h1 class="h3 mb-3 fw-normal">LOGIN KORUPTOR</h1>
            <?php if (isset($error)) : ?>
                <div class="alert alert-danger">
                    <b>USERNAME / PASSWORD SALAH</b>
                </div>
            <?php endif; ?>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" name="username" placeholder="username">
                <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            


            <button class="w-100 btn btn-lg btn-primary" type="submit" name="login">Log In</button>
            <p class="mt-5 mb-3 text-muted">&copy; UP SMK NEGERI 17 JAKARTA-2024</p>
        </form>
    </main>
<!-- jQuery -->
<script src="assets-template/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="assets-template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    


</body>

</html>