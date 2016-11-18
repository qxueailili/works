<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../Css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="../Css/bootstrap-responsive.css" />
    <link rel="stylesheet" type="text/css" href="../Css/style.css" />
    <script type="text/javascript" src="../Js/jquery.js"></script>
    <script type="text/javascript" src="../Js/jquery.sorted.js"></script>
    <script type="text/javascript" src="../Js/bootstrap.js"></script>
    <script type="text/javascript" src="../Js/ckform.js"></script>
    <script type="text/javascript" src="../Js/common.js"></script>
    <style type="text/css">
        body {
            padding-bottom: 40px;
        }
        .sidebar-nav {
            padding: 9px 0;
        }
        @media (max-width: 980px) {
            /* Enable use of floated navbar text */
            .navbar-text.pull-right {
                float: none;
                padding-left: 5px;
                padding-right: 5px;
            }
        }
        .limit{
      list-style: none;
    }
    .limit li{
      cursor: pointer;
      float: left;
      
      width: 50px;
      height: 30px;

      text-align: center;
      line-height: 30px;
    }
ul li:hover{
      background-color: #f99;
    }
    </style>
</head>
<body>
<form class="form-inline definewidth m20" action="index.html" method="get">    
    用户名称：
    <input type="text" name="username" id="username"class="abc input-default" placeholder="" value="">&nbsp;&nbsp;  
    <button type="submit" class="btn btn-primary">查询</button>&nbsp;&nbsp; <button type="button" class="btn btn-success" id="addnew">新增用户</button>
</form>
<table class="table table-bordered table-hover definewidth m10">
    <thead>

    <tr>
        <th>用户id</th>
        <th>用户名称</th>
        <th>管理</th>
        <th>操作</th>
    </tr>
    </thead>
        <?php 
          @$db = mysql_connect("localhost","root","");
              if(!$db){
                echo "meiyoulianjieshujuku";
                }
                mysql_query("set names utf8");
                mysql_select_db("user");

            if(isset($_GET['shutup'])){
              $i=$_GET['idd'];
              $shutup=$_GET['shutup'];

              $sql="select * from member where username='$i'";
              $result=mysql_query($sql);

            if($result){
              while($arr=mysql_fetch_array($result)){
                  $arr['username']==$i;
                  if($shutup==0){
                    $cha="update member set shut=1 where username = '$i'";
                    mysql_query($cha);
                  }else{
                    $cha="update member set shut=0 where username = '$i'";
                    mysql_query($cha);
                    }         
                  }
                }
              }
           $sql = "select * from member";
            $result=mysql_query($sql);
            if ($result) {
                while($rs = mysql_fetch_array($result)){
                  $shutup = $rs['shut'];
                  $username = $rs['username'];
               ?>
	     <tr>
            <td><?php echo $rs['id'] ?></td>
            <td><?php echo $rs['username'] ?></td>
            <td><?php  
                   if($shutup==0){
                      echo "<a href=index.php?idd=".$username."&shutup=".$shutup.">".'禁言'."</a>";
                      }else{
                       echo "<a href=index.php?idd=".$username."&shutup=".$shutup.">".'解除禁言'."</a>";
                    }
             ?>                                                               
            </td>

            <td>
                <a href="del.php?del=<?php echo $rs['id'] ?>">删除</a>
                                
            </td>
        </tr>
        <?php
                    
                }
            }
     ?>	
</table>
 <?php 
       
         $sql="select * from member";
         $result=mysql_query($sql);
         $pages=ceil(mysql_num_rows($result)/5);
         $num = 1;
        ?>
          <ul class="limit">
              <li><a href="index.php?page=1">首页</a></li>
              <?php
                while($num<=$pages){

                  if($num == $pages){
                  
                   echo "<li class='active'><a href='index.php?page=".$num."'>".$num."</a></li>";
                  }else{
                   echo "<li><a href='index.php?page=".$num."'>".$num."</a></li>"; 
                  }
                    $num++;
                } 
                  echo  "<li><a href='index.php?page=".$pages."'>尾页</a></li>"
        ?>

</body>
</html>
<script>
    $(function () {
        

		$('#addnew').click(function(){

				window.location.href="add.html";
		 });


    });

	function del(id)
	{
		
		
		if(confirm("确定要删除吗？"))
		{
		
			var url = "index.html";
			
			window.location.href=url;		
		
		}
	
	
	
	
	}
</script>