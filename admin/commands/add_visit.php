<?php
include '../../db/connection.php';

 if(isset($_POST['submit'])){
 	$judul_berita = $_POST['judul_berita'];
	$tanggal = $_POST['tanggal'];
	$description = $_POST['description'];
 	$image = $_FILES['image']['name'];

 	if($image != ""){
 		$extension_accepted = ['png','jpg','svg','jepg'];
 		$x = explode('.', $image);
 		$extension = strtolower(end($x));
 		$file_tmp = $_FILES['image']['tmp_name'];
 		$rand = rand(1, 999);
 		$new_name = $rand . '-' . $image;

 		if(in_array($extension, $extension_accepted)){
 			move_uploaded_file($file_tmp,'../../public/picture/' . $new_name);
 			$query = "INSERT INTO news (judul_berita,image,tanggal,description) VALUES(
 				'$judul_berita','$new_name','$tanggal','$description'
 			)";
 		$result = mysqli_query($connection , $query);	
	 		if (!$result) {
	 			die("Query gagal: " . mysqli_errno($connection).
	 				" - " . mysqli_error($connection));
	 		} else {
	 			header("Location: ./../index.php");
	 			}
 		}
 		else{
 			echo "<script>alert('ekstensi tidak diperbolehkan')window.location='../index.php';</script>";
 		}

 	}
 	else{
 		$query = "INSERT INTO news (judul_berita,tanggal,description) VALUES(
 			'$judul_berita','$tanggal','$description')";
 		$result = mysqli_query($connection , $query);
 		if (!$result) {
 			die("Query gagal: " . mysqli_errno($connection).
 				" - " . mysqli_error($connection));
 		} else {
 			header("Location: ../../index.php");
 		}
 	}
 	
 }
 else{
 	echo "error";
 }
?>