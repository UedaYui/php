<html>
	<head>
			<title>mission_3-5</title>
			<meta charset = "utf-8"> 
	</head>
	<body>
	
	<?php
	
	$dsn = 'mysql:dbname=tt_644_99sv_coco_com;host=localhost';
	$user = 'tt-644.99sv-coco.com';
	$password = 'N3bJKiHW';
	$pdo = new PDO($dsn,$user,$password,array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING));
	
	//データの挿入
	$sql = $pdo->prepare("INSERT INTO tbtest(id,name,comment)VALUES('2',:name,:comment)");
	$sql->bindParam(':name',$name,PDO::PARAM_STR);
	$sql->bindParam(':comment',$comment,PDO::PARAM_STR);
	$name = '上田';
	$comment = '金欠';
	$sql->execute();
	
	?>
	
	</body>
</html>