<html>
	<head>
			<title>mission_3-2</title>
			<meta charset = "utf-8"> 
	</head>
	<body>
	
	<?php
	$dsn = 'mysql:dbname=tt_644_99sv_coco_com;host=localhost';
	$user = 'tt-644.99sv-coco.com';
	$password = 'N3bJKiHW';
	$pdo = new PDO($dsn,$user,$password,array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING));

	$sql = "CREATE TABLE IF NOT EXISTS tbtest"
	."("
	."id INT,"
	."name char(32),"
	."comment TEXT"
	.");";
	$stmt = $pdo->query($sql);
	?>
