<?php 
require 'Function.php';

if( isset($_POST["register"]) ) {

	if( registrasi($_POST) > 0 ) {
		echo "<script>
				alert('Registration success!');
			  </script>";
	} else {
		echo mysqli_error($conn);
	}
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
    <title>Register</title>
    <style>
		label {
			display: block;
		}
	</style>
</head>
<body>
    <div class="grid-container">
        <div class="title"><h2>BeautyMrkt</h2></div>
        
        <div class="form-regis">
            <form action="" method="post">
                <h2>Register</h2>

                    <div class="input-box">
                        <input type="text" name="name" placeholder="name" required>
                    </div>

                    <div class="input-box">
                        <input type="text" name="email" placeholder="email" required>
                    </div>

                    <div class="input-box">
                        <input type="password" name="password" placeholder="password" required>
                        <p>Must be at least 8 characters long</p>
                    </div>

                    <div class="input-box">
                        <input type="password" name="password2" placeholder="confirm password" required>
                    </div>

                    <button type="submit" name="register" class="btn">Sign Up</button>
                    
                    <div class="login">
                        <p>Already have an account? <a href="Login.php">Log In</a></p>
                    </div>
        </div>

        <div class="termofcondition"><p>By login, you agree to our Terms and conditions & Privacy Policy</p></div>  
    </div>
</body>
</html>