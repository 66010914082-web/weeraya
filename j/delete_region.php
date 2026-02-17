<meta charset="utf-8">

<?php
	include_once("connectdb.php");
	$id = $_GET['id'];
	$sql = "DELETE FROM `reglons` WHERE r_id={$id}' ";
	mysqli_query($conn , $aql) or die ("ลบไมได้");
	 
	 echo "<script>";
	 echo "window.location='a.php';";
	 echo "</script>";





?>
