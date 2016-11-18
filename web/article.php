<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<style>
	body{background:url(./images/0.jpg);background-size:100%;}
	form{margin: 50px 350px;}
	#text{background:url(./images/1.jpg) no-repeat;width: 600px;height: 400px;}
	#tj{font-size: 20px;color:purple;cursor: pointer;position: relative;left: 550px;}
	span{font-size: 20px;color: blue;}
	textarea{font-size: 17px;}
</style>
<body>
	<?php
	 if (!$_COOKIE["user"]){
		header("Location:login.html");
	}
	@$db = mysql_connect("localhost","root","");
	if(!$db){
		echo "error";
	}

	mysql_query("set names utf8");
	mysql_select_db("user");
// $sql= "select title from article";	
	if(!empty($_POST['sub'])){
	$content=$_POST['content'];
	$title=$_POST['title'];
	$author=$_COOKIE['user'];

	$shutup = "select * from member where username = '$author'";
	$rs = mysql_query($shutup);
	while($arr=mysql_fetch_array($rs)){
		if ($arr['username']==$author && $arr['shut']==1){
			echo "<script>alert('您已经被禁言,请联系管理员');</script>";
		}else{
			$sql="insert into  article(title,author,time,content) values('$title','$author',now(),'$content')";
			$rs = mysql_query($sql);
			// echo "插入成功";
			header("location:index.php");	
			}
		}
	}
 ?>
	<form action="article.php" method="post" >
		<p><span>文章标题</span>：<input type="text" name="title"></p>
		<!-- <p><span>作&nbsp;&nbsp;者</span>：<input type="text" name="author"></p> -->
		<p><span>文章内容</span>：<br/><br/><textarea id="text" name="content" rows="20" cols="30"></textarea></p>
		<p><input id="tj" type="submit" name="sub" 	value="提交"></p>
	</form>
</body>
</html>















