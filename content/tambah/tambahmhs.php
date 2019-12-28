<?php
//Pemanggilan fungsi
require 'function/fungsi.php';

//Query untuk menampilkan data matakuiah
$yolo = query("SELECT * FROM matakuliah");

//Query untuk menampilkan data matakuiah yang paing terakhir di masukkan [Mengambil 1 Data]
$end = query("SELECT * FROM mahasiswa ORDER BY NIM DESC LIMIT 1");

if (isset($_POST['tambah'])) {
    if (tambahmhs($_POST) > 0) {
        echo "<script>alert('Data Udah Masuk Coy!!!!');document.location.href='index.php?halaman=mahasiswa';</script>";
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
                Form Tambah Mahasiswa
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="NIM"><i class="fas fa-id-card"></i>&nbsp;NIM</label>
                        <input type="number" class="form-control" name="NIM" id="NIM" aria-describedby="helpId" placeholder="Masukkan Nim" autocomplete="off" autofocus required>
                        <small id="helpId" class="form-text text-muted">Example : 18107001</small>
                    </div>
                    <div class="form-group">
                        <label for="nama"><i class="fas fa-user"></i>&nbsp;Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama" aria-describedby="helpId" placeholder="Masukkan Nama" autocomplete="off" required>
                        <small id="helpId" class="form-text text-muted">Example : Tsubasa Ozora</small>
                    </div>
                    <div class="form-group">
                        <label for="jk"><i class="fas fa-user"></i>&nbsp;Jenis Kelamin</label>
                        <select class="form-control" name="jk" id="jk" aria-describedby="helpId" required>
                            <option disabled selected>Pilih Jenis Kelamin</option>
                            <option value="Laki - Laki">Laki - Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                        <small id="helpId" class="form-text text-muted">Example : Laki - Laki</small>
                    </div>
                    <div class="form-group">
                        <label for="Alamat"><i class="fas fa-map-marker-alt"></i>&nbsp;Alamat</label>
                        <input type="text" class="form-control" name="Alamat" id="Alamat" aria-describedby="helpId" placeholder="Masukkan Alamat" autocomplete="off" required>
                        <small id="helpId" class="form-text text-muted">Example : Bandung</small>
                    </div>
                    <div class="form-group">
                        <label for="TLahir"><i class="fas fa-calendar-alt"></i>&nbsp;Tanggal Lahir</label>
                        <input type="date" class="form-control" name="TLahir" id="TLahir" aria-describedby="helpId" required>
                        <small id="helpId" class="form-text text-muted">Example : 12-04-2000</small>
                    </div>

                    <div class="form-group">
                        <label for="KDMK"><i class="fas fa-book"></i>&nbsp;Matakuliah</label>
                        <select class="form-control" name="KDMK" id="KDMK" aria-describedby="helpId" required>
                            <option disabled selected>Pilih Matakuliah</option>
                            <?php foreach ($yolo as $row) : ?>
                                <option value="<?= $row["KDMK"] ?>"><?= $row["nm_mk"] ?></option>
                            <?php endforeach ?>
                        </select>
                        <small id="helpId" class="form-text text-muted">Example : Basis Data</small>
                    </div>
                    <button class="animated lightSpeedIn delay-1s btn btn-primary float-right ml-1" type="reset"><i class="fas fa-trash-restore"></i>&nbsp;Reset</button>
                    <button class="animated lightSpeedIn delay-1s btn btn-dark float-right" type="submit" name="tambah"><i class="fas fa-paper-plane"></i>&nbsp;Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <table class="table table-hover jarak">
            <caption>Data Mahasiswa Yang Terakhir Masuk</caption>
            <thead class="thead-dark">
                <tr>
                    <th scope="col">NIM</th>
                    <th scope="col">Nama Mahasiswa</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($end as $row) : ?>
                    <tr>
                        <td scope="row"><?= $row["NIM"]; ?></td>
                        <td scope="row"><?= $row["nama"]; ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>