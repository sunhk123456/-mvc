<?php
use libs\db;
use libs\smarty;
class demo{
    public $data;
    function __construct()
    {
        $db=new db();
        $db=$db->db;
        $this->treeOption(0,$this->data);
        $smarty=new smarty();

        $this->smarty=$smarty->smarty;
        $this->smarty->assign("data",$this->data);
    }
    function getCid(){

        $db=new db();
        $db=$db->db;
        $result= $db->query("select * from aaa123 a inner join cneirong c where a.cid");
    }

    function int(){

        $this->smarty->display("index/index.html");
    }
    function about(){
       var_dump( $this->data['1']['child']);
       foreach ($this->data['1']['child'] as $b)
       {

//           if ($b[0]){
//               echo "1";
//           }
//           else{
//               echo "0";
//           }
       }
       exit();
//        $db=new db();
//        $db=$db->db;
//        var_dump($this->data);
//        exit();
//        $result= $db->query("select cid from aaa123 a where a.suoyin='about';");
//
//        $cid= $result->fetch_assoc()['cid'];
//
//        $result1= $db->query("select * from aaa123 a where a.pid=$cid;");
//        $arr=[];
//       while ($row=$result1->fetch_assoc()){
//           $arr[]=$row;
//       }
//       $this->smarty->assign("data2",$arr);
//        $this->smarty->assign("id",$cid);
        $this->smarty->display("index/about.html");

    }
    function product(){
        $this->smarty->display("index/product.html");
    }
    function down(){
        $this->smarty->display("index/down.html");

    }
    function new(){
        $this->smarty->display("index/new.html");

    }
    function liuyan(){
        $this->smarty->display("index/liuyan.html");

    }
    function contact(){
        $this->smarty->display("index/contact.html");

    }
    function treeOption($pid,&$arr){
        $databases= new db();
        $this->db=$databases->db;
        $result=$this->db->query("select * from aaa123 where pid=".$pid);
        $i=0;
        while ($row=$result->fetch_assoc()){
            $arr[$i]=array(
                "cname"=>$row["cname"],
                "cid"=>$row["cid"],
                "pid"=>$row["pid"],
                'isshow'=>$row["isshow"],
                'suoyin'=>$row['suoyin'],
            );
            $this->treeOption($row["cid"],$arr[$i]["child"]);
            $i++;
        }
    }
}