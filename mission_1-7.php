<html>
	<head>
			<title>mission_1-7</title>
			<meta charset = "utf-8"> <! 文字化けしないように>
	</head>
	<body>
	
	<form method = "POST" action = "mission_1-7.php"> <! フォームを使用する場合の必須のタグ >
		<input type = "text" name= "komennto" value  = "コメント"> <! valueは無くても動く>
		<input type = "submit" value = "送信" >
	
		<?php
		
		$komennto = $_POST["komennto"];
		$date = date("Y年m月d日 H時i分s秒");
		
		if ($_POST["komennto"] == "完成！") {
        echo "<br>おめでとう！";
   		}
   		elseif(!empty($_POST["komennto"])){
   		echo"<br>ご入力ありがとうございます。<br>".$date."に".$komennto."を受け付けました。";
   		}
   		?>
	</body>
</html>

		<?php
		$filename = 'misson_1-7_ueda.txt';
		$fp = fopen($filename,'a');
		if(!empty($_POST["komennto"])){
		fwrite($fp,$_POST["komennto\n"]);
		}
		fclose($fp);
		?>
