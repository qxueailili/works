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
    /*  margin: 50px 350px;*/
    }
    #text{
        background:url(./images/1.jpg) no-repeat;
        width:450px;
        height: 300px;
    }
    #tj{
        font-size: 20px;
        color:purple;
        cursor: pointer;
        position: relative;
        left: 500px;
        top: -20px;
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
  
</style>
<body>
   <?php 
    
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

    $updateArc = 0;
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
        header("location:index.php");

        if(!mysqli_query($db, $sql)){
            $updateArc = 1;
        }
    }

    mysqli_close($db);
 ?>
    <form action="edit.php" method="post" >
        <input type="hidden" name="hid" value='<?php echo $id ?>' >
        <span>文章标题</span>:<input id="sp" type="text"  name="title" value='<?php echo $title ?>'><br/>
        <span>文章内容</span>:<textarea id="text" name="content"><?php echo $content ?></textarea><br/>
        <p><input id="tj" type="submit" name="sub"  value="提交"></p>
    </form>
</body>
</html>