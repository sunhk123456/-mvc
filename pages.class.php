<?php

class pages
{
    public $path;
    public $pageInfo;
    public $pages=10;
    public $total=200;
    public function getUrlinfo()
    {
        $_SERVER['HTTP_HOST'];

        $origition='http://'.$_SERVER['HTTP_HOST']. $_SERVER['PHP_SELF'];
        $reg='/&*pages=\d*/';
        $search=preg_replace($reg,"",$_SERVER['QUERY_STRING']);
        echo $search;
        if (isset($_GET["pages"])){
            $this->pageInfo=$_GET["pages"];
        }else{
            $this->pageInfo=0;
        }
       $this->path= $origition.'?'.$search.'&'.'pages=';
//        echo $path;

    }

    function show()
    {
        $this->getUrlinfo();
        echo "<a href='{$this->path}0'>首页</a>";


        $last=$this->total/$this->pages-1;

        $up=$this->pageInfo-1>0?$this->pageInfo-1:0;
        echo "<a href='{$this->path}$up'>上一页</a>";
//        echo $this->pages;
        $start=$this->pageInfo-floor($this->pages/2)>0?$this->pageInfo-floor($this->pages/2):0;
        $end=$this->pageInfo+($this->pages/2)>($this->total/$this->pages)?($this->total/$this->pages):$this->pageInfo+($this->pages/2);
        for ($i=$start;$i<$end;$i++){
            if ($i==$this->pageInfo){
                $style="color:red";
            }else{
                $style="";
            }
            echo  "<a href='{$this->path}$i' style={$style}>[$i]</a>";
        }
        $next=$this->pageInfo+1<($this->total/$this->pages)?$this->pageInfo+1:($this->total/$this->pages);
        echo "<a href='{$this->path}$next'>下一页</a>";
        echo "<a href='{$this->path}$last'>尾页</a>";
//        echo $this->path .$this->pageInfo;

//        echo $end;
//        echo ($this->total/$this->pages);


    }
}

$pages = new pages();
//$pages->getUrlinfo();
$pages->show();