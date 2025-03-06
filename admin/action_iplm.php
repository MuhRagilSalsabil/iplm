<?php
include "koneksi.php";
session_start();
$id = $_POST['id_iplm'];
$tahun = $_POST['tahun'];
$sql = "SELECT * FROM iplminduk WHERE tahun = '$tahun'";
$hasil = mysqli_query($koneksi, $sql);
$cek = mysqli_num_rows($hasil);
if ($cek == 0) {
    $sql1 = "INSERT INTO iplminduk VALUES('$id','$tahun',0)";
    $hasil1 = mysqli_query($koneksi, $sql1);
    if (!$hasil1) {
        echo "<script>
        alert('Eksekusi Tambah data IPLM GAGAL!');
        document.location='data_iplm.php';
        </script>";
    } else {
        echo "<script>
        alert('Eksekusi Tambah data IPLM BERHASIL!');
        document.location='data_iplm.php';
        </script>";
    }
} else {
    echo "<script>
        alert('Tahun ini sudah ditambahkan');
        document.location='data_iplm.php';
        </script>";
}
