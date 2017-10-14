<?php include 'config.php'; ?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>trash.ink</title>
    <meta name="description" content="Write some trash and publish that online.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="icon" type="image/png" href="favicon.png">
    <link rel="stylesheet" href="css/trash.css">
</head>
<body>
	<a id="start"></a>
	<a href="./" id="logo">Trash.ink</a>
	<a id="about-open" data-fancybox data-src="#about-modal" href="javascript:;">What is this?</a>
	<header>		
		<h1>Write some trash and publish it online. This is an anonymous publishing platform.</h1>		
	</header>

	<main>
		<div id="user-input">
			<input rows="6" id="name" name="name" placeholder="Name" type="text" value="" maxlenght="130">	
			<textarea rows="11" name="comment" id="COMMENT" placeholder="Write..."></textarea>		
			<button id="submit" type="submit">Publish</button>
			<div id="counter"></div>
		</div>

		<section id="display">
			<h2>Latest trash published:</h2>
			<?php
			$sqlQuery = "SELECT * FROM  `tblcomment` order by ID desc";
			$result = mysql_query($sqlQuery) or die(mysql_error());
			while ($row = mysql_fetch_array($result)) {

			echo '<article class="comment-window">
				';
				echo '<div class="comment-postedby">Posted by: ' . $row['PERSON'].'</div>';
				echo '<div class="comment-body">
					';
					echo  $row['COMMENT'];
					echo '
				</div>';
				echo '<div class="comment-date">
					';
					echo 'Date: ' . $row['DATEPOSTED'];
					echo '
				</div>';
				echo '
			</article>';
			}
			?>
		</section>
	</main>    
	
	<footer>
		© <?php echo date("Y"); ?> Andres Guzman. Kudos to you for using this. <a href="#start">Go up</a>		
	</footer>
	
	<div style="display: none;" id="about-modal">
		<p><span>Trash.ink</span> is a simple and silly platform for you yell out whatever you want. There are no repercutions because nobdy keeps track of you. It's that simple and it's fun.</p>
	</div>
	
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
    <script src="js/main.js"></script>
	<script>
		window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
		ga('create','UA-92612244-1','auto');ga('send','pageview')
    </script>
    <script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>
</html>