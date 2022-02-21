<?php
include "connection.php";
?>
<html>
<head>
<title>PHP-QUIZ</title>
<link rel="stylesheet" type="text/css" href="style1.css">
<link rel="stylesheet" type="text/css" href="style3.css">

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
<img src="i7.jpg">
<div class="cust">
</div>
</div>
</section>
<div>
<table class="data-table">
	<caption class="title" style="color:white;"><b>AllCustomer</b></caption>
	 	<thead>
			<tr>
				<th>SNo</th>
				<th>Sender</th>
				<th>Receiver</th>
				<th>Amount</th>
				<th>DateTime</th>
			</tr>
		</thead>
		<tbody>
<?php 
            
            $query = "SELECT * FROM transaction ORDER BY id ASC";
            $select_customer = mysqli_query($conn, $query) or die(mysqli_error($conn));
            if (mysqli_num_rows($select_customer) > 0 ) {
            while ($row = mysqli_fetch_array($select_customer)) {
                $sno = $row['id'];
                $sender = $row['sender'];
                $receiver = $row['receiver'];
                $amount = $row['amount'];
	  $datetime=$row['datetime'];
                echo "<tr>";
                echo "<td><h1>$sno</h1></td>";
                echo "<td><h3>$sender</h3></td>";
                echo "<td><h3>$receiver</h3></td>";
                echo "<td><h2>$amount</h2></td>";
	 echo "<td><h2>$datetime</h2></td>";
                echo "</tr>";
             }
         }
        ?>
	
		</tbody>
		
	</table>
</body>
</html>


</div>
</body>
</html>
