<?php
//Pemanggilan fungsi
require 'function/fungsi.php';

//Halaman
$halaman = 5;
$data = count(query("SELECT * FROM mahasiswa"));
$total = ceil($data / $halaman);
$aktif = (isset($_GET["page"])) ? $_GET["page"] : 1;
$awal = ($halaman * $aktif) - $halaman;

$result = query("SELECT NIM,nama,nm_mk,sks FROM mahasiswa INNER JOIN matakuliah ON matakuliah.KDMK=mahasiswa.KDMK LIMIT $awal,$halaman");

if (isset($_POST["cari"])) {
    $result = carisemua($_POST["mencari"]);
}
?>

<div class="row">
    <div class="col-lg-12">

        <form class="form-inline" action="" method="POST">
            <a href="index.php?halaman=tambahmhs" title="Tambah Data Mahasiswa" class="btn btn-primary btn-sm text-white mr-2"><i class="fa fa-plus" aria-hidden="true"></i>
                Tambah Data Mahasiswa</a>
            <input class="form-control mr-sm-1" type="search" placeholder="Cari Data" name="mencari" aria-label="Search" autofocus autocomplete="off">
            <button class="btn btn-primary my-2 my-sm-0" type="submit" name="cari">Search</button>
        </form>

        <table class="table table-responsive table-hover">
            <caption>Data Mahasiswa & Matakuliah</caption>
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama Mahasiswa</th>
                    <th>Matakuliah</th>
                    <th>SKS</th>
                </tr>
            </thead>
            <tbody>
                <?php $a = 1; ?>
                <?php foreach ($result as $row) : ?>
                    <tr>
                        <td><?= $a++ ?></td>
                        <td><?= $row["NIM"]; ?></td>
                        <td><?= $row["nama"]; ?></td>
                        <td><?= $row["nm_mk"]; ?></td>
                        <td><?= $row["sks"]; ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        <?php require 'source/navhome.php'; ?>
    </div>
</div>