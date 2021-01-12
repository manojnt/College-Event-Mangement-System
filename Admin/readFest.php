<?php
include "../connection.php";
extract($_POST);
if(isset($_POST['readrecords'])){

	$data ='<table class="table table-striped table-bordered table-hover table-responsive" align="center">
			<thead>
			<tr>
			<th>No.</th>
			<th>Fest ID</th>
			<th>Fest Name</th>
			<th>Departement</th>
			<th>Date</th>
			<th>Edit Action</th>
			<th>Delete Action</th>
			</tr>
			</thead> 
			<tbody>';
	$sql="select * from fest";
	$result=mysqli_query($con,$sql);
	if(mysqli_num_rows($result) > 0){
		$number=1;
		while($row = mysqli_fetch_array($result)){
			$data .='<tr>
			<td>'.$number.'</td>
			<td>'.$row['id'] .'</td>
			<td>'.$row['name'] .'</td>
			<td>'.$row['department'] .'</td>
			<td>'.$row['date'] .'</td>
			<td><input type="button" class="btn btn-info btn-sm" data-id="'.$row['id'] .'" value="Update" onclick="UpdateFest('.$row['id'].')" data-toggle="modal" data-target="#updateModal" id="'."update-".$row['id'] .'" name="'."update-".$row['id'] .'"></td>
			<td><input type="button" class="btn btn-danger btn-sm" data-id="'.$row['id'] .'" value="Delete" onclick="DeleteFest('.$row['id'].')" data-toggle="modal" data-target="#deleteModal" id="'."delete-".$row['id'] .'" name="'."delete-".$row['id'] .'"></td>
			</tr>';
			$number++;
		}
	}
	$data .= '</tbody> </table>';
    echo $data;
}
mysqli_close($con);

?>