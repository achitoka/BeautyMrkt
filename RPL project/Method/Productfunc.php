<?php
session_start();

if( !isset($_SESSION["login"]) ) {
	header("Location: login.php");
	exit;
}

require 'Function.php';

//menambahkan produk ke Cart (+1)
function addtoCart($data) {
	global $conn;

}

//memilih produk ke rateReview
function rateReview($data) {
	global $conn;

}
?>