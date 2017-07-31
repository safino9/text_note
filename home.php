<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>文本式留言板</title>
	
</head>
<body>
<?php include('head.php'); ?>
<center>
<form action="add.php" method="post">
<table width='400' border='0' cellpadding='4'>
<tr><td align="right">留言标题：</td><td><input type="text" name="title"></td></tr>
<tr><td align="right">留言者：</td><td><input type="text" name="author"></td></tr>
<tr><td align="right" valign='top'>留言内容：</td><td><textarea name="content" rows='5' cols='30'></textarea></td></tr>
<tr><td colspan='2' align="center"><input type="submit" name="sub" value="提交"> 
<input type="reset" name="reset" value="重置"></td></tr></table>
</form>

</center>	
</body>
</html>