<?php 
include '../../DB/connection.php';
$id = $_GET['id'];
$query = mysqli_query($connection,"DELETE FROM news WHERE id=$id");
header("location:../index.php");
?>