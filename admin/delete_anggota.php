<?php
include 'koneksi.php';
$id=$_GET['id'];

$sql="DELETE FROM anggota WHERE id_anggota=$id";
$hasil=mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "<script>
    alert('Delete data IPLM GAGAL!');
    document.location='data_anggota.php';
    </script>";
}else{
    echo "<script>
    alert('Delete data IPLM BERHASIL!');
    document.location='data_anggota.php';
    </script>";
}
