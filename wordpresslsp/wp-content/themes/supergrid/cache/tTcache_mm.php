#! /opt/lampp/bin/php
<?php
date_default_timezone_set('Asia/Shanghai');
include 'ca_mm_fun.php';
echo "cache mm ready";
/* 推荐 all                      6
 * 奇闻  
 * 社会 society                  5
 * 军事 military                 8
 * 娱乐 entertainment            7
 * 财经 finance                  4
 * 科技 tech                     9
 * 美女 mm                      10
 * 体育 sports                   2
 * 
 * */



define("CATIGERY","mm");
define("CID","10");




$pdoob= new  PDO('mysql:host=localhost;dbname=wordpresslsp','root','1');
$pdoob->query('set names utf8');



//$url= 'http://www.toutiao.com/api/gallery/recent/?tag=ppmm&count=1&max_behot_time=1391900000';
//www.toutiao.com/api/gallery/recent/?tag=ppmm_weibogirl&count=20&max_behot_time=
										//ppmm
$cookie ='/home/dblyf/cookie1.txt'; 

/*			
while(true){
	sleep(1);
	if(date("H:i:s",time()) == "6:10:00" || 
	date("H:i:s",time()) == "6:10:01" ||
	date("H:i:s",time()) == "7:10:00" || 
	date("H:i:s",time()) == "7:10:01" || 
	date("H:i:s",time()) == "8:10:00" || 
	date("H:i:s",time()) == "8:10:01" || 
	date("H:i:s",time()) == "9:10:00" || 
	date("H:i:s",time()) == "9:10:01" || 
	date("H:i:s",time()) == "10:10:00" || 
	date("H:i:s",time()) == "10:10:01" || 
	date("H:i:s",time()) == "11:10:00" ||   
	date("H:i:s",time()) == "11:10:01" ||  
	date("H:i:s",time()) == "12:10:00" || 
	date("H:i:s",time()) == "12:10:01" || 
	date("H:i:s",time()) == "13:10:00" || 
	date("H:i:s",time()) == "13:10:01" || 
	date("H:i:s",time()) == "14:10:00" || 
	date("H:i:s",time()) == "14:10:01" || 
	date("H:i:s",time()) == "15:10:00" || 
	date("H:i:s",time()) == "15:10:01" || 
	date("H:i:s",time()) == "16:10:00" || 
	date("H:i:s",time()) == "16:10:01" || 
	date("H:i:s",time()) == "17:10:00" ||  
	date("H:i:s",time()) == "17:10:01" || 
	date("H:i:s",time()) == "18:10:00" ||
	date("H:i:s",time()) == "18:10:01"){
*/
	echo date("H:i:s",time()).CATIGERY."\n";

	if(date("H",time()) == "6" ||
	  date("H",time()) == "8" ||  
	  date("H",time()) == "10" ||    
	  date("H",time()) == "12" ||  
	  date("H",time()) == "14" ||  
	  date("H",time()) == "16" ||   
	  date("H",time()) == "18"){
		$url = 'http://www.toutiao.com/api/gallery/recent/?tag=ppmm_weibogirl&count=20&max_behot_time='.time();
		}else{
		$url = 'http://www.toutiao.com/api/gallery/recent/?tag=ppmm&count=20&max_behot_time='.time();	
			}
	
	echo $url;	
			
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_HEADER, 1); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//存储cookie
//curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
//使用cookie
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
$content=curl_exec($ch);
curl_close($ch);
//echo "<pre>";
//var_dump($content);
//echo "</pre>";
$c = preg_replace('/^HTTP\/[\w\W]*{\"message\"\:/','{"message":',$content);
$c = json_decode($c);

//var_dump($c);


//插入数据	 
         //数据准备部分
                   //图片张数判断
                   
                   
                   
                  
