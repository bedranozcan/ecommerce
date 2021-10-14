<?php
include("../partials/connect.php");
$category=$_POST['name'];


$sql="INSERT INTO categories(name) values ('$category')";

$connect->query($sql);

?>