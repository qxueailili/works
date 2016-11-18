<!DOCTYPE HTML>
<html lang="zh-CN">
<head>
<meta charset="UTF-8">
<title>学无止境-个人博客</title>
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
 ul li:hover{
      background-color: #f99;
    }
   .limit{
      list-style: none;
    }

    .limit li{
      cursor: pointer;
      float: left;
 ;
      
      width: 50px;
      height: 30px;

      text-align: center;
      line-height: 30px;
    }
    #so{
      font-size: 20px;
      color: blue;
      position: relative;
      left: 630px;
    }
    #so1{
      color: #00a38b;
    }
    dl dd a{
       text-decoration: none; 
       color: red;
    }
    #log{
      font-size: 15px;
      position: relative;
      right:10px;
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
      <li id="log"><a href="./res.html">注册</a></li>
      <li id="log"><a href="./login.html">登陆</a></li>
    
    <?php
    }
    ?> 

</ul>
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
            <a href="article.php" id="write"><span id="so">写文章</span></a>
             <hr/> <hr/>
           
            <?php
            if(isset($_GET['id'])){
                $id=$_GET['id'];
              }else if(isset($_COOKIE['user'])){
                $user=$_COOKIE['user'];
              }else{
                $user="游客";
              }

              date_default_timezone_set('prc');
              $time=date("Y-m-d H:i:s");
              if(isset($_POST['content'])){
                $content=$_POST['content'];
              }
              
              @$db = mysql_connect('localhost','root','');
              if(!$db){
                echo "网络繁忙";
              }
              mysql_query("set names utf-8");
              mysql_select_db('user');
             

            ?>
          
           <?php
           $pageCurrent = isset($_GET['page'])?$_GET['page']:1;

            @$db = mysql_connect("localhost","root","");
              if(!$db){
                echo "meiyoulianjieshujuku";
                }
              mysql_query("set names utf8");
              mysql_select_db("user");
              $li=($pageCurrent-1)*5;
              // $sql="select * from article order by id desc limit ".(($pageCurrent-1)*5).",5"; 
              $sql="select * from article order by id desc limit $li,5"; 

                           

              $result=mysql_query($sql);
              if($result){            
              while($rs = mysql_fetch_array($result)){             
             ?>
            <div class="wz">
            <h3><a href="#" ><?php echo $rs['title'] ?></a></h3>
             <dl>
               <dt><img src="images/7.jpg" width="200"  height="123" alt=""></dt>
               <dd>
               <p class="dd_text_1"><span id="so1">文章内容</span>:<br/><?php echo iconv_substr($rs['content'],0,10,"UTF-8") ?>.......</p>
                <p>浏览次数(<?php echo $rs['text_comment_num'] ?>) </p>
               <span class="left author">作者:&nbsp;<?php echo $rs['author'] ?>&nbsp;</span><span class="left sj">时间:&nbsp;<?php echo $rs['time'] ?>&nbsp;</span>
               <span class="left fl" id="so1">分类:&nbsp;&nbsp;<a href="#" title="学无止境">学无止境 &nbsp;</a></span><span class="left yd"><a href="./ydqw.php?id=<?php echo $rs['id'] ?>">阅读全文</a></span>
               <br/> 
               </dd>
               <div class="clear"></div>
             </dl>
            </div>

            <?php
          }
          }
           ?>
           <!-- =================分页=================== -->
         <?php  
         $sql="select * from article";
         $result=mysql_query($sql);
         $pages=ceil(mysql_num_rows($result)/5);
         $num = 1;
        ?>
          <ul class="limit">
              <li><a href="index.php?page=1">首页</a></li>
              <?php
                while($num<=$pages){

                  if($num == $pages){
                  
                   echo "<li class='active'><a href='learn.php?page=".$num."'>".$num."</a></li>";
                  }else{
                   echo "<li><a href='index.php?page=".$num."'>".$num."</a></li>"; 
                  }
                    $num++;
                } 
                  echo  "<li><a href='index.php?page=".$pages."'>尾页</a></li>"
              ?>
               </span>
                <div class="clear"></div>
               </p>
               </dd>
               <div class="clear"></div>
             </dl>
            </div>
           <!--wz end-->
            <!--wz-->
  
           </div>
         </div>
         <!--end left -->
         <!--right-->
          <div class="right" id="c_right">
          <div class="s_about">
          <h2>关于博主</h2>

          <?php 
            @$db = mysql_connect("localhost","root","");
              if(!$db){
                echo "meiyoulianjieshujuku";
                }
              mysql_query("set names utf8");
              mysql_select_db("user");
              $sql = "select * from member";
              $result=mysql_query($sql);
              if($arr=mysql_fetch_array($result)){
                // $arr['img'] = 
                ?>
                <img src="./upload/<?php echo $arr['img'] ?>" width="200" height="267" alt="博主"/>
            <?php
              }
           ?>
          <form action="uploadFile.php" method="post" enctype="multipart/form-data">
          <label for="file"></label>
          <input type="file" name="file" id="file" /> 
          <br />
          <input type="submit" name="submit" value="上传照片" />
          </form>

           <p>博主：大大大狐狸</p>
           <p>职业：web前端、视觉设计</p>
           <p>简介：</p>
           <p>
           <a href="#" title="联系博主"><span class="left b_1"></span></a><a href="#" title="加入QQ群，一起学习！"><span class="left b_2"></span></a>
           <div class="clear"></div>
           </p>
          </div>
          <!--栏目分类-->
           <div class="lanmubox">
              <div class="hd">
               <ul><li>精心推荐</li><li>最新文章</li><li class="hd_3">随机文章</li></ul>
              </div>
              <div class="bd">
                <ul>
					<li><a href="#" title="网站项目实战开发（-）">网站项目实战开发（-）</a></li>
					<li><a href="#" title="关于响应式布局">关于响应式布局</a></li>
					<li><a href="#" title="如何创建个人博客网站">如何创建个人博客网站</a></li>
					<li><a href="#" title="网站项目实战开发（二）">网站项目实战开发（二）</a></li>
					<li><a href="#" title="为什么新站前期排名老是浮动？(转)">为什么新站前期排名老是浮动？(转)</a></li>
				</ul>
                 <ul>
					<li><a href="#" title="网站项目实战开发（-）">网站项目实战开发（-）</a></li>
					<li><a href="#" title="关于响应式布局">关于响应式布局</a></li>
					<li><a href="#" title="如何创建个人博客网站">如何创建个人博客网站</a></li>
					<li><a href="#" title="网站项目实战开发（二）">网站项目实战开发（二）</a></li>
					<li><a href="#" title="为什么新站前期排名老是浮动？(转)">为什么新站前期排名老是浮动？(转)</a></li>
				</ul>
                 <ul>
					<li><a href="#" title="网站项目实战开发（-）">网站项目实战开发（-）</a></li>
					<li><a href="#" title="关于响应式布局">关于响应式布局</a></li>
					<li><a href="#" title="如何创建个人博客网站">如何创建个人博客网站</a></li>
					<li><a href="#" title="网站项目实战开发（二）">网站项目实战开发（二）</a></li>
					<li><a href="#" title="为什么新站前期排名老是浮动？(转)">为什么新站前期排名老是浮动？(转)</a></li>
				</ul>
                 
                
              </div>
           </div>
           <!--end-->
         </div>
         <!--end  right-->
         <div class="clear"></div>
         
    </div>
    <!--content end-->
    <!--footer-->
    <div id="footer">
     <p>Design by:少年 2014-8-9</p>
    </div>
    <!--footer end-->
    <script type="text/javascript">jQuery(".lanmubox").slide({easing:"easeOutBounce",delayTime:400});</script>
    <script  type="text/javascript" src="js/nav.js"></script>
</body>
</html>

