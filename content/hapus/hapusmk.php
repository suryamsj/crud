<?php
require 'functionfungsi.php';

$KDMK = $_GET["KDMK"];

if (hayu($KDMK) > 0) {
    echo "<script>alert('Data Dihapus Cuy');document.location.href='index.php?halaman=matakuliah';</script>";
} else {
    echo "<script>alert('Data Gagal Dihapus Cuy');document.location.href='index.php?halaman=matakuliah';</script>";
}
