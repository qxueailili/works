<!-- header.php -->
<!DOCTYPE HTML>
<html lang="zh-CN">
<head>
<meta charset="UTF-8">
<title>个人博客</title>
<meta name="keywords" content="个人博客" />
<meta name="description" content="" />
<link rel="stylesheet" href="css/index.css"/>
<link rel="stylesheet" href="css/style.css"/>
<script type="text/javascript" src="js/jquery1.42.min.js"></script>
<script type="text/javascript" src="js/jquery.SuperSlide.2.1.1.js"></script>
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<![endif]-->
</head>
<style type="text/css"> 
    #log{font-size: 15px;float:right;margin-right:5px;
      position: relative;
      right: 170px;
      top: 40px;
      border-radius: 5px;
    }
    #log:first-child{
        font-size: 13px;
        color: red;
        border: 2px solid #ccc;
        border-radius: 5px;
    }
    ul li:hover{
      background-color: #f99;
    }
    #write{
      font-size: 20px;
      color:  red;
      /*display: block;*/
      position: relative;
      left: 650px;
    }
     span{
      color: red;
    }
    .h3{
      margin-left: 10px;
    }
    .il{
      margin-left: 600px;
    }
    .p1{
      margin-left: 5px;
      font-size: 17px;
      color: purple;
    }
</style>
<body>
  <ul>
    <?php
      if(isset($_COOKIE["user"])){
    ?>
      <li id="log"><a href="./index.php">设置您的资料</a></li>
      <li id="log"><a href="./index1.php">注销</a></li>
      <li id="log"><?php echo $_COOKIE["user"] ?></li>
    <?php 
      }elseif(isset($_GET["user"])){
      ?> 
      <li id="log"><a href="./index.php">设置您的资料</a></li>
      <li id="log"><a href="./index1.php">注销</a></li>
      <li id="log"><?php echo $_GET["user"] ?></li>
     <?php
    }else{
    ?> 
      <li id="log"><a href="./res.php">注册</a></li>
      <li id="log"><a href="./login.php">登陆</a></li>
    
    <?php
    }
    ?> 

</ul>
    <!--header start-->
    <div id="header">
      <h1>个人博客</h1>
      <p>青春是打开了,就合不上的书。人生是踏上了，就回不了头的路，爱情是扔出了，就收不回的赌注。</p>    
    </div>
     <!--header end-->
    <!--nav-->
     <div id="nav">
        <ul>
         <li><a href="index.php">首页</a></li>
         <li><a href="about.php">关于我</a></li>
         <li><a href="shuo.php">碎言碎语</a></li>
         <li><a href="riji.php">个人日记</a></li>
         <li><a href="xc.php">相册展示</a></li>
         <li><a href="learn.php">学无止境</a></li>
         <li><a href="guestbook.php">留言板</a></li>
         <div class="clear"></div>
        </ul>
      </div>
       <!--nav end-->
    <!--content start-->
    <div id="content">
         <!--left-->
         <div class="left" id="c_left">
           <div class="s_tuijian">
           <h2>文章<span>推荐</span></h2>
           </div>
          <div class="content_text">
            <a href="article.php" id="write">写文章</a>
             <hr/> <hr/>
