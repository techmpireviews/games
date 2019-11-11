<!DOCTYPE html>
<html>
<head>
	<title>Frame</title>
</head>
<body>
	<style type="text/css">
		body {
			background-image: linear-gradient(to right, #F9FFC7, #F9FFE4);
		}
	</style>
	<script>
	setTimeout(function() {
  document.getElementById('image').style.display='none'
}, 1000);
</script>
	<div class="search">
		<b id="q">Indians #12</b>
		<span class="searchformspan">
			<form autocomplete="off" id="searchform" action="q5.php" method="post">
				<input style="margin-top: 5px;" placeholder="player" autocomplete="off" id="searchid" type="text" name="game">
			</form>
		</span>
		<p id="h">Match player with jersey (use player's full name).</p>
	</div>
	<div id="image"><img id="img" src="images/correct.png"><br><b style="color: green; position: absolute; top: 130px; right: 40px;">Correct</b></div>
	<style>
	#img {
		width: 100px;
		height: auto;
		position: absolute;
		top: 10px;
		right: 20px;
	}
	</style>
	<b style="color: #000000; position: absolute; top: 10px;
		left: 10px;">Question 5</b>












<style type="text/css">

	body {
		background-color: #ffffff;
		font-family: Comic Sans MS;
	}

	input:focus {
		outline: none;
	}

	input::-webkit-input-placeholder {
		text-align: center;
	}

	input:-moz-placeholder {
		text-align: center;
	}

	input::-moz-placeholder {
		text-align: center;
	}

	input::-ms-input-placeholder {
		text-align: center;
	}

	#q {
		display: flex;
		justify-content: center;
		align-items: center;
		font-size: 55px;
		font-weight: 700;
		margin-top: 80px;
	}

	#h {
		display: flex;
		justify-content: center;
		align-items: center;
		font-size: 25px;
		font-weight: 50;
		margin-top: 90px;
	}

	#searchform {
		display: flex;
		justify-content: center;
		align-items: center;
		margin-top: 35px;
	}

	#searchid {
		margin-top: 0px;
		border: solid;
		font-size: 30px;
		background-color: transparent;
		border-color: transparent;
		border-bottom-color: #000000;
		border-width: 1.2px;
		width: 300px;
		height: 25px;
		padding-bottom: 5px;
		text-align: center;
	}
	
	#menu {
	position: absolute;
	top: -18px;
	left: -1px;
	right: 0px;
	background-color: #000000;
	border: solid;
	border-color: #000000;
    clip-path: circle(50px at 15px 14px);
	padding: 35px;
	transition: 0.5s;
	z-index: 50;
}

#menu:hover {
	position: absolute;
	top: -18px;
	left: -1px;
	right: 0px;
	border: solid;
	border-color: #ffffff;
	border-bottom-color: #000000;
    clip-path: circle(100%);
	background-color: #ffffff;
	padding: 33px;
	transition: 0.85s;
	z-index: 50;
}
.a1 {
	padding: 2px 7px;
	text-decoration: none;
	color: #000000;
	border: solid;
	border-color: transparent;
	background-color: transparent;
	border-radius: 7px;
	font-size: 25px;
	transition: 0.5s;
}

.a1:hover {
	padding: 2px 7px;
	text-decoration: none;
	color: #ffffff;
	border: solid;
	border-color: #000000;
	background-color: #000000;
	border-radius: 15px;
	font-size: 25px;
	transition: 0.6s;
}

#links {
	position: absolute;
	margin-left: 48.5%;
	margin-right: -50%;
	transform: translate(-50%, -50%);
}

#menulogo {
	width: 30px;
	height: auto;
	position: absolute;
	top: 16px;
	left: 12px;
}
</style>
<div class="time">Time: <span id="timer">30</span></div>
<script type="text/javascript">
	var s = document.getElementById('timer').textContent;
	var down = setInterval(function() {
		s--;
	document.getElementById('timer').textContent = s;
	if (s === 0) location.href='q12.php';}, 1000);
</script>
<style type="text/css">
	.time {
		position: absolute;
		top: 20px;
		left: 50%;
		margin-right: -50%;
		transform: translate(-50%, -50%);
		font-size: 22px;
		color: #000000;
	}
</style>
<?php
$result= $_POST['game'];
$result= strtolower($result);
if ($result<>'mookie betts') {
	echo '<script>location.href = "q11.php";</script>';
}
?>
</body>
</html>