<?php
include'sql_inject.php';
$id=$_GET['id'];
$q=mysqli_query($conn,"SELECT * FROM agents where id={$id}") or die(mysqli_error($conn));
$agents=mysqli_fetch_array($q);

?><DOCTYPE html>
<html lang='en'>
<head>
	<title>DATA</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
</head>
<body>
	<h1 style="text-align:center">mark1</h1>
	<hr>
	<h2><?php echo $agents['AGENT_NAME']?></h2>
	<small><?php echo $agents['WORKING_AREA']?></small>
	<small><?php echo $agents['COMMISSION']?></small>
	<small><?php echo $agents['PHONE_NO']?></small>
	<small><?php echo $agents['AGENT_NAME']?></small>
	<small><?php echo $agents['COUNTRY']?></small>
</body>

</html>