<?php
include 'config.php';
echo "ranaryan";

$name = $_POST['cat_name'];


$sql  = "INSERT INTO categories ( `NAME`) values ( '$name')";
//$error = array('insert' => 'data not inserted succesfully','msg' => )

if ($conn->query($sql) === true) {
    echo "Record inserted Successfully";
    header('location:categories.php');
} else {
    echo "Error";
}
?>