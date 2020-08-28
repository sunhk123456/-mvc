<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-22 05:10:40
  from 'D:\wamp\www\shk\2006\server\mvc\application\template\admin.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f40a8d0073f73_33487063',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77d847a59bdcdd8e1ddb1b34d4934c3f983e5fb8' => 
    array (
      0 => 'D:\\wamp\\www\\shk\\2006\\server\\mvc\\application\\template\\admin.html',
      1 => 1598072841,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f40a8d0073f73_33487063 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo APP_CSS;?>
bootstrap.css">
    <title>Document</title>
</head>
<body>
<div class="container">
<form action="/shk/2006/server/mvc/admin.php/admin/index/login" method="post" class="yanzheng">
   用户名： <input type="text" name="uname">
   密码： <input type="password" name="upassword" id=""><br>
   验证码：<input type="text" name="code" id="code"> <img src="/shk/2006/server/mvc/admin.php/admin/index/mycode" alt="" onclick="this.src='/shk/2006/server/mvc/admin.php/admin/index/mycode?'+Math.random()">
    <input type="submit" value="登录">

    <button ><a href="/shk/2006/server/mvc/admin.php/admin/index/zhuce"> 注册</a></button>
    
</form>
</div>
<?php echo '<script'; ?>
 src="<?php echo APP_JS;?>
jquery.js">

<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo APP_JS;?>
jquery.validate.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo APP_JS;?>
admin.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>


<?php echo '</script'; ?>
>
</body>
</html><?php }
}
