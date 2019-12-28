<?php
// Untuk konek ke database
require 'function/fungsi.php';

// Query untuk menampilkan data yang berada di dalam table
$yolo = query("SELECT * FROM matakuliah");
?>
<div class="row">
    <div class="col-lg-12">
        <div class="float-left">
            <h1 class="text-uppercase">Data Matakuliah</h1>
            <a href="index.php?halaman=tambahmk" title="Tambah Data Matakuliah" class="btn btn-primary btn-sm text-white mb-3"><i class="fa fa-plus" aria-hidden="true"></i>
                Tambah Data Matakulliah</a>
        </div>
        <table class="table table-responsive table-hover">
            <caption>Data Mahasiswa</caption>
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Kode Matakuliah</th>
                    <th>Nama Matakuliah</th>
                    <th>SKS</th>
                    <th>Aksi</i></th>
                </tr>
            </thead>
            <tbody>
                <?php $a = 1; ?>
                <?php foreach ($yolo as $row) : ?>
                    <tr>
                        <td><?= $a++ ?></td>
                        <td><?= $row["KDMK"]; ?></td>
                        <td><?= $row["nm_mk"]; ?></td>
                        <td><?= $row["sks"]; ?></td>
                        <td>
                            <div class="text-center">
                                <a class="btn btn-outline-primary btn-sm" title="Ubah Data" href="index.php?halaman=editmk&KDMK=<?= $row["KDMK"]; ?>"><i class="fas fa-edit"></i></i></a>
                                <a class="btn btn-outline-danger btn-sm" title="Hapus Data" href="index.php?halaman=hapusmk&KDMK=<?= $row["KDMK"]; ?>" onclick="return confirm('Bener Mau Diapus?');"><i class="fas fa-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>