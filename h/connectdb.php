<?php
		$host = "localhost";
			$user = "root";
			$pwd = "";
			$db = "4082db";
			$conn = mysqli_connect("localhost","root","","4082db") or die ("เชื่อมต่อฐานข้อมูลไม่ได้");
			mysqli_query($conn,"set names utf8");
?>