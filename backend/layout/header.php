<?php

$modules = '/backend/modules/';

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">

    <title>KOPERASI 17</title>
</head>

<body>
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">KOPERASI SEJAHTERA</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= $modules ?>pegawai/datapegawai.php">DATA PEGAWAI</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= $modules ?>unit/dataunit.php">DATA UNIT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= $modules ?>akun/dataakun.php">DATA AKUN</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../logout.php" onclick="return confirm('apakah anda yakin ingin logout?')">LOG OUT</a>
                        </li>


                    </ul>

                </div>
            </div>
        </nav>
    </div>