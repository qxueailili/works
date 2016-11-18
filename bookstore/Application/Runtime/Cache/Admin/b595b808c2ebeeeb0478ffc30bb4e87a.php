<?php if (!defined('THINK_PATH')) exit();?><!doctype html>

<html>
<head>
    <meta charset="UTF-8">
    <title>评论管理</title>
    <link rel="stylesheet" type="text/css" href="/bookstore/Public/Home/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/bookstore/Public/Home/css/main.css"/>
    <script type="text/javascript" src="/bookstore/Public/Home/JS/modernizr.min.js"></script>
    <style>
    .ul{
        margin: 50px 0 0 500px;
    }
        .ul li{
            float: left;
            margin-left: 5px;
        }
    </style>
</head>
<body>
    
<div class="topbar-wrap white">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">管理员中心</a></h1>
        </div>
    </div>
</div>
<div class="container clearfix">
    <div class="sidebar-wrap">
        <div class="sidebar-title">
            <h1>菜单</h1>
        </div>
        <div class="sidebar-content">
            <ul class="sidebar-list">
                <li>
                    <a href="#"><i class="icon-font">&#xe003;</i>常用操作</a>
                    <ul class="sub-menu">
                        <li><a href=""><i class="icon-font">&#xe008;</i>用户管理</a></li>
                        <li><a href=""><i class="icon-font">&#xe005;</i>产品管理</a></li>
                        <li><a href=""><i class="icon-font">&#xe006;</i>评论管理</a></li>
                    </ul>
                </li>
               
            </ul>
        </div>
    </div>
    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="index.html" color="#white">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">订单查询</span></div>
        </div>
        <div class="search-wrap">
            <div class="search-content">
                <form action="#" method="post">
                    <table class="search-tab">
                        <tr>
                            <th width="120">选择分类:</th>
                            <td>
                                <select name="search-sort" id="">
                                    <option value="">全部</option>
                                    <option value="19">用户管理</option>
                                     <option value="20">文章管理</option>
                                    <option value="21">评论管理</option>
                                </select>
                            </td>
                            <th width="70">关键字:</th>
                            <td><input class="common-text" placeholder="关键字" name="keywords" value="" id="" type="text"></td>
                            <td><input class="btn btn-primary btn2" name="sub" value="查询" type="submit"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        <div class="result-wrap">
            <form name="myform" id="myform" method="post">
                <div class="result-title">
                    <div class="result-list">
                        <a id="batchDel" href="javascript:void(0)"><i class="icon-font"></i>批量删除</a>
                        <a id="updateOrd" href="javascript:void(0)"><i class="icon-font"></i>更新排序</a>
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th class="tc" width="5%"></th>
                            <th>用户ID</th>
                            <th width="20%">用户昵称</th>
                            <th>评论作者</th>
                            <th>评论时间</th>
                            <th>文章ID</th>
                            <th>操作</th>
                        </tr>
                       
                        <tr>
                            <td class="tc"><input name="id[]" value="" type="checkbox"></td>
                            <td>
                           
                            </td> <!--输出评论ID-->
                            <td><a target="_blank" href="">
                                
                            </a>
                            </td> <!--输出评论内容-->
                            <td>
                                
                             </td> <!--输出评论作者-->
                            <td>
                                
                            </td> <!--输出评论时间-->
                            <td>
                                
                            </td> <!--输出文章ID-->
                            <td>
                                <form action="" method="get">
                                <a href="discuss.php?id=<?php echo $row["id"] ?>">
                                    <input type="button" value="删除">
                                </a>
                                </form>
                            </td>
                        </tr>
                        
                        </tr> 
                    </table>
                    <ul class="ul">
                         <li><a href="article.php?page=1">首页</a></li>
                            
                    </ul>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>