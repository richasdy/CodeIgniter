<?php 
	session_start();

	include 'koneksi.php';
	
	$username = $_GET['username'];
	$password = $_GET['password'];

	$result = mysqli_query($conn,"select * from user where username='$username' and password='$password'" );

	$cek = mysqli_num_rows($result);
	
	if($cek > 0){
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "login";
		while($row = mysqli_fetch_assoc($result)) {
			$_SESSION['user_id'] = $row['id'];
		}
		header("location:feed.html");
	}else{
		header("location:index.php?pesan=gagal");	
	} 
?>
