<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<style>
	body{
		background:url(./images/0.jpg);
		background-size:100%;
	}
	form{
		/*text-align: center;*/
	/*	margin: 50px 350px;*/
	}
	#text{
		background:url(./images/1.jpg) no-repeat;
		width: 730px;
		height: 500px;
	}
	#tj{
		font-size: 30px;
		color:purple;
		cursor: pointer;
		position: relative;
		left: 650px;
	}
	span{
		font-size: 20px;
		color: blue;
		font-family: "微软雅黑";
	}
	textarea{
		font-size: 17px;
		color: green;
	}
	#sp{
		height: 25px;
	}
	#footer{
		width: 500px;
	}
</style>
<body>
	<?php include 'header.php' ;?>
	<?php 
	if (!$_COOKIE["user"]) {
		header("Location:riji.php");
	}
	if(isset($_GET["id"])){
		$id = $_GET["id"];

		@$db = mysqli_connect("127.0.0.1", "root", "", "user");
		if(!$db){
			echo mysqli_error();
		}
		mysqli_query($db, "set names utf8");

		$sql = "select * from article where id = $id";
		$result = mysqli_query($db, $sql);
		if($result){
			$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
			$title = $row["title"];
			$content = $row["content"];
		}
	}

	$updateArc = false;
	if(isset($_POST["hid"]) && isset($_POST["title"]) && isset($_POST["content"])){
		@$db = mysqli_connect("127.0.0.1", "root", "", "user");
		if(!$db){
			echo mysqli_error();
		}
		mysqli_query($db, "set names utf8");

		$hid = $_POST["hid"];
		$title = $_POST["title"];
		$content = $_POST["content"];

		$sql = "update article set title='$title', content='$content' where id='$hid'";
		if(!mysqli_query($db, $sql)){
			$updateArc = true;
		}
	}

	mysqli_close($db);
 ?>
<form action="edit.php" method="post" >
		<h1>
			<?php  
				if($updateArc){
					echo "修改成功";					
				}
			?>
		</h1>
		<input type="hidden" name="hid" value='<?php echo $id ?>' >
		<span>文章标题</span>:<input id="sp" type="text"  name="title" value='<?php echo $title ?>'><br/>
		<span>文章内容</span>:<textarea id="text" name="content"><?php echo $content ?></textarea><br/>
		<p><input id="tj" type="submit" name="sub" 	value="提交"></p>
	</form>
	<div id="footer">
     <p>Design by:<a href="http://www.baidu.com" target="_blank"><span>追风少年</span></a> 2016-10-1</p>
    </div>
    <!--footer end-->
</body>
</html>