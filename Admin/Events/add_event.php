<?php
include "../connection.php";
extract($_POST);
//add
if(isset($_POST['name']) &&  isset($_POST['department']) && isset($_POST['date']) ){
	$query = "INSERT INTO `fest` (`name`, `department`, `date`) VALUES ('$name', '$department','$date')";
	

	if($result = mysqli_query($con,$query)){
		exit(mysqli_error());
	}else{
		echo "1 record added";
	}
}
mysqli_close($con);
?>
