#! /opt/lampp/bin/php
<?php
define("FILENAME","tTcache_");
define("FILEPATH","\/opt\/lampp\/htdocs\/xampp\/wordpresslsp\/wp-content\/themes\/supergrid\/cache\/");


exec("ps aux|grep ".FILENAME,$outputinf2);
///home/dblyf/
var_dump($outputinf2);
foreach($outputinf2 as $k => $v){
			if(preg_match("/".FILEPATH.FILENAME."/",$v)){
				preg_match("/^root\s+(\d+)\s+/",$v,$re);			
				exec("kill -9 ".$re[1]);
				}
}


