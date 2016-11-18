<?php 

	$page=isset($_GET['page']) ? $_GET['page']:1;
	$pagesize = 2;
	//获取当前页
	//$page 
	//计算偏移量
	$offset = ($page-1)*$pagesize;
?>


<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<ul>
		<li>标题</li>
	</ul>
	<a href="page.php?page=1">首页</a>
	<a href="">上一页</a>
	<a href="">下一页</a>
	<a href="">末页</a>
</body>
</html>