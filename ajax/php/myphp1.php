<style type="text/css">
	span{
		color: red;
	}
</style>
<?php
//	header('content-type:text/html;charset=utf-8');
	$startArr = array(
		array('name'=>'刘德华','film'=>'无间道','friend'=>'曾志伟'),
		array('name'=>'吴京','film'=>'战狼','friend'=>'张翰'),
		array('name'=>'黄渤','film'=>'疯狂的石头','friend'=>'林志玲'),
		array('name'=>'汪峰','film'=>'春天里','friend'=>'那英')
	);
	for($i = 0; $i < count($startArr); $i ++){
		echo '<p>明星：<span>'.$startArr[$i]['name'].'</span>刘德华出演了：'.$startArr[$i]['film'].'他的好朋友是：'.$startArr[$i]['friend'].'</p>';
	}
	
	//遍历
	$arr = array('name'=>'刘德华','film'=>'无间道','friend'=>'曾志伟');
	foreach($arr as $key => $value){
		echo $key.'------'.$value.'<br>';
	}
?>