<?php
include('head.php');
echo "<center>";
if(isset($_POST['sub'])){
	$title=$_POST['title'];
	$author=$_POST['author'];
	$content=$_POST['content'];
	$ip=$_SERVER['REMOTE_ADDR'];
	$time=time();
	$ly=$title.'##'.$author.'##'.$content.'##'.$ip.'##'.$time.'@@@';
	$notes=$ly.@file_get_contents("liuyan.txt");
	file_put_contents("liuyan.txt",$notes);
	echo "留言成功<br>";
	echo "<a href='home.php'>返回首页</a>";
}
echo "</center>";