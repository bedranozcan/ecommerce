<?php 
include('../partials/connect.php');
$newid=$_GET['del_id'];
$sql="DELETE FROM categories WHERE id='$newid'";
if(mysqli_query($connect,$sql)){
	header('location:categoriesshow.php');
}else{
	echo "Not Deleted";
}



?>