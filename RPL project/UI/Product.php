<?php 
session_start();

if( !isset($_SESSION["login"]) ) {
	header("Location: login.php");
	exit;
}

require 'Function.php';
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
    <title>Product</title>
</head>
<body>
    <div class="grid-container">
        <div class="header">
            <h2>BeautyMarkt</h2>
            <ul>
                <li><a href="Product.php">HOME</a></li>
                <li><a href="#">CATEGORY</a></li>
                <li><a href="Cart.php"><i class='bx bxs-shopping-bag' ></i></a></li>
                <li><a href="Logout.php"><i class='bx bx-log-out'></i></a></li>
            </ul>
        </div>
        <div class="product">
            <div class="card">1</div>
            <div class="card">1</div>
            <div class="card">1</div>
            <div class="card">1</div>
        </div>
        <div class="footer">
            <a href="#">ABOUT</a>
            <a href="#"><i class='bx bxl-instagram-alt' ></i></a>
            <a href="#"><i class='bx bxl-twitter' ></i></a>
            <a href="#">FAQ</i></a>
            <div class="tag"><p>© 2023 BeautyMarkt. All Right Reserved</p></div>
        </div>  
    </div>
</body>
</html>
</body>
</html>