<?php
include 'config.php';
$id = $_GET['id'];
echo $id;
$sql = "DELETE  FROM color_table WHERE `ID` = '" . $id . "'";
if ($conn->query($sql) === true) {
    echo "deleted Success";
    header('location:colors.php');
} else {
    echo "error in deletion" . $conn->error;
}
?>