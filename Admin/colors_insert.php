<?php
include 'config.php';
echo "ranaryan";

$name = $_POST['color_name'];


$sql  = "INSERT INTO color_table ( `COLOR`) values ( '$name')";
//$error = array('insert' => 'data not inserted succesfully','msg' => )

if ($conn->query($sql) === true) {
    echo "Record inserted Successfully";
    header('location:colors.php');
} else {
    echo "Error";
}
?>