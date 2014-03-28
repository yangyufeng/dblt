
<?php

define('SAVEPATH','/opt/lampp/htdocs/xampp/wordpresslsp/wp-content/themes/supergrid/cache/contract/');
define('READPATH','./wp-content/themes/supergrid/cache/contract/');






function witchtype($url){


        $fp = fopen($url, "rb");
        $bin = fread($fp, 2); //只读2字节
        fclose($fp);
        $str_info  = @unpack("C2chars", $bin);
        $type_code = intval($str_info['chars1'].$str_info['chars2']);
        $file_type = '';
        switch ($type_code) {
            case 7790:
                $file_type = 'exe';
                break;
            case 7784:
                $file_type = 'midi';
                break;
            case 8075:
                $file_type = 'zip';
                break;
            case 8297:
                $file_type = 'rar';
                break;
            case 255216:
                $file_type = 'jpg';
                break;
            case 7173:
                $file_type = 'gif';
                break;
            case 6677:
                $file_type = 'bmp';
                break;
            case 13780:
                $file_type = 'png';
                break;
            default:
                $file_type = 'unknown';
                break;
        }
		echo $file_type;
        return $file_type;

    
}


function photodown($id,$url,$type){
	$pic = "";	
	$path = SAVEPATH."$id.$type";
    $pic =  file_get_contents($url);
    $handle = fopen($path , "x");
    $re = fwrite($handle,$pic);
    
    if($re > 0){
			return $path;
		}else{
			return false;
		}
	
}

function contract($id,$type,$path,$width=263){
//header("content-type:image/png");

//$white=imagecolorallocate($dm,255,255,255);
//imagefill($dm,0,0,$white);
//获取被缩略图片的基本信息

//扩展名
$eARR=explode(".", $path);
$ename=end($eARR);//echo$ename;
$einame=strtolower($ename);
//exit();
if ($einame=="png"){
$sm=imagecreatefrompng($path);$type="png";
}elseif ($einame=="jpeg"||$einame=="jpg"){
$sm=imagecreatefromjpeg($path);$type="jpeg";//echo "<hr color='yellow'/>";//var_dump($sm);
}elseif ($einame=="gif"){
$sm=imagecreatefromgif($path);$type="gif";
}else{echo "不支持";}
//exit();
//$sm=imagecreatefrom.$type($path);
$get_sm=getimagesize($path);//var_dump($get_sm);
$swidth=$get_sm[0];//echo $swidth;
$sheight=$get_sm[1];//echo $sheight;
//exit();
//判断缩宽，还是缩高，还是不用缩
//$shbili=$sheight/$height;//echo $shbili."<br/>";
//$swbili=$swidth/$width;//echo $swbili."<br/>";

$src_image=$sm;


$src_w=$swidth;
$src_h=$sheight;
$src_x=0;
$src_y=0;

$dst_x=0;
$dst_y=0;
$dst_w=$width;
$dst_h=$width*$sheight/$swidth;


$dm=imagecreatetruecolor($dst_w,$dst_h);
$dst_image=$dm;
/*
  
    $c_new = imagecreatetruecolor($cut_width, $cut_height);
    imagecopyresampled($c_new, $back, 0, 0, $cut_x, $cut_y, $cut_width, $cut_height, $cut_width, $cut_height);
*/
$re1 = imagecopyresampled($dst_image, $src_image, $dst_x, $dst_y, $src_x, $src_y, $dst_w, $dst_h, $src_w, $src_h);

$re2 = imagejpeg($dst_image,SAVEPATH."$id.$type");

if($re1){
	if($re2){
		 unlink($path);
		 echo $type;
		 //./wp-content/themes/supergrid/cache/contract/3112215131.jpeg
		 return READPATH."$id.$type";
		}else{echo "输出出错";}
}else{echo "缩略出错";}

imagedestroy($dst_image);

}    





?>
