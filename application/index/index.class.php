<?php
use libs\smarty;
use libs\db;
class index{
  function int(){
      $smarty= new smarty();
      $databases=new db();

      $db=$databases->db;
//      $relust=$db->query("select * from aaa123 ");
//      $data=[];
     $data= $this->getOption();
//      var_dump($data);
//    while($row=$relust->fetch_assoc()) {
//        $data[]=$row;
//    } ;

    $smarty->assign("data",$data);
      $smarty->display("index/index.html");
    }
    function getOption(){
        $this->treeOption(0,$this->arr);
//        echo json_encode($this->arr);
   return ($this->arr);
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
            );
            $this->treeOption($row["cid"],$arr[$i]["child"]);
            $i++;
        }
    }
}