<?php
include 'config.php';
echo "ranaryan";

$id = $_POST['user_id'];
$name = $_POST['user_name'];
$email = $_POST['user_email'];
$dob = $_POST['user_dob'];
$address = $_POST['user_address'];
$sql  = "UPDATE categories SET `NAME`='" . $name . "' WHERE `ID`= '$id' ";
        $sql  = "UPDATE  users SET  `NAME` ='" . $name . "', `E_MAIL`='" . $email . "', `DOB`='" . $dob . "', `ADDRESS`= '" . $address . "' WHERE `ID`='" . $id . "' ";
         
    // //$error = array('insert' => 'data not inserted succesfully','msg' => )

    if ($conn->query($sql) === true) {
        echo "Record inserted Successfully";
        header('location:users.php');
    } else {
        echo "Error " . $conn->error;
    }


print_r($_POST);
 