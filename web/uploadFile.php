<?php

	 if($_FILES["file"]["error"]==0){
		if($_FILES["file"]["type"]=="image/jpeg"){
			if(!file_exists("./upload/".$_FILES["file"]["name"])){
				if(move_uploaded_file($_FILES["file"]["tmp_name"], "./upload/".$_FILES["file"]["name"])){
		   			// echo "上传成功";
		   			$useImg = $_FILES['file']['name'];
            @$db = mysql_connect("localhost","root","");
              if(!$db){
                echo "meiyoulianjieshujuku";
                }
              mysql_query("set names utf8");
              mysql_select_db("user");
              // $username = $_COOKIE["user"];
 			  $sql="update member set img = '$useImg'";
 			  
 			  $result =mysql_query($sql);
 			  
 			  echo "上传成功";
 			  ?>
 			  <a href="./index.php">返回主页</a>;
 			  <?php
				}
			}else{ 
				echo "文件已经存在";
			?>
				<a href="./index.php">返回主页</a>
			<?php
			}
		}else{
			echo "文件格式错误";
		}
	}

?>