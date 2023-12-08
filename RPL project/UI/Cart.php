<?php 
session_start();

if( !isset($_SESSION["login"]) ) {
	header("Location: Product.php");
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
    <title>Cart</title>
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
        <div class="cart">
            <div class="list">
                <form action="">
                    <div class="input-box">
                        <input type="text" placeholder="address" required>
                    </div>

            <div class="list">
                <form action="">
                    <div class="input-box">
                        <input type="text" placeholder="address" required>
                    </div>

            <button type="submit" class="checkout">Checkout</button>
        </div>
    </div>
</body>
</html>