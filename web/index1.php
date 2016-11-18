<?php 
	// setcookie("user","",time()-3600);

	// header("location:./index.php");
	
	

	$file = "file.txt";
	$content = file_get_contents($file);
	$str = "abc";
	$content = $str.$content;
	file_put_contents($file, $content);
	sleep(3);

 ?>
