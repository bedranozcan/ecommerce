<?php 
include('../partials/connect.php');
if(isset($_POST['update'])){
	$newid=$_POST['form_id'];
	$newname=$_POST['name'];


	move_uploaded_file($file_tmp, $file_store);


	$sql="UPDATE categories SET name='$newname' WHERE id='$newid'";
	if (mysqli_query($connect,$sql)) {
			header('location:categoriesshow.php');

	}else{
		header('location:adminindex.php');
	}

}


?>