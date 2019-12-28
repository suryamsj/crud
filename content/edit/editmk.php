<?php
//Pemanggilan fungsi
require 'function/fungsi.php';

//Untuk mendapatkan Nilai KDMK [Kode Matakuliah]
$KDMK = $_GET["KDMK"];

//Query Untuk menampikan data dari table matakuliah
$ubah = query("SELECT * FROM matakuliah WHERE KDMK = '$KDMK'")[0];

//Pengecekan Apakah data sudah masuk atau belum
if (isset($_POST['tambah'])) {
    if (editmk($_POST) > 0) {
        echo "<script>alert('Data Berhasi Di Ubah Coy!!!!');document.location.href='index.php?halaman=matakuliah';</script>";
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
                        <input type="hidden" class="form-control" name="KDMK" id="KDMK" aria-describedby="helpId" placeholder="Masukkan Kode Matakuliah" value="<?= $ubah["KDMK"]; ?>">
                    </div>
                    <div class="form-group">
                        <label for="nm_mk"><i class="fas fa-book"></i>&nbsp;Nama Matakuliah</label>
                        <input type="text" class="form-control" autocomplete="off" name="nm_mk" id="nm_mk" aria-describedby="helpId" value="<?= $ubah["nm_mk"]; ?>">
                        <small id="helpId" class="form-text text-muted">Example : Aljabar Linear</small>
                    </div>
                    <div class="form-group">
                        <label for="sks"><i class="fas fa-sort-numeric-up"></i>&nbsp;SKS</label>
                        <input type="number" class="form-control" autocomplete="off" name="sks" id="sks" aria-describedby="helpId" value="<?= $ubah["sks"]; ?>">
                        <small id="helpId" class="form-text text-muted">Example : 3</small>
                    </div>
                    <button class="animated bounceIn delay-1s btn btn-primary float-right ml-1" type="reset"><i class="fas fa-trash-restore"></i>&nbsp;Reset</button>
                    <button class="animated bounceIn delay-1s btn btn-dark float-right" type="submit" name="tambah"><i class="fas fa-paper-plane"></i>&nbsp;Ubah Data</button>
                </form>
            </div>
        </div>
    </div>
</div>