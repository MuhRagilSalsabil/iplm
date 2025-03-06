<?php
include "koneksi.php";
$id = $_POST['id_iplm'];
$tahun = $_POST['tahun'];
$ket = $_POST['ket'];


$sql = "UPDATE iplminduk set id_iplm = '$id', tahun='$tahun', ket='$ket' where id_iplm='$id'";
$hasil =mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "<script>
    alert('Eksekusi Update data IPLM GAGAL!');
    document.location='data_iplm.php';
    </script>";
}else{
    echo "<script>
    alert('Eksekusi update data IPLM BERHASIL!');
    document.location='data_iplm.php';
    </script>";
}

?>