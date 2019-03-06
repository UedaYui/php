<html>
	<head>
			<title>mission_2-4</title>
			<meta charset = "utf-8"> <! 文字化けしないように>
	</head>
	<body>
	
		<form method = "POST" action = "mission_2-4.php"> <! フォームを使用する場合の必須のタグ >
		名前：<input type = "text" name = "komennto" > <! valueは無くても動く>
		<br/>
		コメント：<input type = "text" name = "name" ><input type = "submit" value = "送信" >
		<br/><br/>
		削除対象番号：<input type = "text" name ="sakujo"><input type = "submit" value = "削除">
		<br/>
		編集対象番：<input type = "text " name = "edit"><input type = "submit" value = "編集">
		<br/>

		<?php
		$filename = 'misson_2-1_ueda.txt';
		$fp = fopen($filename,'a+');
		$komennto = $_POST["komennto"];
		$name = $_POST["name"];
		$date = date("Y年m月d日 H:i:s");
		
		if ( !empty($komennto)){	
		
		$count = 0;
		while (fgets($fp) !== false) {
			 $count++;
		}

		$next = $count + 1;// 次の投稿番号
		
		$matome = $next.'<>'.$name.'<>'.$komennto.'<>'.$date;
		
		fwrite($fp, $matome."\n");
		}
		fclose($fp);
		?>
		
		<?php
		$sakujo = $_POST["sakujo"];
		if (!empty($sakujo)) {
			$nakami= file($filename);
			
		$fp = fopen($filename,'a');
		
		//2番目の引数のファイルサイズを0にして空にする
		ftruncate($fp,0); 
		fseek($fp, 0);
		
		foreach($nakami as $hyouji){
		$data = explode('<>',$hyouji);
	
		if(!$data[0] = $sakujo){
		fwrite($fp,$hyoiji."\n");
		}
			
		}				                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       
		fclose($fp);
		}
		?>
		
		<?php
		$edfilename =  'misson_2-edit.ueda.txt';
		$edit = $_POST["edit"];
		if (!empty($edit)) {
			$nakami= file($edfilename);
			$fp = fopen($adfilename,'r');
			foreach($nakami as $hyouji){
			$data = explode('<>',$hyouji);
			
			if($data[0] == $edit){
			 $editname = $data[1]
			 $editcomennto = $date[2];
		?>
		
		<?php
  		$nakami = file($filename);
 		foreach($nakami as $hyouji){
 			$data = explode('<>',$hyouji);
 			echo "<br/>";
 			echo $data[0];//$next
 			echo $data[1];//$name
 			echo $data[2];//$komennto
 			echo $data[3];//$date
 			}
		?>


		</body>
	</html>