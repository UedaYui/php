<html>
	<head>
			<title>mission_3-8</title>
			<meta charset = "utf-8"> 
	</head>
	<body>
	
	<?php
	
	$dsn = 'mysql:dbname=tt_644_99sv_coco_com;host=localhost';
	$user = 'tt-644.99sv-coco.com';
	$password = 'N3bJKiHW';
	$pdo = new PDO($dsn,$user,$password,array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING));
	
	//データの削除
	$id = 2;
	$sql = 'delete from tbtest where id=:id';
	$stmt = $pdo->prepare($sql);
	$stmt->bindParam(':id',$id,PDO::PARAM_INT);
	$stmt->execute();
	
	$sql = 'SELECT * FROM tbtest';
	$stmt = $pdo->query($sql);
	$results = $stmt->fetchAll();
	foreach ($results as $row){
		echo $row['id'].',';
		echo $row['name'].',';
		echo $row['comment'].'<br>';
	}

	?>
	
	</body>
</html>