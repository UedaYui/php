<html>
	<head>
			<title>mission_3-3</title>
			<meta charset = "utf-8"> 
	</head>
	<body>
	
	<?php
	
	$dsn = 'mysql:dbname=tt_644_99sv_coco_com;host=localhost';
	$user = 'tt-644.99sv-coco.com';
	$password = 'N3bJKiHW';
	$pdo = new PDO($dsn,$user,$password,array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING));
	
	$sql = 'SHOW TABLES';
	$result = $pdo->query($sql);
	foreach ($result as $row){
		echo $row[0];
		echo"<br>";
	}
	echo"<hr>";
	
	?>
	
	</body>
</html>