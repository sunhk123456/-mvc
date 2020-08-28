<?php
use \libs\smarty;
use \libs\db;
class content{
    function add(){
        $smarty=new smarty();
        $smarty->display("demo\addcon.html");
    }
    function getOption(){
        $this->treeOption(0,$this->arr);
        echo json_encode($this->arr);

    }
    function treeOption($pid,&$arr){
        $databases= new db();
        $this->db=$databases->db;
        $result=$this->db->query("select * from aaa123  where pid=".$pid);
        $i=0;
        while ($row=$result->fetch_assoc()){
            $arr[$i]=array(
                "cname"=>$row["cname"],
                "cid"=>$row["cid"],
                "pid"=>$row["pid"],
            );
            $this->treeOption($row["cid"],$arr[$i]["child"]);
            $i++;
        }
    }
    function addcon() {
       $cid= $_POST["cid"];
       $ctitle=$_POST["ctitle"];
       $cneirong=$_POST["cneirong"];
       $databases=new db();
        $db=$databases->db;
       $db->query("insert into conneirong(ctitle,cid,cneirong) values ('$ctitle','$cid','$cneirong')");
        echo $db->affected_rows;
       if($db->affected_rows>0){

           header("location:/shk/2006/server/mvc/admin.php/admin/content/add");
       }

    }
    function look(){
        $databases=new db();
        $db=$databases->db;
        $result=$db->query("select * from aaa123 as a cross join conneirong as c where a.cid=c.cid");
//        var_dump($result);
        $data=[];
        while( $row=$result->fetch_assoc()){
            $data[]=$row;
        }
//        var_dump($data) ;
//        echo json_encode($data);
        $smarty=new smarty();
        $smarty->assign("data",$data);
        $smarty->display("demo/view.html");
    }
    function look1(){
     $ctitle=$_GET["ctitle"];
     $cneirong=$_GET["cneirong"];
        $data=array(
            "ctitle"=>$ctitle,
            "cneirong"=>$cneirong,
        );
              $smarty=new smarty();
        $smarty->assign("data",$data);
        $smarty->display("demo/view1.html");

    }
}
