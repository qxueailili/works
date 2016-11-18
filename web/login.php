<?php
	 if(isset($_POST["user"]) && isset($_POST["password"])){
			$user = $_POST["user"];
			$password = $_POST["password"];


			@$db=mysql_connect("localhost","root","");
			if(!$db){
				echo "error";
			}
			mysql_query("set names utf8");
			mysql_select_db("user");
			
			$sql = "select password from member where username ='$user'";
			$result = mysql_query($sql);

			if(mysql_num_rows($result)){
				if($arr = mysql_fetch_array($result)){
					if($arr["password"]==md5($password)){
						setcookie("user",$user,time()+3600);
						// header("location:index.php");
						
							echo "0";
						}else{
							echo "1";
					}	
				}
			}else{
							echo "2";	    		
		} 
	}
?>