foreach($c->data as $key=>$value){     
    $l_url = $value->large_url;
    $tid = "2".$value->id;
	$url_ins = "#";	
	$name = urlencode("真实美女");
	$time = date('Y-m-d H:i:s.000000',time()); 
	$datetime = $value->datetime;
	$content = "<div>".$value->desc."</div>";
	$title = $l_url;
  //缩略图
		//检测文件类型，返回文件类型后缀
		$ftype = witchtype($l_url);
		if($ftype == 'jpg' | $ftype == 'png' | $ftype == 'gif'){
		//下载保存图片，返回图片路径
		$fpath = photodown($tid,$l_url,$ftype);
		//进行缩略，并且删除原图
		$m_url = contract($tid,$ftype,$fpath);
		}else{
			echo "不支持的文件类型";
		}
		

	$mmphoto = "<div class=\"ajaxmm\">"."<img src=\"".$m_url."\"></div>";





         //SQL语句拼写以及执行  
$sql_insert = "
INSERT INTO `wp_posts`(post_author , post_date , post_date_gmt , post_content , post_title , post_excerpt , post_status , comment_status , ping_status , post_name , post_modified , post_modified_gmt , post_parent , guid , menu_order , post_type , comment_count)  VALUES('1', '$time' , '0000-00-00 00:00:00.000000' ,'<div>$mmphoto</div><div>$datetime</div><div>$content</div>','$title', $tid ,'publish','open','open','$name','2014-01-22 14:41:37.000000','2014-01-22 06:41:37.000000',0,'$url_ins',0,'post',0);
";
echo $sql_insert;

$re_ins = $pdoob->exec($sql_insert);
//var_dump($re_ins);
      if($re_ins > 0){

$lan=$pdoob->lastInsertId();



$sql_insert2 = "
INSERT INTO `wp_term_relationships`(`object_id`, `term_taxonomy_id`, `term_order`) VALUES ($lan,".CID.",0)
";
$sql_insert4 = "
SELECT COUNT(*) FROM wp_term_relationships, wp_posts WHERE wp_posts.ID = wp_term_relationships.object_id AND post_status = 'publish' AND post_type IN ('post') AND term_taxonomy_id = 2
";

$in4_que = $pdoob->query($sql_insert4);

while($in4_re = $in4_que->fetch()){
	$arr_ins4[] = $in4_re; 
	};
//var_dump($arr_ins4);
$sql_insert5 ="
UPDATE `wp_term_taxonomy` SET `count` = ".$arr_ins4[0][0]." WHERE `term_taxonomy_id` = 2
";
$in5_que = $pdoob->query($sql_insert5);

$sql_insert3 = "
INSERT INTO `wp_postmeta`(`post_id`, `meta_key`, `meta_value`) VALUES ($lan,'_edit_last','1'),($lan,'_edit_lock','1390446956:1'),($lan,'_pingme','1'),($lan,'_encloseme','1'),($lan,'_excerpt','field_102'),($lan,'_post_icons','field_108'),($lan,'_featured_stamp','field_112'),($lan,'_page_filter','field_59'),($lan,'_post_type','field_3'),($lan,'_image','field_24'),($lan,'_slider_images','field_115'),($lan,'_the_quote','field_22'),($lan,'social_type','Twitter'),($lan,'_social_type','field_27'),($lan,'_twitter_username','field_28'),($lan,'_twitter_count','field_29'),($lan,'_tabs','field_117'),($lan,'column_size','4'),($lan,'_post_footer','field_30'),($lan,'_pingme','1'),($lan,'_encloseme','1')
";

$re_ins2 = $pdoob->exec($sql_insert2);

$re_ins3 = $pdoob->exec($sql_insert3);
		
		if($re_ins > 0 && $re_ins2 > 0 && $re_ins3 >0){
			echo "成功";			
			}else{
			echo "失败";	
				}
		
       }else{
		   unlink($m_url);
		   echo "首次插入失败";
		   }
		    
       }


//   }

//}

        

$pdoob = null;

 
