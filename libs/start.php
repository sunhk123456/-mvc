<?php
//记录一个口令
//define("MVC",true);
//应用文件夹 php常用的魔术常量  魔术方法__get __set  全局魔术方法__autoload
//define("APP_DIR_NAME","application");

//echo MAIN_PATH;
//服务器所在的根路径
define("ROOT_PATH",$_SERVER["DOCUMENT_ROOT"]);
//入口文件的路径
define("ENTRY_PATH",ROOT_PATH.$_SERVER["SCRIPT_NAME"]);

//框架所在的路径
define("MAIN_PATH",dirname(ENTRY_PATH).DIRECTORY_SEPARATOR);
//核心库所在的路径
define("LIBS_PATH",MAIN_PATH."libs".DIRECTORY_SEPARATOR);
//插件所在路径
define("PLU_PATH",MAIN_PATH. "plugins".DIRECTORY_SEPARATOR);
//定义smarty
define("SMARTY_PATH",LIBS_PATH."smarty".DIRECTORY_SEPARATOR);
//字体定义
define("FONT_PATH",APP_NAME."static/font".DIRECTORY_SEPARATOR);

//http协议访问的地址
//echo $_SERVER;
define("HOST_ADD" ,"http://".$_SERVER["HTTP_HOST"]);
//var_dump($_SERVER);

//单入口文件地址
define("ENTRY_ADD",HOST_ADD.$_SERVER["SCRIPT_NAME"]);
//框架入口地址
define("MAIN_ADD",dirname( HOST_ADD. $_SERVER ["SCRIPT_NAME"]) .DIRECTORY_SEPARATOR);
//当前应用的地址
define("APP_ADD",MAIN_ADD."application". DIRECTORY_SEPARATOR);
//static
define("APP_STA",APP_ADD."static". DIRECTORY_SEPARATOR);
//js
define("APP_JS",APP_STA."js". DIRECTORY_SEPARATOR);
//plugins
define("APP_PLU",MAIN_ADD."plugins". DIRECTORY_SEPARATOR);

include_once LIBS_PATH."roule.class.php";
//include_once LIBS_PATH."engine.class.php";
include_once SMARTY_PATH."Smarty.class.php";
//$rou=new \libs\roule();
//$rou->run();
include_once LIBS_PATH."code.class.php";
//include_once "code.class.php";




