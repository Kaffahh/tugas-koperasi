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
include "../../config/app.php";

$stokDataPerhalaman = 5;
$stokData           = count(select("SELECT * FROM pegawai"));
$stokHalaman        = ceil($stokData / $stokDataPerhalaman);
$halamanAktif       = (isset($_GET['halaman']) ? $_GET['halaman'] : 1);
$awalData           = ($stokDataPerhalaman * $halamanAktif) - $stokDataPerhalaman;

$data_pegawai = select("SELECT * FROM pegawai ORDER BY idpegawai DESC LIMIT $awalData, $stokDataPerhalaman");

?>

<h2 class="text-center mt-3 mb-3">Data Pegawai</h2>
<div class="container">
    <div><a href="tambahpegawai.php" class="btn btn-primary mb-2">TAMBAH</a></div>
    <table class="table table-striped table-bordered">
        <thead>
            <tr class="text-center">
                <th scope="col">No</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Alamat</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            ?>
            <?php foreach ($data_pegawai as $pegawai) : ?>
            <tr class="text-center">
                <th scope="row"><?= $no++; ?></th>
                <td><?= $pegawai['namalengkap']; ?></td>
                <td><?= $pegawai['jk']; ?></td>
                <td><?= $pegawai['alamat']; ?></td>
                <td><?= $pegawai['tanggallahir']; ?></td>
                <td>
                    <a href="editpegawai.php?idpegawai=<?= $pegawai['idpegawai']; ?>" class="btn btn-warning">Edit</a>
                    <a href="hapuspegawai.php?idpegawai=<?= $pegawai['idpegawai']; ?>" class="btn btn-danger" onclick="return confirm('apakah anda yakin?');">Hapus</a>
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