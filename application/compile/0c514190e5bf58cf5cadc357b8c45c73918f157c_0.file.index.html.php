<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-28 07:54:11
  from 'D:\wamp64\www\shk\2006\server\mvc\application\template\demo\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f48b82307d946_06654344',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c514190e5bf58cf5cadc357b8c45c73918f157c' => 
    array (
      0 => 'D:\\wamp64\\www\\shk\\2006\\server\\mvc\\application\\template\\demo\\index.html',
      1 => 1598587635,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f48b82307d946_06654344 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        *{
            margin: 0;
            padding: 0;


        }
        .header{
            width: 100%;
            height: 200px;
            background-color: #00b262;
            position: relative;
        }

        .header h1{
            /*position:relative;*/
            /*width: 100%;*/
            padding-top: 20px;
            /*left: 50%;*/
            text-align: center;
            /*transform: translateX(-50%);*/
            /*float: left;*/
        }
        .loginifo{
            position: absolute;
            bottom: 0;
            right: 0;
            margin-right: 10%;
            margin-bottom:2% ;
        }
        .main{
            width: 100%;
            height: 400px;
            border: 1px solid   red ;
        }
        .left{
            width: 30%;
            height: 100%;
            border: 5px solid red;
            float: left;
            box-sizing: border-box;
        }
        .right{
            width: 70%;
            height: 100%;
            border: 5px solid red;
            float: left;
            box-sizing: border-box;
        }
        .bottom{
            width: 100%;
            min-height: 20px;
            text-align: center;
        }
        iframe{
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body>
<div class="header">

    <h1>欢迎来到xxx管理系统</h1>

    <div class="loginifo">
        <span><?php echo $_smarty_tpl->tpl_vars['uname']->value;?>
</span>
        <a href="/shk/2006/server/mvc/admin.php/admin/index/logout">退出系统</a>
    </div>

</div>
<div class="main">
    <div class="left"><ul>
        <li>用户管理</li>
        <ul class="son">
            <li>

            <a href="/shk/2006/server/mvc/admin.php/admin/index/add" target="main">添加用户</a>
            </li>
            <li>
                <a href="edit.html" target="main">修改用户</a>
                </li>
        </ul>
        <li>栏目管理</li>
        <ul class="son"><li><a href="/shk/2006/server/mvc/admin.php/admin/category/int" target="main">查看所有用户</a></li>
            <li><a href="/shk/2006/server/mvc/admin.php/admin/category/addlist" target="main">添加用户</a></li>
        </ul>
        <li>管理员设置</li>
        <ul class="son"><li>
            <a href="/shk/2006/server/mvc/admin.php/admin/content/add" target="main">
                添加数据</a></li>
            <li>
                <a href="/shk/2006/server/mvc/admin.php/admin/content/look" target="main">
                    查看数据</a></li>
        </ul>
    </ul></div>
    <div class="right">
        <iframe src="" frameborder="0" name="main"></iframe>
    </div>
</div>
<div class="bottom">

    <span>xxx版权信息 </span>

</div>
</body>
</html><?php }
}
