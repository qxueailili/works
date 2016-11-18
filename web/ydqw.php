
<?php include 'header.php'; ?>

<?php 
	if(isset($_GET['id'])){
		$id=$_GET['id'];
	// var_dump($id=$_GET['id']);
	
	@$db=mysql_connect("localhost","root","");
	if(!$db){
		echo "数据库未连接";
	}
	mysql_query("set names utf8");
	mysql_select_db("user");
	$sql = "select * from article where id ='$id'";
	$result=mysql_query($sql);

	if($result){
		while($arr=mysql_fetch_array($result)){
      $title=$arr["title"];
	?>
  <!-- 阅读全文 -->
	<div id="wenzhang">
		<ul>
			<h2 class="h3">标题:<?php echo $arr['title'] ?></h2><br>
			<p class="p1">文章内容:<?php echo $arr['content'] ?></p><br>
			<li class="il">时间:<?php echo $arr['time'] ?></li><br>
<!--    ==================================评论-====================         -->
<!--    ==================================评论-====================         -->
      <?php  
          }
    }     
       
          if(isset($_POST["content"])){
            $content=$_POST["content"];

            if(isset($_COOKIE['user'])){
                $user=$_COOKIE['user'];
             
                $comment =  "insert into comment(wz_id,name,wz_name,content,time) values ('$id','$user','$title','$content',now())";
                // echo $comment. "<br/>";
                mysql_query($comment);  
            }else{
                  $comment =  "insert into comment(wz_id,name,wz_name,content,time) values ('$id','游客','$title','$content',now())";
                  mysql_query($comment);
            }
          }
            $show1="select * from comment where wz_id = $id";
            $show2=mysql_query($show1);
            if($show2){
            while($show3=mysql_fetch_array($show2)){
              echo "&nbsp;".$show3['name']." ; ";
              echo "内容:".$show3['content']." ; ";
              echo "时间:".$show3['time']."<br/>";                  
           }
         }
?>
		</ul>
	</div>
	
	<?php

}
?>  
      <!-- -=======================阅读量===================-  -->
        <?php  
                  // @$db=mysql_connect("localhost","root","");
                  // if(!@db){
                  //   echo "error";
                  // }
                  // mysql_query("set names utf8");
                  // mysql_select_db("user");
                  $sql="select * from article where id =".$_GET['id'];

                  $result=mysql_query($sql);
                  $pp=mysql_fetch_array($result);
                  $add = $pp["text_comment_num"]+1;
                  $add_a ="update article set text_comment_num =$add where id=".$_GET['id'];
                  mysql_query($add_a);
                 
              ?>			           
      	<div>
           <form action="ydqw.php?id=<?php echo $id?>" method="post">
           	<textarea id="textarea" rows="5" cols="100" name="content"></textarea>
            <input type="submit" value="提交评论">
            </form>
        </div>