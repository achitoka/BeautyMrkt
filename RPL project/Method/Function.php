<?php 
//menghubungkan ke database
$conn = mysqli_connect('localhost', 'root', 'root', 'ascf', 8111);

//query
function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}

//mencari produk menggunakan keyword
function search($keyword) {
	$query = "SELECT * FROM product
				WHERE
			  nama LIKE '%$keyword%' OR
			  nrp LIKE '%$keyword%' OR
			  email LIKE '%$keyword%' OR
			  jurusan LIKE '%$keyword%'
			";
	return query($query);
}

//registrasi
function register($data) {
	global $conn;

	//
	$name = stripslashes($data["name"]);
	$email = strtolower(stripslashes($data["email"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);

	//cek email sudah ada atau belum
	$result = mysqli_query($conn, "SELECT email FROM user WHERE email = '$email'");

	if( mysqli_fetch_assoc($result) ) {
		echo "<script>
				alert('Email has been registered!')
		      </script>";
		return false;
	}

	//cek konfirmasi password
	if( $password !== $password2 ) {
		echo "<script>
				alert('Invalid confirm password!');
		      </script>";
		return false;
	}

	//enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);

	//tambahkan userbaru ke database
	mysqli_query($conn, "INSERT INTO user VALUES('', '$name', '$email', '$password')");
	return mysqli_affected_rows($conn);
}

//validasi login
function login($data) {
	global $conn;
	//jik
}
?>

