<?php
class main{
    function __construct()
    {

        $smarty=new Smarty();

        $smarty->setTemplateDir(TPL_PATH);
        $smarty->setCompileDir(COMPILE_PATH);
//        加@防止数据库信息泄露
        $db=@new mysqli("localhost","root","","uuer","3308");
//        var_dump($db);
//        数据库连接失败的信息
        if(mysqli_connect_error()){
            dir("数据库连接错误");
        }
        $db->query("set names utf8");
        $this->db=$db;
        $this->smarty=$smarty;
    }

}