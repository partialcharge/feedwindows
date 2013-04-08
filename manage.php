<!DOCTYPE HTML>
<html>
<head>
	<meta charset = "UTF-8">
	<title>FeedWindwos - Manage Feeds</title>
	<link rel = "stylesheet" type = "text/css" href = "feedwindows_style.css">
	<link rel = "stylesheet" type = "text/css" href = "bootstrap/css/bootstrap.min.css" media = "screen">
	<link rel="stylesheet" type="text/css" href="pageslide/jquery.pageslide.css">
</head>

<body>
	<div class = "container">

		<div class = "nav_bar row well well-small">
			<div class = "view_feeds span2">
				<a class = "btn btn-primary btn-small" href="view.php">&#60;&#60; View Feeds</a>
			</div>
			<div class = "log_out offset10">
				<a class = "log_out btn btn-primary btn-small" href="login.php">Log Out</a>
			</div> <!-- end of log_out -->
		</div> <!-- end of nav_bar -->

		<div class ="row">
			<div class = "add_subs well well-small span5">
				<h3>Add Subscriptions</h3>
				<form class = "add_subs" action="process.php" method="post">
					<input class = "process_flag" type = "hidden" name = "process_flag" value = "add_subs" />
					<label class = "add_subs" for = "add_subs">URL:</label>
					<input id = "add_subs" class = "add_subs" type = "text" name = "subscription_url" /><br />
					<input class = "subscribe_button btn btn-primary" type = "submit" value = "Subscribe" />
				</form>			
			</div><!-- end of add_subs -->
		</div><!-- end of row -->

		<div class ="row">
			<div class ="remove_subs well well-small span5">
				<h3>Remove Subscriptions</h3>
				<ul class = "remove_subs">
					<li><button class = "icon-trash"></button> <a href="http://www.ted.com">www.ted.com</a></li>
					<li><button class = "icon-trash"></button> www.kotaku.com</li>
					<li><button class = "icon-trash"></button> blog.codingdojo.co</li>
					<li><button class = "icon-trash"></button> www.cnn.com</li>
					<li><button class = "icon-trash"></button> news.ycombinator.com</li>
					<li><button class = "icon-trash"></button> mymom.blogspot.com</li>
					<li><button class = "icon-trash"></button> www.dancemania.com</li>
					<li><button class = "icon-trash"></button> www.fancysandwiches.com/blog</li>
				</ul>
			</div><!-- end of remove_subs -->
		</div><!-- end of row -->
	</div> <!-- end of container -->
</body>
</html>