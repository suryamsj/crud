<?php
//Pemanggilan fungsi
require 'function/fungsi.php';

//Untuk mendapatkan Nilai KDMK [Kode Matakuliah]
$NIM = $_GET["NIM"];

//Query Untuk menampikan data dari table matakuliah & mahasiswa
$ubah = query("SELECT * FROM mahasiswa WHERE NIM = $NIM")[0];

$yolo = query("SELECT * FROM matakuliah");

//Pengecekan Apakah data sudah masuk atau belum
if (isset($_POST['tambah'])) {
    if (editmhs($_POST) > 0) {
        echo "<script>alert('Data Berhasi Di Ubah Coy!!!!');document.location.href='index.php?halaman=home';</script>";
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
                Form Edit Mahasiswa
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                        <input type="hidden" class="form-control" name="NIM" id="NIM" aria-describedby="helpId" placeholder="Masukkan Kode Matakuliah" value="<?= $ubah["NIM"]; ?>">
                    </div>
                    <div class="form-group">
                        <label for="nama"><i class="fas fa-book"></i>&nbsp;Nama Mahasiswa</label>
                        <input type="text" class="form-control" autocomplete="off" name="nama" id="nama" aria-describedby="helpId" value="<?= $ubah["nama"]; ?>">
                        <small id="helpId" class="form-text text-muted">Example : Aljabar Linear</small>
                    </div>
                    <div class="form-group">
                        <label for="jk"><i class="fas fa-user"></i>&nbsp;Jenis Kelamin</label>
                        <select class="form-control" name="jk" id="jk" aria-describedby="helpId" required>
                            <option disabled selected><?= $ubah["jk"]; ?></option>
                            <option value="Laki - Laki">Laki - Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                        <small id="helpId" class="form-text text-muted">Example : Laki - Laki</small>
                    </div>
                    <div class="form-group">
                        <label for="Alamat"><i class="fas fa-book"></i>&nbsp;Alamat</label>
                        <input type="text" class="form-control" autocomplete="off" name="Alamat" id="Alamat" aria-describedby="helpId" value="<?= $ubah["Alamat"]; ?>">
                        <small id="helpId" class="form-text text-muted">Example : Aljabar Linear</small>
                    </div>
                    <div class="form-group">
                        <label for="TLahir"><i class="fas fa-sort-numeric-up"></i>&nbsp;Tanggal Lahir</label>
                        <input type="date" class="form-control" autocomplete="off" name="TLahir" id="TLahir" aria-describedby="helpId" value="<?= $ubah["TLahir"]; ?>">
                        <small id="helpId" class="form-text text-muted">Example : 3</small>
                    </div>
                    <div class="form-group">
                        <label for="KDMK"><i class="fas fa-book"></i>&nbsp;Matakuliah</label>
                        <select class="form-control" name="KDMK" id="KDMK" aria-describedby="helpId">
                            <?php foreach ($yolo as $row) : ?>
                                <option value="<?= $row["KDMK"] ?>" <?php if ($ubah["KDMK"] == $row["KDMK"]) : ?> selected="selected" <?php endif; ?>>
                                    <?= $row["nm_mk"] ?></option>
                            <?php endforeach ?>
                        </select>
                        <small id="helpId" class="form-text text-muted">Example : Basis Data</small>
                    </div>
                    <button class="animated bounceIn delay-1s btn btn-primary float-right ml-1" type="reset"><i class="fas fa-trash-restore"></i>&nbsp;Reset</button>
                    <button class="animated bounceIn delay-1s btn btn-dark float-right" type="submit" name="tambah"><i class="fas fa-paper-plane"></i>&nbsp;Ubah Data</button>
                </form>
            </div>
        </div>
    </div>
</div>