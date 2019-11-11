<!DOCTYPE html>
<html>
<head>
	<title>Frame</title>
</head>
<body>
<div onclick="location.href='teamsstart.php'" id="main">
	<script>
	setTimeout(function() {
  document.getElementById('image').style.display='none'
}, 3000);
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
	<b id="innerb">Click Anywhere To Start</b>
</div>
	<img id="image" src="images/intro1.gif">
	<style type="text/css">
		#innerb {
			position: relative;
		    top: 300px;
		    display: block;
		    left: auto;
		    right: auto;
			font-size: 38px;
			font-family: Comic Sans MS;
			color: #ffffff;
			text-align: center;
		}
		#main {
			position: absolute;
			top: 0px;
			left: 0px;
			background-image: url(images/bg.gif);
			background-repeat: no-repeat;
			background-size: 100%;
			width: 100%;
			height: 100%;
			cursor: pointer;
		}
	</style>
</body>
</html>