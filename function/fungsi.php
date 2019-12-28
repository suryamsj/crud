<?php
//Koneksi Database
$koneksi = mysqli_connect("localhost", "root", "", "dell");

//Semua Fungsi
function query($func)
{
    global $koneksi;
    $result = mysqli_query($koneksi, $func);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

//Fungsi tambah data mahasiswa
function tambahmhs($data)
{
    global $koneksi;
    $NIM = $_POST['NIM'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $Alamat = $_POST['Alamat'];
    $TLahir = $_POST['TLahir'];
    $KDMK = $_POST['KDMK'];

    $query = "INSERT INTO mahasiswa(NIM,nama,jk,Alamat,TLahir,KDMK) VALUES ('$NIM','$nama','$jk','$Alamat','$TLahir','$KDMK')";

    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}

//Fungsi tambah data matakuliah
function tambahmk($data)
{
    global $koneksi;
    $KDMK = $_POST['KDMK'];
    $nm_mk = $_POST['nm_mk'];
    $sks = $_POST['sks'];

    $query = "INSERT INTO matakuliah(KDMK,nm_mk,sks) VALUES ('$KDMK','$nm_mk','$sks')";

    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}

//Fungsi hapus data mahasiswa
function hapusmhs($NIM)
{
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE NIM = $NIM");

    return mysqli_affected_rows($koneksi);
}

//Fungsi hapus data matakuliah
function hayu($KDMK)
{
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM matakuliah WHERE KDMK = '$KDMK'");

    return mysqli_affected_rows($koneksi);
}

//Fungsi edit data matakuliah
function editmk($data)
{
    global $koneksi;
    $KDMK = $data["KDMK"];
    $nm_mk = $_POST['nm_mk'];
    $sks = $_POST['sks'];

    $query = "UPDATE matakuliah SET nm_mk='$nm_mk',sks='$sks' WHERE KDMK='$KDMK'";
    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}

//Fungsi edit data mahasiswa
function editmhs($data)
{
    global $koneksi;
    $NIM = $data["NIM"];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $Alamat = $_POST['Alamat'];
    $TLahir = $_POST['TLahir'];
    $KDMK = $_POST['KDMK'];

    $query = "UPDATE mahasiswa SET nama='$nama',jk='$jk',Alamat='$Alamat',TLahir='$TLahir',KDMK='$KDMK' WHERE NIM='$NIM'";
    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}

//Fungsi search / mencari data
function carimhs($mencari)
{
    $query = "SELECT * FROM mahasiswa WHERE NIM LIKE '%$mencari%' OR nama LIKE '%$mencari%' OR KDMK LIKE '%$mencari%'";

    return query($query);
}
function carisemua($mencari)
{
    $query = "SELECT NIM,nama,nm_mk,sks FROM mahasiswa INNER JOIN matakuliah ON matakuliah.KDMK=mahasiswa.KDMK WHERE NIM LIKE '%$mencari%' OR nama LIKE '%$mencari%' OR nm_mk LIKE '%$mencari%'";

    return query($query);
}
