<?php
include 'config.php';
echo "ranaryan";


$name = $_POST['cat_name'];
$id = $_POST['cat_id'];
echo $id;

$sql  = "UPDATE categories SET `NAME`='" . $name . "' WHERE `ID`= '$id' ";
// //$error = array('insert' => 'data not inserted succesfully','msg' => )

if ($conn->query($sql) === true) {
    echo "Record inserted Successfully";
    header('location:categories.php');
} else {
    echo "Error" . $conn->error;
}
?>
?>