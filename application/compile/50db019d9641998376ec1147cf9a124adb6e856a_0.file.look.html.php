<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-28 09:19:30
  from 'D:\wamp64\www\shk\2006\server\mvc\application\template\admin\look.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f48cc22a7f5f8_83751002',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50db019d9641998376ec1147cf9a124adb6e856a' => 
    array (
      0 => 'D:\\wamp64\\www\\shk\\2006\\server\\mvc\\application\\template\\admin\\look.html',
      1 => 1598606369,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f48cc22a7f5f8_83751002 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<link rel="stylesheet" href=<?php echo APP_CSS;?>
bootstrap.css>
<style>
    .pannel{
        width: 400px;
        height: 200Px;
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%,-50%);
        background-color: white;
        display: none;
        border: 3px solid black;
      box-shadow: 0 0 4px #000;
        position: relative;
    }
    .close{
        position: absolute;
        right: 10px;
        top: 10px;
    }
    .hidd{
        position: relative;
        top: 30px;
        z-index: 2;
    }
</style>
<body>


查看所有用户:
<br>
<table class="table table-bordered">
    <form action="/shk/2006/server/mvc/admin.php/admin/category/add" method="post">
        <input type="text" name="cname" placeholder="一级目录">
        <input type="submit" name="">
    </form>
    <?php if ($_smarty_tpl->tpl_vars['data']->value) {?>
 
  <?php echo $_smarty_tpl->tpl_vars['data']->value;?>

    <?php }?>
</table>
<div class="pannel add1">
    <div class="close">X</div>
    <form action="/shk/2006/server/mvc/admin.php/admin/category/add" class="hidd" method="post">
        <input type="text" name="cname" >
        <input type="hidden"  name="cid" class="cid" >
        <input type="submit">
    </form>
</div>
<div class="pannel edit1">
    <div class="close edit2">X</div>
    <form action="/shk/2006/server/mvc/admin.php/admin/category/add" class="hidd" method="post">
        <input type="text" name="cname" >

        <select  id="opts" name="pid"></select>

        <input type="button" value="修改">
    </form>
</div>
<?php echo '<script'; ?>
 src="<?php echo APP_JS;?>
jquery.js">

<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
  src="<?php echo APP_JS;?>
category.js">

<?php echo '</script'; ?>
>
</body>
</html><?php }
}
