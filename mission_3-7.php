<html>
	<head>
			<title>mission_3-7</title>
			<meta charset = "utf-8"> 
	</head>
	<body>
	
	<?php
	
	$dsn = 'mysql:dbname=tt_644_99sv_coco_com;host=localhost';
	$user = 'tt-644.99sv-coco.com';
	$password = 'N3bJKiHW';
	$pdo = new PDO($dsn,$user,$password,array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING));
	
	//データの更新
	$id = 1;
	$name = "ゆい";
	$comment = "単位落としたくない";
	$sql = 'update tbtest set name=:name,comment=:comment where id=:id';
	$stmt = $pdo->prepare($sql);
	$stmt->bindParam(':name',$name,PDO::PARAM_STR);
	$stmt->bindParam(':comment',$comment,PDO::PARAM_STR);
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