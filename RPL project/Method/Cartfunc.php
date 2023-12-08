<?php
session_start();

if( !isset($_SESSION["login"]) ) {
	header("Location: login.php");
	exit;
}

require 'Function.php';

//mengubah jumlah produk yang ingin dibeli
function updateQty($data) {
	global $conn;
	//tambah jumlah produk
	//kurang jumlah produk
}

//menampilkan produk yang ada di Cart
function viewProduct($data) {
	global $conn;

}

//memilih produk yang dibeli
function listBuy($data) {
	global $conn;
	//tambah list
	//hapus list

}

//melakukan pembelian
function checkout($data) {
	global $conn;
	//jika listBuy kosong, maka muncul pesan error
	//jika listBuy tidak kosong, maka berhasil menuju ke Payment
}
?>