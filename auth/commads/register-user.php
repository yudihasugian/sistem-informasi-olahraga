<?php 
include '../../DB/connection.php';

function register_user($email, $password, $nama, $photo)
{
	global $connection;
	if($photo != ""){
 		$extension_accepted = ['png','jpg','svg'];
 		$x = explode('.', $photo);
 		$extension = strtolower(end($x));
 		$file_tmp = $_FILES['photo']['tmp_name'];
 		$rand = rand(1, 999);
 		$new_name = $rand . '-' . $photo;

 		if(in_array($extension, $extension_accepted)){
 			move_uploaded_file($file_tmp,'../../public/picture/' . $new_name);
 			$query = "INSERT INTO user (email,password,nama,photo) VALUES(
 				'$email','$password','$nama','$new_name'
 			)";
 		$result = mysqli_query($connection , $query);	
	 		if (!$result) {
	 			die("Query gagal: " . mysqli_errno($connection).
	 				" - " . mysqli_error($connection));
	 		} 
 		else{
 			header("Location:../register.php?message=3");
 		}

 	}
 	else{
 		$query = "INSERT INTO user (email,password,nama) VALUES(
 			'$email','$password','$nama'
 		)";
 		$result = mysqli_query($connection , $query);
 		if (!$result) {
 			die("Query gagal: " . mysqli_errno($connection).
 				" - " . mysqli_error($connection));
 		} 
 	}
}
}

if (isset($_POST['submit'])) {
	$nama = filter_input(INPUT_POST,'nama',FILTER_SANITIZE_STRING);
	$email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);
	$password = password_hash($_POST['password'], PASSWORD_BCRYPT);

	$photo = $_FILES['photo']['name'];

	$queryValidation = "SELECT * FROM user WHERE email = '$email'";
	$resultValidation = mysqli_num_rows(mysqli_query($connection, $queryValidation));
	if ($resultValidation > 0) {
		header("Location:../register.php?message=1");
	}else{
		register_user($email, $password, $nama, $photo);
		header("Location:../register.php?message=2");
	}
}
?>