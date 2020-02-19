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
			html,body{
				width: 100%;
				height: 100%;
			}
			.box{
				width: 100%;
				margin: auto;
			}
			.box img{
				width: 100%;
			}
			.box .bgImg{
				position: relative;
			}
			.box .name{
				position: absolute;
				top: 0;
				bottom: 0;
				left: 80px;
				margin: auto;
				width: 200px;
				height: 300px;
				padding: 50px;
				background-color: rgba(0,0,0,0.5);
				border-radius: 40px;
			}
			.box h1{
				color: #fff;
				font-size: 50px;
				line-height: 70px;
			}
			.box h2,.box span{
				color: #fff;
				font-size: 30px;
				font-weight: normal;
				padding-bottom: 10px;
			}
			.box h3{
				color: #f3c258;
				font-size: 24px;
			}
			.box span{
				color: #f3c258;
			}
			.box p{
				color: #fff;
				font-size: 20px;
			}
			.box p:nth-of-type(2){
				padding-top: 10px;
			}
		</style>
	</head>
	<body>
		<div class="box">
			<div class="bgImg">
				<?php
					//接收数据
					$heroName = $_GET['name'];
					include 'hero_getData.php';
					$hero = $heroData[$heroName];
					echo '<div class="name">
							<h3>'.$hero['heroTitle'].'</h3>
							<h1>'.$heroName.'</h1>
							<h2>职业：<span>'.$hero['heroType'].'</span></h2>
							<p>技能：'.$hero['heroSkli'].'</p>
							<p>铭文推荐：'.$hero['heroInscription'].'</p>
						</div>
						<img src="../img/'.$hero['heroSrc'].'-bigskin-1.jpg" alt="" />';
				?>
				
			</div>
		</div>
	</body>
</html>
