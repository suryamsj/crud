<?php
//Pemanggilan fungsi
require 'function/fungsi.php';

//Query untuk menampilkan data matakuliah yang terakhir di masukkan [Mengambil 1 Data]
$end = query("SELECT * FROM matakuliah ORDER BY KDMK DESC LIMIT 1");

//Pengecekan Apakah data sudah masuk atau belum
if (isset($_POST['tambah'])) {
    if (tambahmk($_POST) > 0) {
        echo "<script>alert('Data Udah Masuk Coy!!!!');document.location.href='index.php?halaman=matakuliah';</script>";
    } else {
        echo "Gagal Coy";
        echo "<br><br>";
        echo mysqli_error($koneksi);
    }
}
?>
<div class="row">
    <div class="col-lg-8">
        <div class="card shadow-sm">
            <div class="card-header bg-dark text-light">
                Form Tambah Matakuliah
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="KDMK"><i class="fas fa-tag"></i>&nbsp;Kode Matakuliah</label>
                        <input type="text" class="form-control" name="KDMK" id="KDMK" aria-describedby="helpId" placeholder="Masukkan Kode Matakuliah" autocomplete="off" autofocus required>
                        <small id="helpId" class="form-text text-muted">Example : A01</small>
                    </div>
                    <div class="form-group">
                        <label for="nm_mk"><i class="fas fa-book"></i>&nbsp;Nama Matakuliah</label>
                        <input type="text" class="form-control" name="nm_mk" id="nm_mk" aria-describedby="helpId" placeholder="Masukkan Nama Matakuliah" autocomplete="off" required>
                        <small id="helpId" class="form-text text-muted">Example : Aljabar Linear</small>
                    </div>
                    <div class="form-group">
                        <label for="sks"><i class="fas fa-sort-numeric-up"></i>&nbsp;SKS</label>
                        <input type="number" class="form-control" name="sks" id="sks" aria-describedby="helpId" placeholder="Masukkan SKS" autocomplete="off" required>
                        <small id="helpId" class="form-text text-muted">Example : 3</small>
                    </div>
                    <button class="animated bounceIn delay-1s btn btn-primary float-right ml-1" type="reset"><i class="fas fa-trash-restore"></i>&nbsp;Reset</button>
                    <button class="animated bounceIn delay-1s btn btn-dark float-right" type="submit" name="tambah"><i class="fas fa-paper-plane"></i>&nbsp;Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <table class="table table-hover">
            <caption>Data Matakuliah Yang Terakhir Masuk</caption>
            <thead class="thead-dark">
                <tr>
                    <th scope="col">NIM</th>
                    <th scope="col">Nama Matakuliah</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($end as $row) : ?>
                    <tr>
                        <td scope="row"><?= $row["KDMK"]; ?></td>
                        <td scope="row"><?= $row["nm_mk"]; ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>