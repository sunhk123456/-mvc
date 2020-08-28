<?php
namespace libs;
class db{
    function __construct()
    {

        $db=@new \mysqli("localhost","root","","uuer","3308");
//        var_dump($db);
//        数据库连接失败的信息
        if(mysqli_connect_error()){
            dir("数据库连接错误");
        }
        $db->query("set names utf8");
        $this->db=$db;
    }
    function close(){
        \mysqli_close();
    }
    function query($attr){
      $result=$this->db->query($attr);
        return $result;
    }
}