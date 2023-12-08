<?php 
session_start();
require 'Function.php';

// cek cookie
if( isset($_COOKIE['id']) && isset($_COOKIE['key']) ) {
	$id = $_COOKIE['id'];
	$key = $_COOKIE['key'];

	// ambil username berdasarkan id
	$result = mysqli_query($conn, "SELECT email FROM user WHERE user_id = $id");
	$row = mysqli_fetch_assoc($result);

	// cek cookie dan username
	if( $key === hash('sha256', $row['email']) ) {
		$_SESSION['login'] = true;
	}
}

if( isset($_SESSION["login"]) ) {
	header("Location: Product.php");
	exit;
}


if( isset($_POST["login"]) ) {

	$email = $_POST["email"];
	$password = $_POST["password"];

	$result = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");

	// cek username
	if( mysqli_num_rows($result) === 1 ) {

		// cek password
		$row = mysqli_fetch_assoc($result);
		if( password_verify($password, $row["password"]) ) {
			// set session
			$_SESSION["login"] = true;

			// cek remember me
			if( isset($_POST['remember']) ) {
				// buat cookie
				setcookie('id', $row['user_id'], time()+60);
				setcookie('key', hash('sha256', $row['email']), time()+60);
			}

			header("Location: Product.php");
			exit;
		}
	}

	$error = true;

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Caveat Brush">
    <link rel="stylesheet" href="styles.css">
    <title>Login</title>
</head>
<body>
    <div class="grid-container">
        <div class="title"><h2>BeautyMrkt</h2></div>

        <?php if( isset($error) ) : ?>
	          <p id="err">invalid email or password</p>
        <?php endif; ?>

        <div class="form-login">
            <form action="" method="post">
                <h2>Login</h2>

                <div class="Signup">
                  <p>Don't have an account? <a href="Register.php">Sign Up</a></p>
                </div>

                <div class="input-box1">
                  <input type="text" name="email" placeholder="email" required>
                  <i class='bx bxs-envelope' ></i>
                </div>

                <div class="input-box1">
                  <input type="password" name="password" placeholder="password" required>
                  <i class='bx bxs-lock-alt' ></i>
                </div>

                <div class="remember-forgot">
                  <label><input type="checkbox" name="remember">Remember me</label>
                  <a href="#">forgot password?</a>
                </div>

                <button type="submit" name="login" class="btn">Login</button>
        </div>

        <div class="termofcondition"><p>By login, you agree to our Terms and conditions & Privacy Policy</p></div>  
    </div>
</body>
</html>