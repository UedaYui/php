<html>
	<head>
			<title>mission_2-5</title>
			<meta charset = "utf-8"> 
	</head>
	<body>
	
		<form method = "POST" action = "mission_2-5-a.php"> <! フォームを使用する場合の必須のタグ >
		名前：<input type = "text" name = "name" value = "<?php echo $eddata[1];?>"> 
		<br/>
		コメント：<input type = "text" name = "komennto" value = "<?php echo $eddata[2];?>"><input type = "submit" value = "送信" >
		<br/>
		編集指定番号：<input type = "text " name = "editnumber" value = "<?php echo $eddata[0];?>">
		<br/>
		パスワード：<input type = "text" name = "password" value = "<?php echo $eddata[4];?>">
		<br/><br/>
		削除対象番号：<input type = "text" name ="sakujo"><input type = "submit" value = "削除">
		<br/>
		パスワード：<input type = "text" name = "delpassword">
		<br/> <br/></form>
		<form method = "POST" action = "mission_2-5-b.php"> 
		編集対象番号：<input type = "text " name = "edit"><input type = "submit" value = "編集">
		<br/>
		パスワード：<input type = "text" name = "edpassword">
		<br/> </form>

	
		<?php
		$filename = 'misson_2-5_ueda.txt';
		$fp = fopen($filename,'a+');
		$komennto = $_POST["komennto"];
		$name = $_POST["name"];
		$date = date("Y年m月d日 H:i:s");
		$password = $_POST["password"];
		
		if ( !empty($komennto)){	
		
		$count = 0;
		while (fgets($fp) !== false) {
			 $count++;
		}

		$next = $count + 1;// 次の投稿番号
		
		$matome = $next.'<>'.$name.'<>'.$komennto.'<>'.$date.'<>'$password;
		
		fwrite($fp, $matome."\n");
		}
		fclose($fp);
		?>

		<?php
		$sakujo = $_POST["sakujo"];
		$delpassword = $_POST["delpassword"];
		$delCon = file($filename);
				
		if (!empty($sakujo && $delpassword == $password)) {
		$fp = fopen($filename,'r+');
			ftruncate($fp,0); //2番目の引数のファイルサイズを0にして空にする
			fseek($fp, 0);
			fclose($fp);
		
		$fp = fopen($filename,'w+');
		foreach($delCon as $del){
		$deldata = explode('<>',$del);

			if($deldata[0] != $sakujo ){
			fwrite($fp,$del);
			}}                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      
			fclose($fp);
			
		}elseif($delpassword != $password){
			echo "パスワードが違います。";
			}
		?>

		<?php
		$edit = $_POST["edit"];
		$edCon= file($filename);
		
		if (!empty($edit)) {
			$fp = fopen($filename,'r');
			foreach($edCon as $ed){
			$eddata = explode('<>',$ed);
			
			if($eddata[0] == $edit){
				}}
			 fclose($fp);
			}
		?>
						
		<?php
		$editnumber = $_POST["editnumber"];
		if (!empty($editnumber) ) {
		$fp = fopen($filename,'a');
		if ($editnumber == $eddata[0]){
		fwrite($fp, $ed."\n");
		}
		fclose($fp);
		}elseif(empty($editnumber)){
			$fp = fopen($filename,'a');
		fwrite($fp, $matome."\n");
		}
		fclose($fp);
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