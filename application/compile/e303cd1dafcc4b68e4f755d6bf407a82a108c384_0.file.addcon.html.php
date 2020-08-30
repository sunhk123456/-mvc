<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-29 16:51:51
  from 'D:\wamp64\www\shk\2006\server\mvc\application\template\demo\addcon.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4a87a74c1789_48671626',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e303cd1dafcc4b68e4f755d6bf407a82a108c384' => 
    array (
      0 => 'D:\\wamp64\\www\\shk\\2006\\server\\mvc\\application\\template\\demo\\addcon.html',
      1 => 1598719906,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4a87a74c1789_48671626 (Smarty_Internal_Template $_smarty_tpl) {
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
    <?php echo '<script'; ?>
 src="<?php echo APP_JS;?>
tinymce/tinymce.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>

        tinyMCE.init({
            selector:'#neirong', //表单控件.样式名称 - 绑定textarea
            language : "zh_CN",
            height:"140", //高度
            width:"980", //宽度
            toolbar_items_size: 'small', //控件大小
            menubar:true, //是否显示菜单栏
            plugins: ["link code"], //插件区，激活控件
            toolbar: "link code",  //控件区，显示控件
            //名称前后显示，影响控件显示位置
        });

    <?php echo '</script'; ?>
> <!--这里设置 class="content" 套用TinyMCE编辑器-->
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
