<?php
include('head.php');
echo "<center>";
$id=$_GET['id'];
$notes=file_get_contents('liuyan.txt');
$list=explode('@@@',$notes);
//unset()没有返回值
unset($list[$id]);
$notes=implode('@@@',$list);
file_put_contents('liuyan.txt',$notes);
echo "留言删除成功<br>";
echo "<a href='show.php'>返回</a>";
echo "</center>";