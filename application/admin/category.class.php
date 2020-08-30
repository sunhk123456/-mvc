<?php
use libs\smarty;
use libs\db;

class category{
    public $arr=array();

    function int(){
        $smarty=new smarty();
        $databases= new db();
        $this->db=$databases->db;

        $str="<table class='table table-bordered'><tr>
        <td>层级</td>
        <td>分类名称</td>
        <td>是否可见</td>
        <td>操作</td>
    </tr>";

        $this->tree(0,$str);
        $str.="</table>";

        $smarty->assign("data", $str);
        $smarty->display("admin\look.html");

    }

    function tree($pid,&$str,$i=0){

        $result=$this->db->query("select * from aaa123 where pid=".$pid);

        while ($row=$result->fetch_assoc()){

            $str.='<tr><td>'.$i.'级目录</td><td>'.$row["cname"].'</td><td>'.$row["isshow"].'</td><td> <a href="javascript:;" class="add" attr="'.$row["cid"].'"> 添加</a>
<a href="/shk/2006/server/mvc/admin.php/admin/category/del?cid='.$row["cid"].'" class="delete" attr="'.$row["cid"].'"> 删除</a><a href="javascript:;" class="edit" pid="'.$row["pid"].'" attr="'.$row["cid"].'"> 修改</a>
</td></tr>';
            $this->tree($row["cid"],$str,$i+1);
        }
    }
    function del(){
           $cid= $_GET["cid"];

        $databases= new db();
        $this->db=$databases->db;
        $result=$this->db->query("select * from aaa123 where pid=".$cid);
        if($result->num_rows>0){
            echo "<script>alert('请删除了子目录');location.href='/shk/2006/server/mvc/admin.php/admin/category/'</script>";
        }else{
            $this->db->query("delete from aaa123 where cid=".$cid);
//            echo  $this->db->affected_rows;
            if( $this->db->affected_rows>0){
                header("location:/shk/2006/server/mvc/admin.php/admin/category/");
            }
        }

    }
    function add(){
        $cname=$_POST["cname"];
      if (isset($_POST["cid"])){
          $gid=$_POST["cid"];
      }else{
          $gid=0;
      }


        $database=new db();
        $db=$database->db;

        $result= $db->query("insert into aaa123 (cname,pid) values ('$cname',$gid)");

//
        if ( $db->affected_rows){
            header("location:/shk/2006/server/mvc/admin.php/admin/category/");
        }
    }
    function add1(){
        $cname=$_POST["cname"];
       $pid= $_POST["pid"];
        echo   $_POST["pid"];
//        exit();
//        if (isset($_POST["cid"])){
//            $gid=$_POST["cid"];
//        }else{
//            $gid=0;
//        }


        $database=new db();
        $db=$database->db;

        $result= $db->query("insert into aaa123 (cname,pid) values ('$cname',$pid)");

//
        if ( $db->affected_rows){
            header("location:/shk/2006/server/mvc/admin.php/admin/category/");
        }
    }
    function show(){
        $cid= $_GET["cid"];

        $databases= new db();
        $this->db=$databases->db;
        $result=$this->db->query("select * from aaa123 where cid=".$cid);
       $row= $result->fetch_assoc();
       echo json_encode($row);
    }
    function getOption(){
    $this->treeOption(0,$this->arr);
   echo json_encode($this->arr);
//   echo var_dump($this->arr);
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
    //修改内容
    function editcon(){
        $cname=$_GET["cname"];
        $pid=$_GET["pid"];
        $cid=$_GET["cid"];
        $database=new db();
        $db=$database->db;


        $result= $db->query("update  aaa123 set cname='$cname',pid='$pid' where cid=".$cid);

    if($db->affected_rows>0){
        echo "ok";
    }
    }
    function addlist(){

       $smarty= new smarty();
        $smarty->display("admin\adduer.html");
    }
}