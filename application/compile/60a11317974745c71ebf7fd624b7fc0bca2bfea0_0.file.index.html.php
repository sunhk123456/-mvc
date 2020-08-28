<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-20 00:17:40
  from 'D:\wamp\www\shk\2006\server\mvc\application\template\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f3dc124195669_83036213',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60a11317974745c71ebf7fd624b7fc0bca2bfea0' => 
    array (
      0 => 'D:\\wamp\\www\\shk\\2006\\server\\mvc\\application\\template\\index.html',
      1 => 1597812619,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f3dc124195669_83036213 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
<ul>
    <li>姓名：<?php echo $_smarty_tpl->tpl_vars['v']->value["name"];?>
</li>
    <li><?php echo $_smarty_tpl->tpl_vars['v']->value["age"];?>
</li>
    <li><?php echo $_smarty_tpl->tpl_vars['v']->value["sex"];?>
</li>
    <li><?php echo $_smarty_tpl->tpl_vars['v']->value["sex"];?>
</li>
</ul>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<a href="">添加日报</a>
</body>
</html><?php }
}
