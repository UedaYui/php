<html>
	<head>
			<title>mission_2-2</title>
			<meta charset = "utf-8"> <! 文字化けしないように>
	</head>
	<body>
	
	<form method = "POST" action = "mission_2-2.php"> <! フォームを使用する場合の必須のタグ >
		<p>コメント：<input type = "text" name= "komennto" value = "コメント"> <! valueは無くても動く></p>
		<p>名前：<input type =  "text" name= "name" value = "名前"></p>
		<input type = "submit" value = "送信" >
	
		<?php
		
		$filename = 'misson_2-2_ueda.txt';
		$fp = fopen($filename,'w');
		
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
		</body>
	</html>