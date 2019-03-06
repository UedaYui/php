<html>
	<head>
			<title>mission_3-4</title>
			<meta charset = "utf-8"> 
	</head>
	<body>
	
	<?php
	
	$dsn = 'mysql:dbname=tt_644_99sv_coco_com;host=localhost';
	$user = 'tt-644.99sv-coco.com';
	$password = 'N3bJKiHW';
	$pdo = new PDO($dsn,$user,$password,array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING));
	
	$sql = 'SHOW CREATE TABLE tbtest';
	$result = $pdo->query($sql);
	foreach ($result as $row){
		echo $row[1];
	}
	echo"<hr>";
	
	?>
	
	</body>
</html>