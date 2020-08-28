<?php
namespace libs;
//1 指定输出的格式
//2 创建画布

class code{
//    public $abc=$config["code"]["type"];
    public $type="png";
    public $width=160;
    public $height=50;
    public $codeLen=4;
    public $seed="abcdefhjkmnprstuvwxyzABCDEFGHIJKLMNOQPRSTUVWXYZ345678";
    public $fontSize=array("min"=>20,"max"=>35);
    public $fontAngle=array("min"=>-15,"max"=>15);
    public $fontFile="D:\wamp64\www\shk/2006\server\mvc\application\static/font\ALGER.TTF";
    private function createCanvas(){
        $this->image=imagecreatetruecolor( $this->width,$this->height);
    imagefill($this->image,0,0,$this->setColor("1"));
    }


    private function setColor($type="background"){
        //设置随机值
       $r=$type=="background"?mt_rand(0,120):mt_rand(126,255);
        $g=$type=="background"?mt_rand(0,120):mt_rand(126,255);
        $b=$type=="background"?mt_rand(0,120):mt_rand(126,255);
//        echo $r;
       return imagecolorallocate($this->image,$r,$g,$b);
    }

    private function getText(){

        $l=$this->codeLen;
        $str="";
        for ($i=0;$i<$l;$i++){
            $str.=$this->seed[mt_rand(0,strlen($this->seed)-1)];
        }
        return $str;
    }
    private function setText(){
       $str= $this->getText();
       $this->str=strtolower($str);
       $this->str=strtolower($str);
       for ($i=0;$i<$this->codeLen;$i++){
           $size=mt_rand( $this->fontSize["min"],$this->fontSize["max"]);
           $angle=mt_rand($this->fontAngle["min"],$this->fontAngle["max"]);
           $space=$this->width/($this->codeLen*2+1);
           $box=imagettfbbox($size,$angle,$this->fontFile,$str[$i]);
       imagettftext($this->image, $size,$angle,mt_rand($space*max(($i*2-1),1)-5, $space*max(($i*2),1)+5),mt_rand(0,$this->height-($box[0]-$box[7]))+($box[0]-$box[7]),$this->setColor(),$this->fontFile,$str[$i]);
       }
//    echo $str;
    }
    function line(){
//        $num=2;
//        for ($i=0;$i<$num;$i++){
//        $x1=mt_rand(0,$this->width/2);
//        $x2=mt_rand($this->width/2,$this->width);
//        $y1=mt_rand(0,$this->height);
//        $y2=mt_rand(0,$this->height);
//
////        imagesetthickness($this->image,10);
//        imageline($this->image,$x1,$y1,$x2,$y2,$this->setColor());
//        }
    }
    function out(){
        $num=3;
        header("content-type:image/".$this->type);
//        创建画布
        $this->createCanvas();
//        写文字
        $this->setText();
        $outtyle="image".$this->type;
        //imagepng调用   输出之前写入cookie
            setcookie("code",$this->str,"0","/");
        $outtyle($this->image);

        imagedestroy($this->image);
        $this->line();


    }
}
//$code=new code();
//$code->out();


