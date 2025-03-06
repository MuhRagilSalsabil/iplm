<?php
include "koneksi.php";
session_start();
$id_anggota = (isset($_POST['id_anggota']) ? $_POST['id_anggota'] : '');
$id_iplm = $_POST['id_iplm'];
$uplm1 = $_POST['uplm1'];
$uplm2 = $_POST['uplm2'];
$uplm3 = $_POST['uplm3'];
$uplm4 = $_POST['uplm4'];
$uplm5 = $_POST['uplm5'];
$uplm6 = $_POST['uplm6'];
$uplm7 = $_POST['uplm7'];



$sql = "INSERT INTO anggota (id_anggota, id_iplm, uplm1, uplm2, uplm3, uplm4, uplm5, uplm6, uplm7) VALUES (null, '$id_iplm', '$uplm1', '$uplm2', '$uplm3', '$uplm4', '$uplm5', '$uplm6', '$uplm7')";
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil) {
   echo "<script>
   alert('Eksekusi Tambah data IPLM GAGAL!');
   document.location='data_anggota.php';
   </script>";
} else {
   echo "<script>
     alert('Eksekusi Tambah data IPLM BERHASIL!');
     document.location='data_anggota.php';
    </script>";
}
