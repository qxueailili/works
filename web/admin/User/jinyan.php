<?php 
      $db = mysql_connect("localhost","root","");
      if(!$db){
        echo "error";
      }
      mysql_query("set names utf8");
      mysql_select_db("user");

      $sql="select * from member";
      $result=mysql_query($sql);
     while( $row=mysql_fetch_array($result)){

      $r=$row['shut'];
      $us=$row['username'];
      ?>              
       <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['username'] ?></td>
            <td>
              <a href="jinyan.php">禁言</a>
            </td>

            <td>
                <a href="del.php?del=<?php echo $rs['id'] ?>">删除</a>
                                
            </td>
        </tr>
        <?php
            }
     ?> 
  <?php
      if($r==0){
          echo "<a href=jinyan.php?idd=".$us."&shutup=".$r.">".'禁言'."</a>";
      }else{
          echo "<a href=jinyan.php?idd=".$us."&shutup=".$r.">".'解除禁言'."</a>";
      }
?>
<?php 
    if(isset($_GET['shut'])){
      $i=$_GET['idd'];
      $shutup=$_GET['shutup'];
      $sql="select username from member where username=$i";
      $result=mysql_query($p);
      while($arr=mysql_fetch_array($result)){
          if($arr['username']==$i){
            if ($shutup==1){
                $del="update member set shutup==0 where username='$i'";
                mysql_query($del);
            }else{
                $del="update member set shutup==1 where username='$i'";
                mysql_query($del);
            }
          }
      }
    }
?>

