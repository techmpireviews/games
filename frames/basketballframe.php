<!DOCTYPE html>
<html>
<head>
	<title>Frame</title>
</head>
<body>
	<a target="_parent" href="../games/basketball/guessteams.php">
<div class="basketball">
	<p id="baskp">Match NBA Teams with City/State</p>
</div></a>
<a target="_parent" href="../games/basketball/guessplayers.php">
<div class="football">
	<p target="_parent" id="footp">Guess NBA Players Based off Their Jerseys</p>
</div></a>
<a target="_parent" href="../games/basketball/guesscoaches.php">
<div class="baseball">
	<p id="basep">Match NBA Coaches with Teams</p>
</div></a>
<b id="header1"><p style="color: #D30000;">Guess Teams</p></b>
<b id="header2"><p style="color: #F38400;">Guess Players</p></b>
<b id="header3"><p style="color: #0079B6;">Guess Coaches</p></b>
<a target="_parent" href="../games/basketball/guessteams.php"><b id="footer1">Play Now</b></a>
<a target="_parent" href="../games/basketball/guessplayers.php"><b id="footer2">Play Now</b>
<a target="_parent" href="../games/basketball/guesscoaches.php"><b id="footer3">Play Now</b>
</body>
<style type="text/css">
	body {
		font-family: sans-serif;
	}

	p {
		display: inline;
	}
	
	#header1 {
		position: absolute;
		top: 30px;
		left: 40px;
		font-size: 35px;
		font-weight: 800;
		font-family: Comic Sans MS;
		border: solid;
		border-color: transparent;
		border-bottom-color: #000000;
	}

	#footer1 {
		position: absolute;
		top: 360px;
		left: 75px;
		font-size: 33px;
		font-weight: 500;
		font-family: Comic Sans MS;
		border: solid;
		border-color: #0EA702;
		color: #0EA702;
		padding-left: 5px;
		padding-right: 5px;
		padding-top: 0px;
		padding-bottom: 2px;
		border-radius: 20px;
		background-color: transparent;
		transition: 0.5s;
	}

	#footer1:hover {
		position: absolute;
		top: 360px;
		left: 75px;
		font-size: 33px;
		font-weight: 500;
		font-family: Comic Sans MS;
		border: solid;
		border-color: #0EA702;
		color: #ffffff;
		padding-left: 5px;
		padding-right: 5px;
		padding-top: 0px;
		padding-bottom: 2px;
		border-radius: 20px;
		transform: rotate(2deg);
		background-color: #0EA702;
		transition: 0.5s;
	}

	#header2 {
		position: absolute;
		top: 30px;
		left: 337px;
		font-size: 35px;
		color: #000000;
		font-weight: 800;
		font-family: Comic Sans MS;
		border: solid;
		border-color: transparent;
		border-bottom-color: #000000;
	}

	#footer2 {
		position: absolute;
		top: 360px;
		left: 377px;
		font-size: 33px;
		font-weight: 500;
		font-family: Comic Sans MS;
		border: solid;
		border-color: #0EA702;
		color: #0EA702;
		padding-left: 5px;
		padding-right: 5px;
		padding-top: 0px;
		padding-bottom: 2px;
		border-radius: 20px;
		background-color: transparent;
		transition: 0.5s;
	}

	#footer2:hover {
		position: absolute;
		top: 360px;
		left: 377px;
		font-size: 33px;
		font-weight: 500;
		font-family: Comic Sans MS;
		border: solid;
		border-color: #0EA702;
		color: #ffffff;
		padding-left: 5px;
		padding-right: 5px;
		padding-top: 0px;
		padding-bottom: 2px;
		border-radius: 20px;
		transform: rotate(2deg);
		background-color: #0EA702;
		transition: 0.5s;
	}

	#header3 {
		position: absolute;
		top: 30px;
		left: 628.5px;
		font-size: 35px;
		color: #000000;
		font-weight: 800;
		font-family: Comic Sans MS;
		border: solid;
		border-color: transparent;
		border-bottom-color: #000000;
	}

	#footer3 {
		position: absolute;
		top: 360px;
		left: 677px;
		font-size: 33px;
		font-weight: 500;
		font-family: Comic Sans MS;
		border: solid;
		border-color: #0EA702;
		color: #0EA702;
		padding-left: 5px;
		padding-right: 5px;
		padding-top: 0px;
		padding-bottom: 2px;
		border-radius: 20px;
		background-color: transparent;
		transition: 0.5s;
	}

	#footer3:hover {
		position: absolute;
		top: 360px;
		left: 677px;
		font-size: 33px;
		font-weight: 500;
		font-family: Comic Sans MS;
		border: solid;
		border-color: #0EA702;
		color: #ffffff;
		padding-left: 5px;
		padding-right: 5px;
		padding-top: 0px;
		padding-bottom: 2px;
		border-radius: 20px;
		transform: rotate(2deg);
		background-color: #0EA702;
		transition: 0.5s;
	}

	.basketball {
		position: absolute;
		top: 100px;
		left: 40px;
		width: 225px;
		height: 225px;
		border: solid;
		background-size: 115%;
		color: transparent;
		border-radius: 44px;
		transition: 0.3s;
		background-image: url("images/matchteam.jpg");
		background-repeat: no-repeat;
		border-color: #ffffff;
	}
	.basketball:hover {
		position: absolute;
		top: 100px;
		left: 40px;
		width: 225px;
		height: 225px;
		color: #F60202;
		border: solid;
		transition: 0.4s;
		background-size: 130%;
		border-radius: 44px;
		background-repeat: no-repeat;
		background-image: url("images/matchteamblur.jpg");
		border-color: #000000;
	}
	.football {
		position: absolute;
		top: 100px;
		left: 340px;
		color: transparent;
		width: 225px;
		height: 225px;
		border: solid;
		transition: 0.3s;
		border-radius: 44px;
		background-image: url("images/dunkimg.png");
		background-size: 100%;
		border-color: #ffffff;
	}
	.football:hover {
		position: absolute;
		top: 100px;
		left: 340px;
		width: 225px;
		color: #F38400;
		height: 225px;
		transition: 0.4s;
		border: solid;
		border-radius: 44px;
		background-image: url("images/dunkblur.png");
		background-size: 115%;
		border-color: #000000;
	}
	.baseball {
		position: absolute;
		top: 100px;
		left: 640px;
		width: 225px;
		color: transparent;
		height: 225px;
		transition: 0.3s;
		background-image: url("images/basketballcoach.png");
		border: solid;
		border-radius: 44px;
		background-size: 100%;
		border-color: #ffffff;
	}
	.baseball:hover {
		position: absolute;
		top: 100px;
		left: 640px;
		color: #0079B6;
		width: 225px;
		height: 225px;
		transition: 0.4s;
		background-size: 115%;
		background-image: url("images/basketballcoachblur.png");
		border: solid;
		border-radius: 44px;
		border-color: #000000;
	}
	#baskp {
		position: absolute;
		top: 64px;
		left: 12px;
		font-size: 35px;
		font-weight: bold;
		cursor: pointer;
	}
	#footp {
		position: absolute;
		top: -20px;
		left: 12px;
		font-size: 35px;
		font-weight: bold;
		cursor: pointer;
	}
	#basep {
		position: absolute;
		top: 60px;
		left: 12px;
		font-size: 35px;
		font-weight: bold;
		cursor: pointer;
	}
</style>
</html>