<?php
include '../../layout/header.php';
include '../../config/app.php';

session_start();
if (!isset($_SESSION[ 'login' ])) {
    echo "<script>
    alert('login dulu kali');
    document.location.href='../../login.php';
    </script>";
    exit;
}

if ($_SESSION[ 'level' ] != 3) {
    echo "<script>
    alert('Anda harus login sebagai operator akun');
    document.location.href='../../index.php';
    </script>";
    exit;
}

if (isset($_POST[ 'tambah' ])) {
    if (create_akun($_POST) > 0) {
        echo "<script>
    alert('data akun berhasil di tambahkan');
    document.location.href='dataakun.php';
    </script>";
    } else {
        echo "<script>
    alert('data akun gagal di tambahkan');
    document.location.href='../../dataakun.php';
    </script>";
    }
}

?>

<div classs="container mt-5">
    <div class="container">
    <h1>
        <marquee>TAMBAH AKUN</marquee>
    </h1>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama..." required>
        </div>

        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Username..." required>
        </div>

        <div class="mb-3">
            <label for="emai;" class="form-label">Email</label>
            <input type="text" class="form-control" id="emai;" name="email" placeholder="Email..." required>
        </div>

        <div class="mb-3">
            <label for="nama" class="form-label">Password</label>
            <input type="text" class="form-control" id="password" name="password" placeholder="Paswword..." required>
        </div>

        <div class="mb-3">
            <label for="nama" class="form-label">Level</label>
            <select class="form-control" name="level" id="level">
                <option value="">--PILIH LEVEL--</option>
                <option value="1">Operator Pegawai</option>
                <option value="2">Operator Unit</option>
                <option value="3">Operator Akun</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary" name="tambah">submit</button>
    </form>
</div>
</div>