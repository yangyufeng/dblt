#! /opt/lampp/bin/php
<?php
date_default_timezone_set('Asia/Shanghai');
echo "society OK";
/* 推荐 all                      6
 * 奇闻  
 * 社会 society                  5
 * 军事 military                 8
 * 娱乐 entertainment            7
 * 财经 finance                  4
 * 科技 tech                     9
 * 美女 
 * 体育 sports                   2
 * 
 * */



define("CATIGERY","society");
define("CID","5");




$pdoob= new  PDO('mysql:host=localhost;dbname=wordpresslsp','root','1');
$pdoob->query('set names utf8');

$url = 'http://www.toutiao.com/api/article/recent/?category=news_'.CATIGERY.'&count=5';
//$url= 'http://www.toutiao.com/api/article/recent/?category=__all__&count=5&max_behot_time=1390544902.5&offset=0&_=1390544905136';

$cookie ='/home/dblyf/cookie1.txt'; 

$sql_count="select count(*) as num from wp_posts";

/*
while(true){
	sleep(1);
	if(date("H:i:s",time()) == "6:00:00" || date("H:i:s",time()) == "7:00:00" || date("H:i:s",time()) == "8:00:00" || date("H:i:s",time()) == "9:00:00" || date("H:i:s",time()) == "10:00:00" || date("H:i:s",time()) == "11:00:00" ||   date("H:i:s",time()) == "12:00:00" || date("H:i:s",time()) == "13:00:00" || date("H:i:s",time()) == "14:00:00" || date("H:i:s",time()) == "15:00:00" || date("H:i:s",time()) == "16:00:00" || date("H:i:s",time()) == "17:00:00" ||  date("H:i:s",time()) == "18:00:00"){
*/	
	echo date("H:i:s",time()).CATIGERY."\n";
	
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_HEADER, 1); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//存储cookie
//curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
//使用cookie
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
$content=curl_exec($ch);
curl_close($ch);
$c = preg_replace('/^HTTP\/[\w\W]*{\"message\"\:/','{"message":',$content);
$c = json_decode($c);
//var_dump($c);


//插入数据	 
         //数据准备部分
                   //图片张数判断
foreach($c->data as $key=>$value){     
            
	$url_ins = $value->source_url;	
	if(!isset($value->image_list) || $value->image_list == array()){
		if(!isset($value->image_url) || $value->image_url == ""){
			$img_ins = "";
			$column_size = 4;
		}else{
			$img_url = $value->image_url;
			$img_ins = "<div><a href=\"$url_ins\" target=\"_blank\" ><img alt=\"\" src=\"$img_url\" width=\"202\" /></a></div>";
			$column_size = 4;
		}		
	}else{
			$str="";
		
			foreach($value->image_list as $v){
			//var_dump($v->url);
			$str.="<img alt=\"\" src=".$v->url." width=\"190\" />&nbsp;&nbsp;";		
			}
			$img_ins = "<div>"."<a href=\"$url_ins\" target=\"_blank\" >".$str."</a>"."</div>";
			//var_dump($img_ins);
			$column_size = 8;
	}			


		
$sourec = $value -> source;		
$time = date('Y-m-d H:i:s.000000',time()); 
$name = urlencode(urlencode($value->title));
$distime = substr($value->display_time,0,10);
$datetime = $value->datetime;
$content = "<a href=\"$url_ins\" target=\"_blank\" >".$value->abstract."</a>";
$title = "<a href=\"$url_ins\" target=\"_blank\" >".$value->title."</a>";
$s_t = "<a href=\"$url_ins\" target=\"_blank\" >".$sourec."/".$datetime."</a>";
$tid = "1".$value->id;

         //SQL语句拼写以及执行  
$sql_insert = "
INSERT INTO `wp_posts`(post_author , post_date , post_date_gmt , post_content , post_title , post_excerpt , post_status , comment_status , ping_status , post_name , post_modified , post_modified_gmt , post_parent , guid , menu_order , post_type , comment_count) VALUES ('1', '$time' , '$distime' ,'<div>$s_t</div>$img_ins<div>$content</div>','$title', $tid ,'publish','open','open','$name','2014-01-22 14:41:37.000000','2014-01-22 06:41:37.000000',0,'$url_ins',0,'post',0);
";
//echo $sql_insert;

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
INSERT INTO `wp_postmeta`(`post_id`, `meta_key`, `meta_value`) VALUES ($lan,'_edit_last','1'),($lan,'_edit_lock','1390446956:1'),($lan,'_pingme','1'),($lan,'_encloseme','1'),($lan,'_excerpt','field_102'),($lan,'_post_icons','field_108'),($lan,'_featured_stamp','field_112'),($lan,'_page_filter','field_59'),($lan,'_post_type','field_3'),($lan,'_image','field_24'),($lan,'_slider_images','field_115'),($lan,'_the_quote','field_22'),($lan,'social_type','Twitter'),($lan,'_social_type','field_27'),($lan,'_twitter_username','field_28'),($lan,'_twitter_count','field_29'),($lan,'_tabs','field_117'),($lan,'column_size','$column_size'),($lan,'_post_footer','field_30'),($lan,'_pingme','1'),($lan,'_encloseme','1')
";

$re_ins2 = $pdoob->exec($sql_insert2);

$re_ins3 = $pdoob->exec($sql_insert3);
		
		if($re_ins > 0 && $re_ins2 > 0 && $re_ins3 >0){
			echo "成功";			
			}else{
			echo "失败";	
				}
		
       }else{
		   echo "首次插入失败";
		   }
		
       }


//   }

//}

$pdoob = null;

 
