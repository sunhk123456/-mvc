<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-26 09:08:56
  from 'D:\wamp64\www\shk\2006\server\mvc\application\template\index\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4626a886e0b5_01086100',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6dad87fcf6778d1febaac62bcbf6c098711d2211' => 
    array (
      0 => 'D:\\wamp64\\www\\shk\\2006\\server\\mvc\\application\\template\\index\\index.html',
      1 => 1598432935,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4626a886e0b5_01086100 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<ul>


    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>


    <li><?php echo $_smarty_tpl->tpl_vars['v']->value['cname'];?>

    <ul>
        <li>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['v']->value['child'], 'm');
$_smarty_tpl->tpl_vars['m']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->do_else = false;
?>
            <?php echo $_smarty_tpl->tpl_vars['m']->value['cname'];?>

        </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>

    </li>


    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>

</body>

</html><?php }
}
