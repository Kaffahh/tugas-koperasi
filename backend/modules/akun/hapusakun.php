<?php
include "../../config/app.php";

$idakun = (int)$_GET['idakun'];

if (delete_akun($idakun) > 0) {
    echo "<script>
    alert('data akun berhasil di hapus');
    document.location.href='dataakun.php';
    </script>";
} else {
    echo "<script>
    alert('data akun gagal di hapus');
    document.location.href='dataakun.php';
    </script>";
}