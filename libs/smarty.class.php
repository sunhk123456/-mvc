<?php
namespace libs;
class smarty{
    function __construct()
    {
        $smarty=new \Smarty();

        $smarty->setTemplateDir(TPL_PATH);
        $smarty->setCompileDir(COMPILE_PATH);
        $this->smarty=$smarty;

    }
    function  display($file){
        $this->smarty->display($file);
    }
//    function assign($attr,$val){
//        $this->smarty->assign($attr,$val);
//    }
function assign($attr,$val){
        $this->smarty->assign($attr,$val);
}

}