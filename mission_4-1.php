<html>
	<head>
			<title>mission_4-1</title>
			<meta charset = "utf-8"> 
	</head>
	<body>
	
		<form method = "POST" action = "mission_4-1.php"> <! フォームを使用する場合の必須のタグ >
		名前：<input type = "text" name = "name" value = "<?php echo $edname;?>"> 
		<br/>
		コメント：<input type = "text" name = "comment" value = "<?php echo $edkomennto;?>">
		<input type = "hidden" name = "editnumber" value = "<?php echo $ednumber;?>">
		<br/>
		パスワード：<input type = "text" name = "eddpassword" value = "<?php echo $editpassword;?>"><input type = "submit" value = "送信" >
		<br/><br/>
		削除対象番号：<input type = "text" name ="delete">
		<br/>
		パスワード：<input type = "text" name = "delpassword"><input type = "submit" value = "削除">
		<br/> <br/>
		編集対象番号：<input type = "text " name = "edit">
		<br/>
		パスワード：<input type = "text" name = "edpassword"><input type = "submit" value = "編集">
		<br/> </form>
		

	
	<?php
	
	//データベースへの接続
	$dsn = 'mysql:dbname=tt_644_99sv_coco_com;host=localhost';
	$user = 'tt-644.99sv-coco.com';
	$password = 'N3bJKiHW';
	$pdo = new PDO($dsn,$user,$password,array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING));
	
	//テーブルを作成
	$sql = "CREATE TABLE IF NOT EXISTS mission4"
	."("
	."id INT,"
	."name char(32),"
	."comment TEXT,"
	."date TEXT,"
	."password TEXT"
	.");";
	$stmt = $pdo->query($sql);
	
	
	$name = $_POST["name"];
	$comment = $_POST["comment"];
	$date = date("Y年m月d日 H:i:s");
	$password = $_POST["password"];
	$delete = $_POST["delete"];
	$delpassword = $_POST["delpassword"];
	$edit = $_POST["edit"];
	$edpassword = $_POST["edpassword"];
	$editnumber = $_POST["editnumber"];

		//データの挿入=追加
		
		$pdo->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
                        $sql='SELECT * FROM mission4';
                        $stmt=$pdo->query($sql);
                        $stmt->execute();
                        $count=$stmt->rowCount();
						$count=$count+1
	

	if ( !empty($name) && !empty($comment) && empty($editnumber)){
	$sql = $pdo->prepare("INSERT INTO mission4(id,name,comment,date,password)VALUES('1',:name,:comment,:date,:password)");
	$sql->bindParam(':name',$name,PDO::PARAM_STR);
	$sql->bindParam(':comment',$comment,PDO::PARAM_STR);
	$sql->bindParam(':date',$date,PDO::PARAM_STR);
	$sql->bindParam(':password',$password,PDO::PARAM_STR);
	$sql->execute();}
	
	
	//データの更新=編集
	if (!empty($edit) && $edpassword == $password) {
	$results = $stmt->fetchAll();
	$sql = 'update mission4 set name=:name,comment=:comment date=:date,password=:password,where id=:id';
	$stmt->bindParam(':id',$id,PDO::PARAM_INT);
	$stmt->bindParam(':name',$name,PDO::PARAM_STR);
	$stmt->bindParam(':comment',$comment,PDO::PARAM_STR);
	$stmt->bindParam(':date',$date,PDO::PARAM_STR);
	$stmt->bindParam(':password',$password,PDO::PARAM_STR);
	$stmt->execute();
	}elseif(!empty($edit) && $edpassword != $password){
			echo "パスワードが違います。";
			}


//データの削除
	if (!empty($delete) && $delpassword == $password) {
	$sql = 'delete from mission4 where id=:id';
	$id = "$delete";
	$deletedata = $pdo->prepare($sql);
	$deletedata ->bindParam(':id',$id,PDO::PARAM_INT);
	$deletedata  -> execute();
	}elseif(!empty($delete) && $delpassword != $password){
			echo "パスワードが違います。";
			}

	
			
	//データの表示
	$sql = 'SELECT * FROM mission4';
	$stmt = $pdo->query($sql);
	$results = $stmt->fetchAll();
	foreach ($results as $row){
		echo $row['id'].',';
		echo $row['name'].',';
		echo $row['comment'].',';
		echo $row['date'].',';
		echo $row['password'].'<br>';
		}

	?>
					
				</body>
</html>