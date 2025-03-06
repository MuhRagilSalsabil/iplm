<?php
include "koneksi.php";
$id = (isset($_POST['id_anggota'])?$_POST['id_anggota']: '');
$uplm1 = $_POST['uplm1'];
$uplm2 = $_POST['uplm2'];
$uplm3 = $_POST['uplm3'];
$uplm4 = $_POST['uplm4'];
$uplm5 = $_POST['uplm5'];
$uplm6 = $_POST['uplm6'];
$uplm7 = $_POST['uplm7'];


$sql = "UPDATE anggota set uplm1 = '$uplm1', uplm2='$uplm2', uplm3='$uplm3', uplm4='$uplm4', uplm5='$uplm5', uplm6='$uplm6',   uplm7='$uplm7' where id_anggota=$id";
$hasil =mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "<script>
    alert('Eksekusi Update data uplm GAGAL!');
    
    </script>";
}else{
    echo "<script>
    alert('Eksekusi update data uplm BERHASIL!');
    document.location='data_anggota.php'
    </script>";
}

?>