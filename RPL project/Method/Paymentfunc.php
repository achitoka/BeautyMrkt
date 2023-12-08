<?php
session_start();

if( !isset($_SESSION["login"]) ) {
	header("Location: login.php");
	exit;
}

require 'Function.php';

//memilih metode pembayaran kemudian disimpan ke database
function payMethod($data) {
	global $conn;

}

function buy($data) {
	global $conn;
	//jika metode pembayaran tidak dipilih, pesan error
	//jika metode pembayaran tidak dipilih, pesan berhasil

}
?>