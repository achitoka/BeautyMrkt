<?php 
session_start();
$_SESSION = [];
//keluar dari akun
session_unset();
session_destroy();

//menghapus cookie
setcookie('id', '', time() - 3600);
setcookie('key', '', time() - 3600);

//kembali ke Login
header("Location: Login.php");
exit;

?>