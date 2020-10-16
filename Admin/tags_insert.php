<?php
include 'config.php';


$name = $_POST['tag_name'];


$sql  = "INSERT INTO tags ( `NAME`) values ( '$name')";
//$error = array('insert' => 'data not inserted succesfully','msg' => )

if ($conn->query($sql) === true) {
    echo "Record inserted Successfully";
    header('location:tags.php');
} else {
    echo "Error";
}
?>