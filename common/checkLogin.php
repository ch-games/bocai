<?php
if(!isset($_SESSION["uid"],$_SESSION["username"]))
{
	echo "<script>alert(\"请先登录再进行操作\");location.href='index.php';</script>";
	exit();
}
?> 