<?php
include "../connection.php";
if(isset($_POST['readfest'])){
	$data='';
	$dt=date("Y/m/d");
	$sql="select name from fest where date < '$dt'";
	$result=mysqli_query($con,$sql);
	if(mysqli_num_rows($result) > 0){
		$number=1;
		while($row = mysqli_fetch_array($result)){
			$data .='<option value="'.$row['name'].'">'.$row['name'].'</option>';
		}
	}
	else {
		$data='<option value="No Fest">No Fest</option>';
	}
	echo $data;
}
?>