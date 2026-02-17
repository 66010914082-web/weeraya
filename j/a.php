<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>วีรญา เลาต๋า (เนย)</title>
</head>

<body>
<h1>งาน i</h1>
<h1>วีรญา เลาต๋า (เนย)</h1>

<form method="post" action="">
ชื่อภาค	<input type="text" name="rname" autofocus required>
<button type="submit" name="Submit">บันทึก</button>
</form>
<br>


<?php
if(isset($_POST['Submit'])){
include_once("connectdb.php");
$rname = $_POST['rname'];
$sql2= "INSERT INTO `reglons` VALUES (NULL, '{$rname}')";
mysqli_query($conn,$sql2) or die ("insert ไม่ได้");
	}

?>
<table border="1">
	<tr>
    	<th>รหัสภาค</th>
   		<th>ชื่อภาค</th>
    </tr>
<?php
include_once("connectdb.php");
$sql = "SELECT * FROM `reglons` ORDER BY `reglons`.`r_id` ASC";
$rs = mysqli_query($conn,$sql);

while($data = mysqli_fetch_array($rs)){
	
	

?>    
<tr>
    	<th><?php echo $data['r_id'];?></th>
        <th><?php echo $data['r_name'];?></th>
	</tr>
<?php } ?>
</table>

</body>
</html>