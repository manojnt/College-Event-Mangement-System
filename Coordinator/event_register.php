<?php
include "../connection.php";

$fest=$_POST['choice_fest'];
$query="SELECT `id` FROM `fest` WHERE `name` like '$fest'";
$result=mysqli_query($con,$query);
$row1= mysqli_fetch_array($result);
$festId=$row1['id'];
$type=isset($_POST["radio_event"]) ? $_POST["radio_event"] : ' ';
$name=$_POST["txt_eventName"];
$fee=$_POST["txt_entryFee"];
$tmin=$_POST["txt_minSize"];
$time=$_POST["txt_time"];
$date=$_POST["txt_date"];
$tmax=$_POST["txt_maxSize"];
$tmin=$_POST["txt_minSize"];
$password=$_POST["txt_password"];
$description=$_POST["txt_eventDescription"];
$count=$_POST["count"];
$sql="INSERT INTO `events`(`id`, `name`, `type`, `fest_id`, `date`, `time`, `tmin`, `tmax`, `entry_fee`, `description`, `password`) VALUES (NULL,'$name','$type',$festId,'$date','$time',$tmin,$tmax,$fee,'$description','$password')";
if(mysqli_query($con,  $sql)) {
	echo "inserted successfully";
	
}
else {
	echo "error :".mysqli_error($con);
}
mysqli_close($con);*/
?>