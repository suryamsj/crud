<?php
require 'function/fungsi.php';

$NIM = $_GET["NIM"];

if (hapusmhs($NIM) > 0) {
    echo "<script>alert('Data Dihapus Cuy');document.location.href='index.php?halaman=mahasiswa';</script>";
} else {
    echo "<script>alert('Data Gagal Dihapus Cuy');document.location.href='index.php?halaman=mahasiswa';</script>";
}
