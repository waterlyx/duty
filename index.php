<?php
include 'zhiri.php';
?>
<!doctype html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>值日安排</title>
	<link rel="stylesheet" type="text/css" href="css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="css/htmleaf-demo.css" />
	<link rel="stylesheet" href="css/style.css">
	<!--[if IE]>
		<script src="http://libs.useso.com/js/html5shiv/3.7/html5shiv.min.js"></script>
	<![endif]-->
</head>
<body>
	<div class="view">
	<br/>
	<br/>
	<br/>
		<div class="card__full">
			<div class="card__full-top">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
						<path d="M16.59 8.59l-4.59 4.58-4.59-4.58-1.41 1.41 6 6 6-6z"/>
						<path d="M0 0h24v24h-24z" fill="none"/>
				</svg>
				<span class="card__full-num"></span>
			</div>
			<div class="card__full-bottom">
				<p class="card__full-handle"></p>
				<p class="card__full-info"></p>
			</div>
		</div>
		<ul class="card__list">
			<li class="card__item card__item--blue">
				<div class="card__info">
					<div class="info-player">
						<p class="info-player__num"><?php echo date("j",strtotime("-1 day")) ?></p>
						<p class="info-player__name" style="color:#808080"><small>昨日值日生</small><br><?php echo zhiri(-1) ?></p>
					</div>
					<div class="info-place" style="color:#808080"><?php echo date("w",strtotime("-1 day")) ?><sup><?php echo $weekarray[date("w",strtotime("-1 day"))] ?></sup></div>
				</div>
			</li>
			<li class="card__item card__item--purple">
				<div class="card__info">
					<div class="info-player">
						<p class="info-player__num"><?php echo date("j") ?></p>
						<p class="info-player__name"><small>今日值日生</small><br><?php echo zhiri(0) ?></p>
					</div>
					<div class="info-place"><?php echo date("w") ?><sup><?php echo $weekarray[date("w")] ?></sup></div>
				</div>
			</li>
			<li class="card__item card__item--green">
				<div class="card__info">
					<div class="info-player">
						<p class="info-player__num"><?php echo date("j",strtotime("+1 day")) ?></p>
						<p class="info-player__name"><?php echo zhiri(1) ?></p>
					</div>
					<div class="info-place"><?php echo date("w",strtotime("+1 day")) ?><sup><?php echo $weekarray[date("w",strtotime("+1 day"))] ?></sup></div>
				</div>
			</li>
			<li class="card__item card__item--yellow">
				<div class="card__info">
					<div class="info-player">
						<p class="info-player__num"><?php echo date("j",strtotime("+2 day")) ?></p>
						<p class="info-player__name"><?php echo zhiri(2) ?></p>
					</div>
					<div class="info-place"><?php echo date("w",strtotime("+2 day")) ?><sup><?php echo $weekarray[date("w",strtotime("+2 day"))] ?></sup></div>
				</div>
			</li>
			<li class="card__item card__item--tan">
				<div class="card__info">
					<div class="info-player">
						<p class="info-player__num"><?php echo date("j",strtotime("+3 day")) ?></p>
						<p class="info-player__name"><?php echo zhiri(3) ?></p>
					</div>
					<div class="info-place"><?php echo date("w",strtotime("+3 day")) ?><sup><?php echo $weekarray[date("w",strtotime("+3 day"))] ?></sup></div>
				</div>
			</li>
			<li class="card__item card__item--orange">
				<div class="card__info">
					<div class="info-player">
						<p class="info-player__num"><?php echo date("j",strtotime("+4 day")) ?></p>
						<p class="info-player__name"><?php echo zhiri(4) ?></p>
					</div>
					<div class="info-place"><?php echo date("w",strtotime("+4 day")) ?><sup><?php echo $weekarray[date("w",strtotime("+4 day"))] ?></sup></div>
				</div>
			</li>
		</ul>
	</div>
	<!-- <section class="htmleaf-container">
		
	</section> -->
	
	
	<script>window.jQuery || document.write('<script src="js/jquery-2.1.1.min.js"><\/script>')</script>
	<script src="js/cards.php?rand=<?php echo mt_srand() ?>"></script>
</body>
</html>