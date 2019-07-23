<?php
include 'sql_inject.php';
$agents=mysqli_query($conn,"SELECT * from agents");
?><!DOCTYPE html>
<html lang="en">
<head>
	<title>SQL INJECTION BASED DATABASE</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
</head>
<body>
	<h1 style="text-align:center">SQL INJECTION BASED DATABASE</h1>
	<h2><center><a href="login.php">login</a></center></h2>
	<hr>
	
	<?php
	
	
		while($row=mysqli_fetch_array($agents)){
		
		echo "<a href ='data.php?id={$row['id']}'><h2>{$row['AGENT_CODE']}</h2></a>";
		echo "<small>AGENT_NAME{$row['AGENT_NAME']}</small>";
		echo "<small>WORKING_AREA{$row['WORKING_AREA']}</small>";
		echo "<small>COMMISSION{$row['COMMISSION']}</small>";
		echo "<small>PHONE_NO{$row['PHONE_NO']}</small>";
		echo "<small>COUNTRY{$row['COUNTRY']}</small>";
		echo  "<hr>";
	}

	?>
	<?body>
	</html>