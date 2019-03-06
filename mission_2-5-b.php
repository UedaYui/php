<html>
	<head>
			<title>mission_2-5-b</title>
			<meta charset = "utf-8"> 
	</head>
	<body>
	
		<?php
		$filename = 'mission_2-5_ueda.txt';
		$komennto = $_POST["komennto"];
		$name = $_POST["name"];
		$date = date("Y年m月d日 H:i:s");
		$editnumber = $_POST["editnumber"];
		$password = $_POST["password"];
		?>
		
		<?php
		$sakujo = $_POST["sakujo"];
		$delpassword = $_POST["delpassword"];
		$delCon = file($filename);
				
		if (!empty($sakujo) && $delpassword == $password) {
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
			
		}elseif(!empty($sakujo) && $delpassword != $password){
			echo "パスワードが違います。";
			}
		?>

		
		<?php
		$edit = $_POST["edit"];
		$edpassword = $_POST["edpassword"];
		$edCon= file($filename);
		
		if (!empty($edit) && $edpassword == $password) {
			$fp = fopen($filename,'r');
			foreach($edCon as $ed){
			$eddata = explode('<>',$ed);
			
			if($eddata[0] == $edit){
				$edname = "$eddata[1]";
				$edkomennto = "$eddata[2]";
				$ednumber = "$eddata[0]";
				$editpassword = "$eddata[5]";
				}}
			 fclose($fp);
			}elseif(!empty($edit) && $edpassword != $password){
			echo "パスワードが違います。";
			}
		?>
				
		<form method = "POST" action = "mission_2-5-b.php"> <! フォームを使用する場合の必須のタグ >
		名前：<input type = "text" name = "name" value = "<?php echo $edname;?>"> 
		<br/>
		コメント：<input type = "text" name = "komennto" value = "<?php echo $edkomennto;?>">
		<input type = "hidden" name = "editnumber" value = "<?php echo $ednumber;?>">
		<br/>
		パスワード：<input type = "text" name = "eddpassword" value = "<?php echo $editpassword;?>"><input type = "submit" value = "送信" >
		<br/><br/>
		削除対象番号：<input type = "text" name ="sakujo">
		<br/>
		パスワード：<input type = "text" name = "delpassword"><input type = "submit" value = "削除">
		<br/> <br/>
		編集対象番号：<input type = "text " name = "edit">
		<br/>
		パスワード：<input type = "text" name = "edpassword"><input type = "submit" value = "編集">
		<br/> </form>
		
		<?php
		$editnumber = $_POST["editnumber"];
		if (!empty($editnumber) ) {
		$editCon = file($filename);
		$fp = fopen($filename,'w+');
		foreach($editCon as $hennsyuu){
			$editdata = explode('<>',$hennsyuu);
		if ($editnumber == $editdata[0]){
			$hairetsu = $editdata[0].'<>'.$name.'<>'.$komennto.'<>'.$date;
			fwrite($fp, $hairetsu);
		}else{fwrite($fp, $hennsyuu);}
		}fwrite($fp, $hennsyuu);
		fclose($fp);
		}elseif ( !empty($komennto) && empty($editnumber)){	
		$fp = fopen($filename,'a+');
		$count = 0;
		while (fgets($fp) !== false) {
			 $count++;
		}

		$next = $count + 1;// 次の投稿番号
		
		$matome = $next.'<>'.$name.'<>'.$komennto.'<>'.$date.'<>'.$password;
		
		fwrite($fp, $matome."\n");
		fclose($fp);
		}
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