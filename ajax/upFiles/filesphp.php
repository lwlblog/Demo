<?php
	header('content-type:text/html;charset=utf-8');
	print_r($_FILES);
	move_uploaded_file($_FILES['fileName']['tmp_name'],'./files/'.$_FILES['fileName']['name']);
?>