<html>
	<head>
		<title>mission1-3</title>
	</head>
	<body>
	<?php
	$filename = 'mission_1-2.txt'; //ファイルを変数に格納
	$content = file_get_contents($filename); //ファイルを読み込み変数に格納
	echo $content; //ファイルの中身を出力
		?>
	</body>
</html>