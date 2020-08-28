<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-26 05:13:05
  from 'D:\wamp64\www\shk\2006\server\mvc\application\template\demo\view.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f45ef611cb232_58235059',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '793a9defdcb550bc6a959e4888db6500880a3f3f' => 
    array (
      0 => 'D:\\wamp64\\www\\shk\\2006\\server\\mvc\\application\\template\\demo\\view.html',
      1 => 1598418783,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f45ef611cb232_58235059 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href=<?php echo APP_CSS;?>
bootstrap.css>
    <style>
td{
    overflow: hidden; text-overflow:ellipsis;
}

    </style>
</head>
<body>
<table class="table-bordered table table-condensed">
    <tr><th>所属级别</th><th>标题</th><th>内容</th><th>操作</th></tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>

   <tr><td><?php echo $_smarty_tpl->tpl_vars['v']->value["cname"];?>
</td> <td><?php echo $_smarty_tpl->tpl_vars['v']->value["ctitle"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['v']->value["cneirong"];?>
</td><td><a href="/shk/2006/server/mvc/admin.php/admin/content/look1?ctitle=<?php echo $_smarty_tpl->tpl_vars['v']->value["ctitle"];?>
&cneirong=<?php echo $_smarty_tpl->tpl_vars['v']->value["cneirong"];?>
">查看</a> <a href="">编辑</a> <a
           href="">删除</a></td></tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>
</body>
</html><?php }
}
