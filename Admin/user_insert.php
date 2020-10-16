
<?php
include 'config.php';
echo "ranaryan";

$id = $_POST['user_id'];
$name = $_POST['user_name'];
$password = $_POST['user_password'];
$email = $_POST['user_email'];
$dob = $_POST['user_dob'];
$address = $_POST['user_address'];

        $sql  = "INSERT INTO users ( `ID`, `NAME` , `PASSWORD`, `E_MAIL`, `DOB`, `ADDRESS`) 
           VALUES ( '$id','$name', '$password', '$email','$dob', '$address')";
    // //$error = array('insert' => 'data not inserted succesfully','msg' => )

    if ($conn->query($sql) === true) {
        echo "Record inserted Successfully";
        header('location:users.php');
    } else {
        echo "Error " . $conn->error;
    }


print_r($_POST);
 
?>