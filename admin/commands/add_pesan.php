<?php
include '../../db/connection.php';

 if(isset($_POST['submit'])){
 	$nama = $_POST['nama'];
 	$email = $_POST['email'];
	$comen = $_POST['comen'];

 	if($nama != ""){
 			$chat = "INSERT INTO comment (nama,email,comen) VALUES('$nama','$email','$comen')";
            echo "<script>info('berhasil')window.location='#';</script>";
			$result = mysqli_query($connection , $chat);
			if (!$result) {
				die("Query gagal: " . mysqli_errno($connection).
					" - " . mysqli_error($connection));
			} else {
				header("Location:../../news.php");
				}
 		}
 }
?>