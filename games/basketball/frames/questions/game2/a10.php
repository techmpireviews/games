<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="background-color: #ffffff; margin-top: 90px;">
<center><b style="color: blue; font-weight: 800; font-size: 75px; font-family: Comic Sans MS;">You Win!</b><br><br><a id="res" href="teamsstart.php">Restart</a></center>
</body>
<style type="text/css">
	a {
		text-decoration: none;
	}
	#res {
		margin-top: 15px;
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
		border-radius: 23px;
		background-color: transparent;
		transition: 0.5s;
	}

	#res:hover {
		margin-top: 15px;
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
		border-radius: 23px;
		transform: rotate(2deg);
		background-color: #0EA702;
		transition: 0.5s;
	}
</style>
<?php
$result= $_POST['game'];
$result= strtolower($result);
if ($result<>'andrew wiggins') {
	echo '<script>location.href = "q11.php";</script>';
}
?>
</html>