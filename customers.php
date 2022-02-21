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
				<th>Account No</th>
				<th>Name</th>
				<th>Email Id</th>
				<th>Balance</th>
				<th>Transfer</th>
			</tr>
		</thead>
		<tbody>
<?php 
            
            $query = "SELECT * FROM customer ORDER BY accountno ASC";
            $select_customer = mysqli_query($conn, $query) or die(mysqli_error($conn));
            if (mysqli_num_rows($select_customer) > 0 ) {
            while ($row = mysqli_fetch_array($select_customer)) {
                $accountno = $row['accountno'];
                $name = $row['name'];
                $email = $row['email'];
                $balance = $row['balance'];
                echo "<tr>";
                echo "<td><h1>$accountno</h1></td>";
                echo "<td><h3>$name</h3></td>";
                echo "<td><h3>$email</h3></td>";
                echo "<td><h1>$balance</h1></td>";
                echo "<td> <a href='transfer.php?accountno=$accountno'><h3>Transfer</h3> </a></td>";

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
