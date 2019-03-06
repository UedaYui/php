<html>
	<head>
			<title>mission_2-3</title>
			<meta charset = "utf-8"> <! 文字化けしないように>
	</head>
	<body>
	
	<form method = "POST" action = "mission_2-3.php"> <! フォームを使用する場合の必須のタグ >
		<input type = "text" name = "komennto" value = "コメント"> <! valueは無くても動く><input type = "submit" value = "送信" >
		<input type = "text" name = "name" value = "名前">
		<br/>
		<input type = "text" name ="sakujo"><input type = "submit" value = "削除">
		
	
		<?php
		
		$filename = 'misson_2-3_ueda.txt';
		$fp = fopen($filename,'a+');
		
		$komennto = $_POST["komennto"];
		$name = $_POST["name"];
		$date = date("Y年m月d日 H:i:s");
		
		$count = 0;
		while (fgets($fp) !== false) {
			 $count++;
		}

		$next = $count + 1;// 次の投稿番号
							
		fwrite($fp, $next.'<>'.$name.'<>'.$komennto.'<>'.$date."\n");
		fclose($fp);
		
		?>
		
		<?php
				
  		$nakami = file($filename);
 		foreach($nakami as $hyouji){
 			$data = explode('<>',$hyouji);
 			echo "<br/>";
 			echo $data[0];//$next
 			echo $data[1];//name
 			echo $data[2];//komennto
 			echo $data[3];//$date
 			}
	
		?>
		</body>
	</html>