<?php 
include '../../db/connection.php';
$id = $_GET['id'];
$query = mysqli_query($connection,"DELETE FROM comment WHERE id=$id");
header("location:../message.php");
?>