<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="frontend/css/style.css">
	<link rel="stylesheet" type="text/css" href="frontend/css/style2.css">
	<link rel="stylesheet" type="text/css" href="frontend/css/style3.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<script
       src="https://code.jquery.com/jquery-3.6.0.min.js"
       integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
       crossorigin="anonymous"></script>
</head>

<body>
	<script src="frontend/js/script.js"></script>
	<div class="wrapper">
		<?php include "header.php"?>

		<div class="wrapper_lk">
			<div class="top_main">
				<div class="wrap_top_main">
					<div class="button">Оставить отзыв</div>
					<div class="h1_feed">Отзывы о сайте</div>
					<div class="button">Фильтры</div>
				</div>
				<div class="line_help"></div>
			</div>
			<div class="feed_content">
				<div class="feed_content_wrapper">
					<?php include "review.php"?>
					<?php include "review.php"?>
				</div>
			</div>
		</div>
		<?php include "footer.php"?>
	</div>
	<script src="frontend/js/javascript.js"></script>
</body>
</html>