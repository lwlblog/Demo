<?php
//	print_r($_GET);
	$name = $_GET['name'];
	$nameArr = array('aaa','bbb','ccc','ddd');
	$result = in_array($name,$nameArr);
	if($result){
		echo '用户名已被注册，请更换';
	}
?>