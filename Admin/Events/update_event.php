<?php
include "../connection.php";
extract($_POST);

//display on modal
if(isset($_POST['id']) && isset($_POST['id']) != "")
{
    $id = $_POST['id'];
    $query = "SELECT `id`, `name`, `department`, `date` FROM `fest` WHERE `id`=$id";
    if (!$result = mysqli_query($con,$query)) {
        exit(mysqli_error());
    }
    
    $response = array();

    if(mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
       
            $response = $row;
        }
    }
  //  // no data found
    else
    {
        $response['status'] = 200;
        $response['message'] = "Data not found!";
    }
   //     PHP has some built-in functions to handle JSON.
// Objects in PHP can be converted into JSON by using the PHP function json_encode():
    echo json_encode($response);
	
}
// id is empty & invalid request
else
{
    $response['status'] = 200;
    $response['message'] = "Invalid Request!";
}

//update details
if(isset($_POST['update_id']))
{
	$id=$_POST['update_id'];
	$name=$_POST['name'];
	$department=$_POST['department'];
	$date=$_POST['date'];
	$query="UPDATE `fest` SET `name`='$name',`department`='$department',`date`='$date' WHERE `id`='$id'";
	if (!$result = mysqli_query($con,$query)) {
        exit(mysqli_error());
    }
}
mysqli_close($con);
?>
