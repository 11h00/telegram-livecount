<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" type="text/css" href="css/livecount.css" />
	<link rel="stylesheet" type="text/css" href="css/odometer-theme-default.css" />
	<meta name="description" content="The best instagram livecount you ever seen! battle, fast refresh, media livecount and more!" />
	<meta name="keywords" content="instagram livecount, realtime, followers, follower, livecount" />
	<meta name="author" content="mathias777" />
	<title>telegram livecount</title>
	<script src="./js/jquery.js"></script>
	<script src="js/livecount.js"></script>
	<script src="js/odometer.js"></script>
	<script src="js/sweetalert.js"></script>
</head>
<body id="wewcor" onload="checkcookie()">
	<h1 eid="title">telegram livecount by mathias777</h1>
	<br>
	<form style="text-align: center;" onsubmit="tpjland()">
	      <input type="text" id="usernamer" class="textinputuser" name="leuseu" required placeholder="username"/>
	</form>
	<div class="post">
	   <img src="img/0.jpg" id="pfp" onclick="gotoprofile()" alt="ima de prifile mai bon la" style="display: block;margin-left: auto;margin-right: auto;width: 200px;border: solid 3px black;">
		<h1 id="coconu" onclick="gotoprofile()" class="lctext">...</h1>
		<div class="autre" id="autre" style="width: 100%;position: inherit;font-family: mathias;">
			<h1 id="followeur" class="lctext">messages :</h1>
			<div name="leposte" style="font-size: 150px; line-height: 1em; display: unset;font-family: mathias" id="odometer" class="odometer">0</div>
				<h1 id="milestona" class="lctext">left for </h1>
				<div name="milespzn" id="odometer5" style="font-size: 70px; line-height: 1em; display: unset;font-family: mathias" class="odometer">0</div>
		</div>
	</div>
	<div class="follower" id="follower" style="font-family: mathias;">
		<h1 id="posts" class="lctext">members :</h1>
		<div id="odometer2" style="font-size: 100px; line-height: 1em; display: unset;font-family: mathias" class="odometer">0</div>
	</div>
	<div style="display: flow-root;" id="backcredit">
		<div style="width: 99%;display: flex;text-align: center;margin-bottom: 4px;">
			<button onclick="sonsetting()" class="soundbutton" id="soundstting">sound : OFF</button>
			<img src="img/sole.png" id="sole" alt="light mode" style="width: 60px;margin-left: 63%">
		</div>
	</div>
	<script src="js/main_event.js"></script>
</body>