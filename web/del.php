<?php 
 
  @$db = mysql_connect("localhost","root","");
      if(!$db){
        echo "meiyoulianjieshujuku";
        }
      mysql_query("set names utf8");
      mysql_select_db("user");
    if (!$_COOKIE["user"]) {
    header("Location:riji.php");
  
    }else if(!empty($_GET['del'])){
    	$d=$_GET['del'];
    	$sql = "delete from article where id='$d'";
    	mysql_query($sql);
    	echo "删除成功";
    	header("location:index.php");
    }
 ?>