<?php
if (isset($_GET['halaman'])) {
    $halaman = $_GET['halaman'];

    switch ($halaman) {
        case 'home':
            include "content/tampil/tampil.php";
            break;
        case 'mahasiswa':
            include "content/tampil/mahasiswa.php";
            break;
        case 'matakuliah':
            include "content/tampil/matakuliah.php";
            break;
        case 'tambahmk':
            include "content/tambah/tambahmk.php";
            break;
        case 'tambahmhs':
            include "content/tambah/tambahmhs.php";
            break;
        case 'editmk':
            include "content/edit/editmk.php";
            break;
        case 'editmhs':
            include "content/edit/editmhs.php";
            break;
        case 'hapusmhs':
            include "content/hapus/hapusmhs.php";
            break;
        case 'hapusmk':
            include "content/hapus/hapusmk.php";
            break;
        default:
            include "source/error.php";
            break;
    }
} else {
    include "content/tampil/tampil.php";
}
