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
	<div class="title">
		<b id="toplevels"><center>Levels</center></b>
		<span id="levels">
			<a href="a.php"><b id="standard">Standard</b></a>
			<a style="margin-left: 40px;" href="q.php"><b id="pro">Pro</b></a>
		</span>
	</div>


<script>
	setTimeout(function() {
  document.getElementById('image').style.display='none'
}, 1000);
</script>
<style type="text/css">
	#image {
		position: absolute;
		top: 0px;
		left: 0px;
		width: 100%;
		height: auto;
		z-index: 10;
	}
</style>
	<img id="image" src="images/introbg.gif">








<style type="text/css">

	#toplevels {
		position: absolute;
		top: 54px;
		left: 50%;
		margin-right: -50%;
		transform: translate(-50%, -50%);
		font-size: 55px;
		font-family: Comic Sans MS;
		border: solid;
		width: 350px;
		border-width: 2px;
		padding-bottom: 1px;
		border-color: transparent;
		border-bottom-color: #000000;
	}

	a {
		text-decoration: none;
	}

	body {
		background-color: #ffffff;
	}

	input:focus {
		outline: none;
	}

	#levels {
		position: absolute;
		top: 210px;
		left: 50%;
		margin-right: -50%;
		transform: translate(-50%, -50%);
	}

	#standard {
		font-size: 38px;
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

	#standard:hover {
		font-size: 38px;
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

	#pro {
		font-size: 38px;
		font-weight: 500;
		font-family: Comic Sans MS;
		border: solid;
		border-color: #FF6C00;
		color: #FF6C00;
		padding-left: 15px;
		padding-right: 15px;
		padding-top: 0px;
		padding-bottom: 2px;
		border-radius: 20px;
		background-color: transparent;
		transition: 0.5s;
	}

	#pro:hover {
		
		font-size: 38px;
		font-weight: 500;
		font-family: Comic Sans MS;
		border: solid;
		border-color: #FF6C00;
		color: #ffffff;
		padding-left: 15px;
		padding-right: 15px;
		padding-top: 0px;
		padding-bottom: 2px;
		border-radius: 20px;
		transform: rotate(2deg);
		background-color: #FF6C00;
		transition: 0.5s;
	}
</style>

</body>
</html>