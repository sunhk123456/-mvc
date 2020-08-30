<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-28 09:08:09
  from 'D:\wamp64\www\shk\2006\server\mvc\application\template\admin\adduer.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f48c979cb38a8_45580784',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4fda3880c8b3726753b3eed43038e406c4705aba' => 
    array (
      0 => 'D:\\wamp64\\www\\shk\\2006\\server\\mvc\\application\\template\\admin\\adduer.html',
      1 => 1598605685,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f48c979cb38a8_45580784 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <form action="/shk/2006/server/mvc/admin.php/admin/category/add1" class="formadd" method="post">
        <label for="cod">     添加目录级别：</label>
        <select  id="opts" name="pid" id="cod"></select>
            <br>
        <label for="cname">添加目录名字</label>
        <input type="text" name="cname" id="cname">

        <br>
        <input type="submit">
    </form>
    <?php echo '<script'; ?>
 src="<?php echo APP_JS;?>
jquery.js">

    <?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
  src="<?php echo APP_JS;?>
adduer.js">
    <?php echo '</script'; ?>
>
</body>
</html><?php }
}
