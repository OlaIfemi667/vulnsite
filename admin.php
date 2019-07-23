<?php
include 'sql_inject.php';
?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin Page</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
</head>
<body>
	<h1 style="text-align:center">ALL TABLES</h1>
	<hr>
	<h3>data shown in tabular form</h3>
	<li><a href='logout.php'>logout</a></li>
	<?php
	$resultpost1=mysqli_query($conn,"SELECT * FROM agents");
	$resultpost2=mysqli_query($conn,"SELECT * FROM customer");
	$resultpost3=mysqli_query($conn,"SELECT * FROM orders");
	echo "<p><b><center>AGENTS,CUSTOMERS,ORDERS</center></b></p>";
	echo "<center><table border='1'></center>";
	echo "<tr><td><center>id</center></td><td><center>AGENT_CODE</center></td><td><center>AGENT_NAME</center></td><td><center>WORKING_AREA</center></td><td><center>COMMISSION</center></td><td><center>PHONE_NO</center></td><td><center>COUNTRY</center></td></tr>";
	while($row=mysqli_fetch_array($resultpost1,MYSQLI_ASSOC)) {
		echo"<tr><td>".$row['id']."</td>";
		echo"<td>".$row['AGENT_CODE']."</td>";
		echo"<td>".$row['AGENT_NAME']."</td>";
		echo"<td>".$row['WORKING_AREA']."</td>";
		echo"<td>".$row['COMMISSION']."</td>";
		echo"<td>".$row['PHONE_NO']."</td>";
		echo"<td>".$row['COUNTRY']."</td>";
	}	
	echo "<center><table border='1'></center>";
	echo "<tr><td><center>id</center></td><td><center>CUST_CODE</center></td><td><center>CUST_NAME</center></td><td><center>CUST_CITY</center></td><td><center>WORKING_AREA</center></td><td><center>CUST_COUNTRY</center></td><td><center>GRADE</center></td><td><center>OPENING_AMT</center></td><td><center>RECEIVE_AMT</center></td><td><center>PAYMENT_AMT</center></td><td><center>OUTSTANDING_AMT</center></td><td><center>PHONE_NO</center></td><td><center>AGENT_CODE</center></td></tr>";
	while($row1=mysqli_fetch_array($resultpost2,MYSQLI_ASSOC)) {
		echo"<tr><td>".$row1['id']."</td>";
		echo"<td>".$row1['CUST_CODE']."</td>";
		echo"<td>".$row1['CUST_NAME']."</td>";
		echo"<td>".$row1['CUST_CITY']."</td>";
		echo"<td>".$row1['WORKING_AREA']."</td>";
		echo"<td>".$row1['CUST_COUNTRY']."</td>";
		echo"<td>".$row1['GRADE']."</td>";
		echo"<td>".$row1['OPENING_AMT']."</td>";
		echo"<td>".$row1['RECEIVE_AMT']."</td>";
		echo"<td>".$row1['PAYMENT_AMT']."</td>";
		echo"<td>".$row1['OUTSTANDING_AMT']."</td>";
		echo"<td>".$row1['PHONE_NO']."</td>";
		echo"<td>".$row1['AGENT_CODE']."</td>";
	}	
	echo "<center><table border='1'></center>";
	echo "<tr><td><center>id</center></td><td><center>ORD_NUM</center></td><td><center>ORD_AMOUNT</center></td><td><center>ADVANCE_AMOUNT</center></td><td><center>ORD_DATE</center></td><td><center>CUST_CODE</center></td><td><center>AGENT_CODE</center></td><td><center>ORD_DESCRIPTION</center></td></tr>";
	while($row2=mysqli_fetch_array($resultpost3,MYSQLI_ASSOC)) {
		echo"<tr><td>".$row2['id']."</td>";
		echo"<td>".$row2['ORD_NUM']."</td>";
		echo"<td>".$row2['ORD_AMOUNT']."</td>";
		echo"<td>".$row2['ADVANCE_AMOUNT']."</td>";
		echo"<td>".$row2['ORD_DATE']."</td>";
		echo"<td>".$row2['CUST_CODE']."</td>";
		echo"<td>".$row2['AGENT_CODE']."</td>";
		echo"<td>".$row2['ORD_DESCRIPTION']."</td>";
	}
	?>
	</body>
	</html>