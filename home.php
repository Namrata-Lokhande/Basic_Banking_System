<?php
session_start();
include "connection.php";
?>
<html>
<head>
<title>PHP-QUIZ</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="style2.css">

<style>
 .button{
position:relative;
float:center;
}
</style>
</head>

<body>
<section id="main">
<div class="main content">
<div class ="nav">
<nav>
<a href="home.php">Home</a>
<a href="customers.php" >Customer</a>
<a href="transaction.php">Transaction History</a>
</nav>

</div>
<div class="bank">
<div class="logo">
<img src="i8.jpg">
</div>
</div>
</section>

<div class="wel">
<center>
<p style="font-size:60px;">Welcome To</p>
<p style="font-size:50px;"><b><u>Indian Bank</u></b></p>
</center>
</div>

<div class="button">
<center><p><a href="customers.php">Get Started</a></p></center>
</div>
</html>
