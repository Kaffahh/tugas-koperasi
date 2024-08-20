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
    if (create_pegawai($_POST) > 0) {
        echo "<script>
    alert('data pegawai berhasil di tambahkan');
    document.location.href='datapegawai.php';
    </script>";
    } else {
        echo "<script>
    alert('data pegawai gagal di tambahkan');
    document.location.href='../../datapegawai.php';
    </script>";
    }
}

?>

<div classs="container mt-5">
    <div class="container">
    <h1>
        <marquee>TAMBAH PEGAWAI</marquee>
    </h1>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="namalengkap" name="namalengkap" placeholder="Nama Lengkap..." required>
        </div>

        <div class="mb-3">
            <label for="jk" class="form-label">Jenis Kelamin</label>
            <select class="form-control" name="jk" id="jk">
                <option value="">--PILIH JENIS KELAMIN--</option>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat..." required>
        </div>

        <div class="mb-3">
            <label for="tanggallahir" class="form-label">Tanggal Lahir</label>
            <input type="date" name="tanggallahir" id="tanggallahir" class="form-control">
            <!-- <input type="text" class="form-control" id="emai;" name="email" placeholder="Email..." required> -->
        </div>

        <button type="submit" class="btn btn-primary" name="tambah">submit</button>
    </form>
</div>
</div>