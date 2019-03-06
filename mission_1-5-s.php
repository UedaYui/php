<html>
	<head>
			<title>mission_1-5-s</title>
			<meta charset = "utf-8"> <! 文字化けしないように>
	</head>
	<body>
		<?php
		$komennto = $_POST["komennto"];
		$date = date("Y年m月d日 H時i分s秒");
		
		if ($_POST["komennto"] == "完成！") {
        echo "おめでとう！";
   		}
   		elseif(!empty($_POST["komennto"])){
   		echo"ご入力ありがとうございます。<br>".$date."に".$komennto."を受け付けました。";
   		?>
   		<?php
		$filename = "mission_1-5_ueda.txt";
		$fp = fopen($filename,'a');
		if(!empty($_POST["komennto"])){
		fwrite($fp,$_POST["komennto"]);
		}
		fclose($fp);
		?>
	</body>
</html>