<?php
include "connection.php";
if(isset($_POST['submit']))
{
$from=$_GET['accountno'];
$to=$_POST['to'];
$amount=$_POST['amount'];

$sql="SELECT * from customer where accountno=$from";
$query=mysqli_query($conn,$sql);
$q1=mysqli_fetch_array($query);

$sql="SELECT * from customer where accountno=$to";
$query=mysqli_query($conn,$sql);
$q2=mysqli_fetch_assoc($query);

if(($amount)<0)
{
echo '<script type="text/javascript">';
echo ' alert("Oops! Negative values cannot be transferred")';
echo '</script>';
}
else if($amount>$q1['balance'])
{
echo '<script type="text/javascript">';
echo ' alert("Bad Luck! Insufficient Balance")';
echo '</script>';
}
else if($amount == 0)
{
echo '<script type="text/javascript">';
echo ' alert(Oops! Zero value cannot be transferred)';
echo '</script>';
}
else
{
//deducting amount from sender's account

$newbalance = $q1['balance'] - $amount;
$sql="UPDATE customer set balance=$newbalance where accountno=$from";
mysqli_query($conn,$sql);

//adding amount to receiver's account

$newbalance = $q2['balance'] + $amount;
$sql="UPDATE customer set balance=$newbalance where accountno=$to";
mysqli_query($conn,$sql);

$sender = $q1['accountno'];
$receiver = $q2['accountno'];

$sql="INSERT INTO transaction(sender,receiver,amount) VALUES ('$sender','$receiver','$amount')";
$query=mysqli_query($conn,$sql);

if($query){
echo "<script> alert('Hurray! Transaction is Successful');
          window.location='transaction.php';
      </script>";
}
$newbalance=0;
$amount=0;
}

}

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
<form method="POST" name="credit" class="tabletext" align="center" ><br>
<div>
<table class="data-table">
	<caption class="title" style="color:white;"><b>Customer Details</b></caption>
	 	<thead>
			<tr>
				<th>Account No</th>
				<th>Name</th>
				<th>Email Id</th>
				<th>Balance</th>
				
			</tr>
		</thead>
		<tbody>
<?php 
             include 'connection.php';
            $account_no=$_GET['accountno'];
            $query = "SELECT * FROM customer where accountno=$account_no";
            $select_customer = mysqli_query($conn, $query) or die(mysqli_error($conn));
            if (mysqli_num_rows($select_customer) > 0 ) {
            while ($row = mysqli_fetch_array($select_customer)) {
                $accountno1 = $row['accountno'];
                $name = $row['name'];
                $email = $row['email'];
                $balance = $row['balance'];
                echo "<tr>";
                echo "<td><h1>$accountno1</h1></td>";
                echo "<td><h3>$name</h3></td>";
                echo "<td><h3>$email</h3></td>";
                echo "<td><h1>$balance</h1></td>";
                
                echo "</tr>";
             }
         }
        ?>	
</tbody>		
</table>
</div>
<br>
<label style="color : white;" style="padding:10px;"><b>Transfer To:</b></label>
<select name="to" class="to" required>
<option value="" disabled selected>Choose account</option>
<?php
include 'connection.php';
$accountno1=$_GET['accountno'];
$query = "SELECT * FROM customer where accountno!=$accountno1";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
if(!$result)
{
echo "Error ".$query."<br>".mysqli_error($conn);
}
while($row=mysqli_fetch_assoc($result)){
?>
<option class="table" value="<?php echo $row['accountno'];?>">
<?php echo $row['accountno'];?>
</option>

<?php
}
?>
<div>
</select>
<br>
<label style="color:white;"><b>Amount :</b></label>
<input type="number" class="form control" name="amount" required>
<br>
<div class="text">
<button class="transfer" name="submit" type="submit" id="mybtn" style="font-size:25px;">Transfer Money</button>
</div>
</form>
</body>
</html>


</div>
</body>
</html>
