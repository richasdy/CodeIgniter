<?php
	session_start();
	include "koneksi.php";
	function update($data,$connect){
		$id = $_SESSION["id"];
		$name = $data["name"];
		$username = $data["username"];
		$website = $data["website"];
		$bio = $data["bio"];
		$email = $data["email"];
		$phone_number = $data["phone_number"];
		$gender = $data["gender"];

		$hasil = "UPDATE profile SET name='$name', username='$username', website='$website', bio='$bio', email='$email', phone_number='$phone_number', gender='$gender' WHERE id='$id' ";
		$hasil2 = "UPDATE user_login SET username='$username', email='$email' WHERE id='$id' ";
		$query = mysqli_query($connect, $hasil);

		return $query;
	}

	if (isset($_POST["submit"])) {
        if (update($_POST, $connect)) {
            header("Location: profile.php");
        } else {
            header("Location: edit-profile.php");
        }
    }
?>

