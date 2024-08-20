<?php
include '../../layout/header.php';
include '../../config/database.php';

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
    alert('Anda harus login menggunakan operator akun');
    document.location.href='../../index.php';
    </script>";
    exit;
}
include "../../config/app.php";


$stokDataPerhalaman = 5;
$stokData           = count(select("SELECT * FROM akun"));
$stokHalaman        = ceil($stokData / $stokDataPerhalaman);
$halamanAktif       = (isset($_GET['halaman']) ? $_GET['halaman'] : 1);
$awalData           = ($stokDataPerhalaman * $halamanAktif) - $stokDataPerhalaman;

$data_akun = select("SELECT * FROM akun ORDER BY idakun DESC LIMIT $awalData, $stokDataPerhalaman");

?>

<h2 class="text-center mt-3 mb-3">Data Akun</h2>
<div class="container">
    <div><a href="tambahakun.php" class="btn btn-primary mb-2">TAMBAH</a></div>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Level</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            ?>
            <?php foreach ($data_akun as $akun) : ?>
            <tr>
                <th scope="row"><?= $no++; ?></th>
                <td><?= $akun['nama']; ?></td>
                <td><?= $akun['username']; ?></td>
                <td><?= $akun['email']; ?></td>
                <td><?= $akun['level']; ?></td>
                <td>
                    <a href="editakun.php?idakun=<?= $akun['idakun']; ?>" class="btn btn-warning">Edit</a>
                    <a href="hapusakun.php?idakun=<?= $akun['idakun']; ?>" class="btn btn-danger" onclick="return confirm('apakah anda yakin?');">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="mt-2 justify-content-end d-flex">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <?php if ($halamanAktif > 1): ?>
                    <li class="page-item">
                        <a class="page-link" href="?halaman=<?= $halamanAktif - 1 ?>" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                <?php endif; ?>

                <?php for ($i = 1; $i <= $stokHalaman; $i++): ?>
                    <li class="page-item <?= ($i == $halamanAktif) ? 'active' : ''; ?>">
                        <a class="page-link" href="?halaman=<?= $i; ?>"><?= $i; ?></a>
                    </li>
                <?php endfor; ?>

                <?php if ($halamanAktif < $stokHalaman): ?>
                    <li class="page-item">
                        <a class="page-link" href="?halaman=<?= $halamanAktif + 1 ?>" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>
</div>
