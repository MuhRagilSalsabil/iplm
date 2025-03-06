<?php
include 'koneksi.php';

$id = $_GET['id'];
$query = "DELETE FROM iplminduk WHERE id_iplm='$id'";
$sql = mysqli_query($koneksi, $query);
if (!$sql) {
    echo "<script>
    alert('Eksekusi Hapus data IPLM GAGAL!');
    document.location='data_iplm.php';
    </script>";
} else {
    $query = "DELETE FROM anggota WHERE id_iplm = '$id'";
    $sql = mysqli_query($koneksi, $query);
    echo "<script>
    alert('Eksekusi Hapus data IPLM BERHASIL!');
    document.location='data_iplm.php';
    </script>";
}
