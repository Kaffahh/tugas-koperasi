<?php
include "../../config/app.php";

$idpegawai = (int)$_GET['idpegawai'];

if (delete_pegawai($idpegawai) > 0) {
    echo "<script>
    alert('data pegawai berhasil di hapus');
    document.location.href='datapegawai.php';
    </script>";
} else {
    echo "<script>
    alert('data pegawai gagal di hapus');
    document.location.href='datapegawai.php';
    </script>";
}