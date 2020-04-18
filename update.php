<?php 
    session_start();
    include 'koneksi.php';

    function EditProfile($data, $conn)
    {
        $id = $_SESSION["user_id"];
        $name = $data["nama"];
        $username = $data["username"];
        $website = $data["website"];
        $bio = $data["bio"];
        $email = $data["email"];
        $number_phone = $data["number_phone"];
        $gender = $data['gender'];

        $query = "UPDATE profile SET name = '$name', username = '$username'  , website = '$website', bio = '$bio', email = '$email', phonenumber = '$number_phone' WHERE id = $id  ";
        $result = mysqli_query($conn, $query);
        return $result;
    }

    if (isset($_POST["submit"])) {
        if (EditProfile($_POST, $conn)) {
            header("Location: profile.php");
        } else {
            header("Location: edit-profile.php");
        }
    }
?>
