<?php

if(isset($_POST["user"]) && isset($_POST["password"]) && isset($_POST["repassword"])){
		$user = $_POST["user"];
		// echo $user;
		// die();

		$password = $_POST["password"];
		$repassword = $_POST["repassword"];
		// echo $password.$repassword;
		if($password != $repassword){
			echo "0";
		}else{
			if($user != "" && $password != ""){
				@$db = mysql_connect("localhost","root","");
				if(!$db){
					echo "没有连接数据库";
				}
				mysql_query("set names utf8");
				mysql_select_db("user");
				$sql = "select username from member where username = '$user'"; 
				// echo $sql;
		 		$rs = mysql_query($sql);
		 		
		 		if($rs){

		 			if(mysql_fetch_array($rs)){
		 				echo "1";
		 			}else{
		 				$password = md5($_POST["password"]);
		 				// echo "insert into member(username,password) values ('$user', '$password')";
		 				mysql_query("insert into member(username,password) values ('$user', '$password')");
		 				echo "2";
		 				//header("location:index.php");
		 			}
		 			
		 		}	
			}
		}	
	}

?>