<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>วีรญา เลาต๋า (เนย)</title>
</head>

<body>
<h1>วีรญา เลาต๋า (เนย)</h1>

<form method = "post" action="">รหัสนิสิต <input type="number" name="a"  min="0" max="100"autofocus required>
<button type="submit" name="Submit">OK</button>
</form>
<hr>

<?php
if(isset($_POST['Submit'])) {
	
	$id = $_POST['a'];
	$y = substr($id,0,2);
	echo "<img src='http://202.28.32.21.210/picture/{$y}/{$id}.jpg' width="400">";
	echo $y;
}

	
?>



</body>
</html>