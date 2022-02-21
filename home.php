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
body{
background-image:url(i90.jpg);
font-family: arial;
	
font-size: 20px;
	
line-height: 1.6em;

position: relative;
z-index: 1;
background-attachment: fixed;  
overflow-y:hidden
overflow-x:hidden; /* Hide horizontal scrollbar */
}
body nav{
position:relative;
float:right;
}
a{
background-color:black;
 color:black;
line-height=0.7px;
}
a:link, a:visited {
  background-color:black;
  color: white;
  padding: 15px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: white;
  color:black;
}
body{
font-family:"Century Gothic";
}

</style>
</head>

<body>
<section id="main">
<div class="main content">
<div class ="nav" style="background-color:blue;">
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
