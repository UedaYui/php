<html>
	<head>
			<title>mission_1-4-s</title>
			<meta charset = "utf-8"> <! 文字化けしないように>
	</head>
	<body>
	
		<?php
		$name = $_POST[komennto];
		echo  "ご入力ありがとうございます。<br>"."date("Y年m月d日 H時i分s秒")に.$_POST["komennto"].を受け付けました。"; //入力フォームから送信された文字をphpで受け取る
		?>
	
	</body>
</html>