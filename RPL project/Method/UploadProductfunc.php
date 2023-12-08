<?php
session_start();

if( !isset($_SESSION["login"]) ) {
	header("Location: login.php");
	exit;
}

require 'Function.php';

//menambah produk
function add($data) {
	global $conn;
    //gambar = upload()
}

//mengupload produk dari fungsi menambah produk
//disimpan ke database
function upload() {
    
}

//mengubah produk yang sudah di upload
function change($data) {
    	
}

//menghapus produk yang sudah di upload
function delete($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM product WHERE product_id = $id");
	return mysqli_affected_rows($conn);
}

$id = $_GET["product_id"];

if( delete($id) > 0 ) {
	echo "
		<script>
			alert('Delete successed!');
			document.location.href = 'RecentPost.php';
		</script>
	";
} else {
	echo "
		<script>
			alert('Data failed to added!');
			document.location.href = 'UploadProduct.php';
		</script>
	";
}
?>