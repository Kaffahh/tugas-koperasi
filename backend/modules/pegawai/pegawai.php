<?php
include '../../layout/header.php';

session_start();
if (!isset($_SESSION['login'])) {
    echo "<script>
    alert('login bg');
    document.location.href='../../login.php';
    </script>";
    exit;
}

if ($_SESSION['level'] != 3) {
    echo "<script>
    alert('Anda harus login menggunakan akun pegawai');
    document.location.href='../../index.php';
    </script>";
    exit;
}
include "../../config/database.php";
?>
