<?php
namespace libs;
if(!defined("MVC")){
    die("page not faied");

}

//  index.php/模块/控制/动作

class roule1{
    private static $m;
    private static $C;
    private static $a;
    private function getInfo(){
        $path=isset($_SERVER["PATH_INFO"])?substr($_SERVER["PATH_INFO"],1):
            "admin/index/int";
        $pathArr=(explode("/",$path));
        self::$m=empty($pathArr[0])?"admin":$pathArr[0];
        self::$C=empty($pathArr[1])?"index":$pathArr[1];
        self::$a=empty($pathArr[2])?"int":$pathArr[2];
    }
    function run(){

        $this->getInfo();
        $mpath=APP_NAME.self::$m;

        if (file_exists($mpath)){

            $curl = $mpath.DIRECTORY_SEPARATOR.self::$C.".class.php";
            if(is_file($curl)){


                include_once $curl;
                if(class_exists(self::$C)){

                    $classname=self::$C;
                    $obj=new $classname();
                    if(method_exists($obj,self::$a)){
//                   echo "ok";
                        $method=self::$a;
                        $obj->$method();

                    }else{
                        echo "a不存在";
                    }
                }else{
                    echo "c不存在";
                }

            }else{
                echo "类的php不存在";
            }
        }else{
            echo "mpath不存在";
        }


    }
    function __construct()
    {


//        echo "构造函数";
    }
}
$a=new roule1();
//$a->run();

