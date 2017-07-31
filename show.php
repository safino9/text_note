<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>显示留言</title>
	<style>
     td {text-align:center}
  </style>
  <script>
  function check($id){
  	if(confirm('确定要删除吗？')){
  		window.location='del.php?id='+$id;
  	}
  }
  </script>
</head>
<body>
<?php
include('head.php');
?>
 
<center>
<table width="800" border="1" >
<tr bgcolor="#ccc"><th>ID</th><th>标题</th><th>留言者</th><th>内容</th><th>IP</th><th>时间</th><th>操作</th></tr>
<?php
$notes=file_get_contents('liuyan.txt');
if(!empty($notes)){
	$notes=rtrim($notes,'@﻿');
$arr=explode('@@@',$notes);
for($i=0;$i<count($arr);$i++){
	$note[$i]=explode('##',$arr[$i]);
	echo "<tr>";
	echo "<td>{$i}</td>";
	echo "<td>{$note[$i][0]}</td>";
	echo "<td>{$note[$i][1]}</td>";
	echo "<td>{$note[$i][2]}</td>";
	echo "<td>{$note[$i][3]}</td>";
	echo "<td>{$note[$i][4]}</td>";
	echo "<td><a href='javascript:check({$i})'>删除</a></td>";
	echo "</tr>";
}
}

?>


</table>
</center>
</body>
</html>