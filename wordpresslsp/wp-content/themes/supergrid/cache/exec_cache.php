#! /opt/lampp/bin/php
<?php
define('PATH','/opt/lampp/htdocs/xampp/wordpresslsp/wp-content/themes/supergrid/cache/');
//nohup ./command.sh > output 2>&1 &
exec("nohup ".PATH."tTcache_all.php  > ".PATH."logs/op_all 2>&1 &");

exec("nohup ".PATH."tTcache_entertainment.php  > ".PATH."logs/op_enter 2>&1 &");

exec("nohup ".PATH."tTcache_finance.php  > ".PATH."logs/op_finance 2>&1 &");

exec("nohup ".PATH."tTcache_military.php  > ".PATH."logs/op_military 2>&1 &");

exec("nohup ".PATH."tTcache_society.php  > ".PATH."logs/op_society 2>&1 &");

exec("nohup ".PATH."tTcache_sports.php  > ".PATH."logs/op_sports 2>&1 &");

exec("nohup ".PATH."tTcache_tech.php  > ".PATH."logs/op_tech 2>&1 &");

exec("nohup ".PATH."tTcache_mm.php  > ".PATH."logs/op_mm 2>&1 &");

exec("nohup ".PATH."tTcache_hot.php  > ".PATH."logs/op_hot 2>&1 &");








