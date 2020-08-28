<?php
class engine{
//    获取原始数据

//编译
//显示到页面当中
//分配变量
private $templateDir="template";
private $compileDir="compileDir";

private function getDate($file){
$destfile=$this->compileDir.DIRECTORY_SEPARATOR.$file;
if(is_file($destfile)){
        $this->con=file_get_contents($destfile);
}else{
    dir("错误,没找到路径");
}
}
private function compile ($file){
    $con=$this->getDate($file);
    $reg='/\{\$[a-zA-Z]\w*\}/';
    preg_replace_callback($reg,function ($val){
        return'<?php echo '.$val[1]."?>";
    },$con);
}
function display ($file){
$this->compile($file);
echo 0;
}
}

//$en->()