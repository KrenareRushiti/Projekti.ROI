<?php
session_start();

include_once('connection.php');


if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $address = $_POST['address'];
    $position = $_POST['position'];


    $sql = "UPDATE members SET name ='$name', surname ='$surname', address = '$address' position = '$position' WHERE id ='$id'";
	
    if($conn->query($sql)){
			$_SESSION['success'] = 'Member updated successfully';
	}else{
        $_SESSION['error'] ="Something went wrong, check again!";
    }
}else {
    $_SESSION['error']= "Select member to edit first";
}

header('location: index.php');


?>