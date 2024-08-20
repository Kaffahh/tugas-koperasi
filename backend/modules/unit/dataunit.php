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
    alert('Anda harus login menggunakan akun unit');
    document.location.href='../../index.php';
    </script>";
    exit;
}
?>

<h2 class="text-center mt-3 mb-3">Data Unit</h2>