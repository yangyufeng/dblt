<?php
//$_GET['pid_'];
$pid = $_GET['pid_'];
$pdoob = new  PDO('mysql:host=localhost;dbname=wordpresslsp','root','1');
$pdoob -> query('set names utf8');
$sql_sel = "select post_title from wp_posts where post_excerpt = '$pid'";
//echo $sql_sel;

$re_lurl = $pdoob ->query($sql_sel);

$arr=array();
while($re =  $re_lurl -> fetch()){
	$arr[] = $re; 
	};
echo $arr[0][0];


