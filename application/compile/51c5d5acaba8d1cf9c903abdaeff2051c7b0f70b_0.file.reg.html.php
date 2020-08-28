<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-21 02:10:09
  from 'D:\wamp\www\shk\2006\server\mvc\application\template\reg.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f3f2d01b0e506_96137114',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51c5d5acaba8d1cf9c903abdaeff2051c7b0f70b' => 
    array (
      0 => 'D:\\wamp\\www\\shk\\2006\\server\\mvc\\application\\template\\reg.html',
      1 => 1597975805,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f3f2d01b0e506_96137114 (Smarty_Internal_Template $_smarty_tpl) {
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

<form action="/shk/2006/server/mvc/admin.php/admin/reg/tishi" method="post" class="reg">
    用户名： <input type="text" name="uname" >
    密码： <input type="password" name="upassword">
    再次确认密码:<input type="password" name="upassword1">
    <input type="submit" value="注册">

    <button ><a href="/shk/2006/server/mvc/template/admin.html">登录</a></button>
</form>
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
</body>
</html><?php }
}
