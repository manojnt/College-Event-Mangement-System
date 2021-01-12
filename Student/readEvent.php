<?php
include "../connection.php";
if(isset($_POST['fest']) && isset($_POST['type'])){
	$data='';
	$dt=date("Y/m/d");
	$fest=$_POST['fest'];
	$type=$_POST['type'];
	$query="SELECT `id` FROM `fest` WHERE `name` like '$fest'";
	$result=mysqli_query($con,$query);
	$row1= mysqli_fetch_array($result);
	$festId=$row1['id'];
	$sql="SELECT `name` FROM `events` WHERE `fest_id`=$festId and `type`='$type'";
	echo $sql;
	$result=mysqli_query($con,$sql);
	if(mysqli_num_rows($result) > 0){
		$number=1;
		while($row = mysqli_fetch_array($result)){
			$data .='<option value="'.$row['name'].'">'.$row['name'].'</option>';
		}
	}
	else {
		$data='<option value="No Event">No Fest</option>';
	}
	echo $data;
}
?>