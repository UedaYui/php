<html>
	<head>
			<title>mission_1-6</title>
			<meta charset = "utf-8"> <! 文字化けしないように>
	</head>
	<body>
	
	<form method = "POST" action = "mission_1-6_ueda.txt'"> <! フォームを使用する場合の必須のタグ >
		<input type = "text" name= "komennto" value  = "コメント"> <! valueは無くても動く>
		<input type = "submit" value = "送信" >
		
		<?php
		$filename = 'misson_1-6_ueda.txt';
		$fp = fopen($filename,'a');
		if(!empty($_POST["komennto"])){
		fwite($fp,$_POST["komennto"]);}
		fclose($fp);
		?>
	</body>
</html>
		
		

	