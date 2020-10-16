<?php
include 'config.php';
echo "ranaryan";


$name = $_POST['color_name'];
$id = $_POST['color_id'];
echo $id;

$sql  = "UPDATE color_table SET `COLOR`='" . $name . "' WHERE `ID`= '$id' ";
// //$error = array('insert' => 'data not inserted succesfully','msg' => )

if ($conn->query($sql) === true) {
    echo "Record inserted Successfully";
    header('location:colors.php');
} else {
    echo "Error" . $conn->error;
}
?>
?>