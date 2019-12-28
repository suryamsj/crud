<?php
//Pemanggilan fungsi
require 'function/fungsi.php';

//Halaman
$halaman = 5;
$data = count(query("SELECT * FROM mahasiswa"));
$total = ceil($data / $halaman);
$aktif = (isset($_GET["page"])) ? $_GET["page"] : 1;
$awal = ($halaman * $aktif) - $halaman;

// Query untuk menampilkan data yang berada di dalam table
$hasil = query("SELECT * FROM mahasiswa LIMIT $awal,$halaman");

//Search
if (isset($_POST["cari"])) {
    $hasil = carimhs($_POST["mencari"]);
}
?>
<div class="row">
    <div class="col-lg-12">

        <form class="form-inline" action="" method="POST">
            <a href="index.php?halaman=tambahmhs" title="Tambah Data Mahasiswa" class="btn btn-primary btn-sm text-white mr-2"><i class="fa fa-plus" aria-hidden="true"></i>
                Tambah Data Mahasiswa</a>
            <input class="form-control mr-sm-1" type="search" placeholder="Search" name="mencari" aria-label="Search" autofocus autocomplete="off">
            <button class="btn btn-primary my-2 my-sm-0" type="submit" name="cari">Search</button>
        </form>

        <table class="table table-responsive table-hover">
            <caption>Data Mahasiswa</caption>
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama Mahasiswa</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Tanggal Lahir</th>
                    <th>Kode Matakuliah</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $a = 1; ?>
                <?php foreach ($hasil as $row) : ?>
                    <tr>
                        <td><?= $a++ ?></td>
                        <td><?= $row["NIM"]; ?></td>
                        <td><?= $row["nama"]; ?></td>
                        <td><?= $row["jk"]; ?></td>
                        <td><?= $row["Alamat"]; ?></td>
                        <td><?= date('d F Y', strtotime($row["TLahir"])); ?></td>
                        <td><?= $row["KDMK"]; ?></td>
                        <td>
                            <div class="text-center">
                                <a class="btn btn-outline-primary btn-sm" title="Ubah Data" href="index.php?halaman=editmhs&NIM=<?= $row["NIM"]; ?>"><i class="fas fa-edit"></i></a>
                                <a class="btn btn-outline-danger btn-sm" title="Hapus Data" href="index.php?halaman=hapusmhs&NIM=<?= $row["NIM"]; ?>" onclick="return confirm('Bener Mau Diapus?');"><i class="fas fa-trash"></i></a>
                            </div>
                        </td>
                    </tr> <?php endforeach ?>
            </tbody>
        </table>
        <?php require 'source/navmhs.php'; ?>
    </div>
</div>