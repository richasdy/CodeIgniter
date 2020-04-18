<?php

include 'koneksi.php';

$username = $_GET["username"];
$password = $_GET["password"];

$cek1 = mysqli_query($connect,"SELECT * from user_login
	where username='$username' and password='$password'");

$cek2 = mysqli_num_rows($cek1);

if($cek2 > 0){
	session_start();
	$row = mysqli_fetch_array($cek1);
	$_SESSION['status'] = "login";
	$_SESSION['id'] = $row['id'];
	header("location:feed.php");
}else{
	header("location:index.php");
}

?>
