
<?php
session_start(); #mengaktifkan session
include 'koneksi.php'; #menghubungkan php dengan koneksi database

#data yang dikirim dari form login
$user = $_POST['username'];
$pass = md5($_POST['password']); #password di md5

#menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"SELECT * from user where username='$user' and password='$pass'");
$cek = mysqli_num_rows($login); #menghitung jumlah data yang ditemukan

if($cek > 0){ #cek apakah username dan password dapat ditemukan di database
    $data = mysqli_fetch_assoc($login);
    if($data['level']=="admin"){ #cek jika user login sebagai admin

        #buat session login dan username
        $_SESSION['login'] = true;
        $_SESSION['nama'] = $data['namalengkap'];
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "admin";
        #dialihka ke halaman dasboard halamanAdmin
        header("location:../Dispusip/index-iplm.php");

    #ce jika login sebagai guru
    }else if($data['level']=="petugas"){
        $_SESSION['login'] = true;
        $_SESSION['nama'] = $data['namalengkap'];
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "petugas";
        header("location:jemaatpages/index_jemaat.php");
    
    }else{
        header("location:login.php?pesan=gagal");
    }
}else{
    header("location:login.php?pesan=gagal");

}
?>