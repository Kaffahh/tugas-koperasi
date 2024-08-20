<?php
include '../../layout/header.php';
include '../../config/app.php';

$idakun = (int) $_GET[ 'idakun' ];

$data_akun = select("SELECT * FROM akun WHERE idakun =$idakun")[0];
if (isset($_POST['ubah'])) {
    if (update_akun($_POST) > 0) {
        echo "<script>
        alert('data akun berhasil di ubah');
        document.location.href='dataakun.php';
        </script>";
    } else {
        echo "<script>
        alert('data akun gagal diubah');
        document.location.href='dataakun.php';
        </script>";
    }
}
?>

<div class="container mt-5">
    <h1>
        <marquee>UBAH DATA AKUN</marquee>
    </h1>

    <form action="" method="post">
        <input type="hidden" name="idakun" value="<?= $data_akun['idakun']; ?> ">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?= $data_akun[ 'nama' ]; ?>" placeholder="Nama..." required>
        </div>

        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" value="<?= $data_akun[ 'username' ]; ?>" placeholder="Userame..." required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?= $data_akun[ 'email' ]; ?>" placeholder="email..." required>
        </div>


        <div class="mb-3">
            <label for="level" class="form-label">level</label>
            <select class="form-control" name="level" id="level">
                <option value="">--PILIH LEVEL--</option>
                <option value="1">Operator Pegawai</option>
                <option value="2">Operator Unit</option>
                <option value="3">Operator Akun</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary" name="ubah">Submit</button>
    </form>
</div>