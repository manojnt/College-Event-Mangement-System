<?php
$con=mysqli_connect('localhost','root','','event_management');
if(!$con) {
	die("Connection failed:".mysqli_connect_error());
}
?>