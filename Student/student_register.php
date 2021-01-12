<?php
include "../connection.php";
//retriewing fest ID
$fest=$_POST['choice_fest'];
$query="SELECT `id` FROM `fest` WHERE `name` like '$fest'";
$result=mysqli_query($con,$query);
$row= mysqli_fetch_array($result);
$festId=$row['id'];
$name=$_POST["txt_studentName"];
$usn=$_POST["txt_studentUSN"];
$age=$_POST["txt_studentAge"];
$gender=isset($_POST["radio_gender"]) ? $_POST["radio_gender"] : ' ';
$college=$_POST["txt_College"];
$city=$_POST["txt_City"];
$phone=$_POST["txt_studentPhone"];
$email=$_POST["txt_studentMail"];
$event_type=isset($_POST["radio_event"]) ? $_POST["radio_event"] : ' ';
$event_name=isset($_POST["choice_event"]) ? $_POST["choice_event"] : ' ';
$query="SELECT `id` FROM `events` WHERE `name`='$event_name' and `type`='$event_type' and `fest_id`=$festId";
$result=mysqli_query($con,$query);
$row=mysqli_fetch_array($result);
$eventId=$row['id'];
$tsize=1;
$query="INSERT INTO `students`(`id`, `name`, `usn`, `age`, `gender`, `college`, `city`, `phone`, `email`, `event_id`, `team_size`) VALUES (NULL,'$name','$usn',$age,'$gender','$college','$city',$phone,'$email',$eventId,$tsize)";
if(!mysqli_query($con,$query)){
	echo "registration unsuccessfull";
}else{
	echo "registration successfull";
}



?>
