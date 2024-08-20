<?php
include '../../layout/header.php';
include '../../config/app.php';

$idpegawai = (int) $_GET[ 'idpegawai' ];

$data_pegawai = select("SELECT * FROM pegawai WHERE idpegawai =$idpegawai")[0];
if (isset($_POST['ubah'])) {
    if (update_pegawai($_POST) > 0) {
        echo "<script>
        alert('data pegawai berhasil di ubah');
        document.location.href='datapegawai.php';
        </script>";
    } else {
        echo "<script>
        alert('data pegawai gagal diubah');
        document.location.href='datapegawai.php';
        </script>";
    }
}
?>

<div class="container mt-5">
    <h1>
        <marquee>UBAH DATA PEGAWAI</marquee>
    </h1>

    <form action="" method="post">
        <input type="hidden" name="idpegawai" value="<?= $data_pegawai['idpegawai']; ?> ">
        <div class="mb-3">
            <label for="namalengkap" class="form-label">namalengkap</label>
            <input type="text" class="form-control" id="namalengkap" name="namalengkap" value="<?= $data_pegawai[ 'namalengkap' ]; ?>" placeholder="namalengkap..." required>
        </div>
        
        <div class="mb-3">
            <label for="jk" class="form-label">JENIS KELAMIN</label>
            <select class="form-control" name="jk" id="jk">
                <option value="">--PILIH JENIS KELAMIN--</option>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label">alamat</label>
            <input type="alamat" class="form-control" id="alamat" name="alamat" value="<?= $data_pegawai[ 'alamat' ]; ?>" placeholder="alamat..." required>
        </div>

        
        <div class="mb-3">
            <label for="tanggallahir" class="form-label">tanggallahir</label>
            <input type="date" class="form-control" id="tanggallahir" name="tanggallahir" value="<?= $data_pegawai[ 'tanggallahir' ]; ?>" placeholder="Userame..." required>
        </div>

        <button type="submit" class="btn btn-primary" name="ubah">Submit</button>
    </form>
</div>