<?php
session_start();

if( !isset($_SESSION["login"]) ) {
	header("Location: login.php");
	exit;
}

require 'Function.php';

//melakukan rating skala 1-5
function addRate($data) {
	global $conn;

}

//mengisi feedback dari suatu produk
function addReview($data) {
	global $conn;

}

//menghapus review yang telah dibuat customer
//customer hanya bisa menghapus review dari akun diri sendiri
function deleteReview($data) {
	global $conn;

}
?>