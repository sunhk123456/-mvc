<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-26 02:55:00
  from 'D:\wamp64\www\shk\2006\server\mvc\application\template\demo\addcon.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f45cf0469f262_09982012',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e303cd1dafcc4b68e4f755d6bf407a82a108c384' => 
    array (
      0 => 'D:\\wamp64\\www\\shk\\2006\\server\\mvc\\application\\template\\demo\\addcon.html',
      1 => 1598410499,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f45cf0469f262_09982012 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href=<?php echo APP_CSS;?>
bootstrap.css>
    <style >
        .title{
            text-align: center;
        }
    </style>
</head>
<body>
<div class="title"><h3>添加数据</h3></div>
<form action="http://localhost/shk/2006/server/mvc/admin.php/admin/content/addcon" method="post">
    <label for="opts">选择目录</label>
    <div class="form-group">
        <select class="form-control" id="opts" name="cid">

        </select>
        <label for="title">标题 </label>
        <input type="text" class="form-control" id="title" placeholder="标题内容"  name="ctitle">
    </div>
    <label for="neirong">内容</label>
    <textarea class="form-control" rows="3" id="neirong"  name="cneirong"></textarea>


    <button type="submit" class="btn btn-default">提交</button>
</form>
<?php echo '<script'; ?>
 src="<?php echo APP_JS;?>
jquery.js">

<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
  src="<?php echo APP_JS;?>
content.js"><?php echo '</script'; ?>
>

</body>
</html><?php }
}
