<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<style type="text/css">
			*{
				margin: 0;
				padding: 0;
			}
			h3{
				margin: 30px 0;
				text-align: center;
			}
			li{
				list-style-type: none;
			}
			.box{
				width: 800px;
				height: 512px;
				margin: 0 auto;
			}
			ul li{
				float: left;
			}
			ul li img{
				border: 5px solid #eee;
				margin: 5px;
				width: 140px;
			}
			ul li img:hover{
				transform: scale(1.5);
				transition: 0.5s;
			}
		</style>
	</head>
	<body>
		<h3>Hoverbox Image Gallery</h3>
		<div class="box">
			<ul>
				<?php
					//引入数据
					include './data/pic_data.php';
					for($i = 0; $i < count($pic); $i ++){
						echo '<li><img src="'.$pic[$i]['src'].'" alt="'.$pic[$i]['name'].'" /></li>';
					}
				?>
			</ul>
		</div>
	</body>
</html>
