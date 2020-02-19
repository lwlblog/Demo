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
			ul{
				list-style: none;
			}
			a,img{
				display: block;
			}
			.box{
				width: 1280px;
				margin: auto;
				padding: 0 10px;
				background-color: #eee;
			}
			.box h2{
				text-align: center;
				line-height: 80px;
			}
			.box h3{
				text-align: right;
				padding: 0 10px;
				line-height: 50px;
			}
			.box p{
				text-align: center;
				line-height: 30px;
			}
			.box ul{
				width: 100%;
				overflow: hidden;
			}
			.box li{
				float: left;
				width: 140px;
				margin: 10px;
				padding-top: 20px;
				border-radius: 10px;
				background-color: rgba(0,0,0,0.1);
			}
			.box a{
				position: relative;
				width: 100px;
				height: 100px;
				margin: auto;
				border: 3px solid #38f;
				border-radius: 12px 0 12px 0;
				overflow: hidden;
			}
			.box img,.box span{
				width: 100%;
				height: 100%;
			}
			.box span{
				/*display: none;*/
				opacity: 0;
				position: absolute;
				top: 0;
				left: 0;
				color: #fff;
				text-align: center;
				border-radius: 12px 0 12px 0;
				font-size: 20px;
				line-height: 100px;
				background-color: rgba(0,0,0,0.4);
				transition: opacity 0.5s;
			}
			.box a:hover>span{
				/*display: block;*/
				opacity: 1;
			}
		</style>
	</head>
	<body>
		<div class="box">
			<h2>王者荣耀部分英雄查询列表</h2>
			<ul>
				<?php
					include 'data/hero_data.php';
					for($i = 0; $i < count($heroData); $i ++){
						echo '<li>
								<a href="data/heroData1.php?name='.$heroData[$i]['heroName'].'" target="_blank">
									<img src="img/'.$heroData[$i]['heroSrc'].'.jpg"/>
									<span>详情</span>
								</a>
								<p>'.$heroData[$i]['heroName'].'</p>
							</li>';
					}
				?>
			</ul>
			<h3>2019-3-24</h3>
		</div>
	</body>
</html>
