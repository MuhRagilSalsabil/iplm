<?php
//aktifkan session php
session_start();
$_SESSION = [];
session_unset();
session_destroy();
header("location:../Dispusip/index.php");
exit;
?>