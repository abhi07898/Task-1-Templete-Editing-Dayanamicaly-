<?php
include 'config.php';
echo "ranaryan";


$name = $_POST['tag_name'];
$id = $_POST['tag_id'];
echo $id;

$sql  = "UPDATE tags SET `NAME`='" . $name . "' WHERE `ID`= '$id' ";
// //$error = array('insert' => 'data not inserted succesfully','msg' => )

if ($conn->query($sql) === true) {
    echo "Record inserted Successfully";
    header('location:tags.php');
} else {
    echo "Error" . $conn->error;
}
?>