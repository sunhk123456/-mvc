<?php
class reg{
//    function int(){
//
//        $smarty=new Smarty();
//        $smarty->setTemplateDir('D:/wamp/www/shk/2006/server/mvc/application/template/');
//        $smarty->setCompileDir('D:/wamp/www/shk/2006/server/mvc/application/compile/');
//
////
//
////        加@防止数据库信息泄露
//        $db=@new mysqli("localhost","root","123456","security","3308");
////        var_dump($db);
////        数据库连接失败的信息
//        if(mysqli_connect_error()){
//            dir("数据库连接错误");
//        }
//        $db->query("set names utf8");
////        结果集是一个对象然后->方法，获取具体数据
//        $result=$db->query("select * from teacher");
////        var_dump($result);
//        $data=array();
//        while ($row=$result->fetch_assoc()){
//            $data[]=($row);
//        }
//
//        $smarty->assign("data",$data);
//        $smarty->display("admin.html");
//    }

    function zhuce(){
        $smarty=new Smarty();
        $smarty->setTemplateDir('D:/wamp/www/shk/2006/server/mvc/application/template/');
        $smarty->setCompileDir('D:/wamp/www/shk/2006/server/mvc/application/compile/');

        $smarty->display("reg.html");
    }
    function tishi(){

        $uname= $_POST["uname"];
        $upassword= $_POST["upassword"];
        $upassword1= $_POST["upassword1"];
        if($upassword!==$upassword1){
            echo "两次密码不一致";
            return;
        }
        $db=new mysqli("localhost","root","123456","uuer","3308");
        if(mysqli_connect_error()){
            dir("数据库连接失败");
        }
        $db->query("set names utf8");
        $result=$db->query("insert into demo(uname,upassword) values ('$uname','$upassword')");

        if($db->affected_rows>0){
            echo "插入成功";
        }
    }
    function checkName(){

        $name=$_POST["uname1"];
        echo $name;


    }
}