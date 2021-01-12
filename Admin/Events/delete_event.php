<?php
include "../connection.php";
extract($_POST);
//delete on modal
if(isset($_POST['id']) && isset($_POST['id']) != "")
{
    $id = $_POST['id'];
    $query = "DELETE FROM `fest` WHERE `id`=$id";
	if (!$result = mysqli_query($con,$query)) {
        exit(mysqli_error());
    }
}
mysqli_close($con);
?>