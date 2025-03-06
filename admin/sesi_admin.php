<?php 
include('koneksi.php');
session_start();

if($_SESSION['level']!='admin' || empty($_SESSION['login'])){
  echo '<script language="javascript">alert("Anda harus Login!"); document.location="login.php";</script>';
}
?>