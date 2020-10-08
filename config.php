<?php
$host ="localhost";
$username="root";
$password="";
$dbname="online_bakery";
$con = mysqli_connect($host,$username,$password) or die ('Unable to connect Database');
mysqli_select_db($con,$dbname);




?>
