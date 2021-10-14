<?php
include("../partials/connect.php");
$email=$_POST['email'];
$msg=$_POST['msg'];

$sql="INSERT INTO contact(email,msg) values ('$email','$msg')";

$connect->query($sql);

?>