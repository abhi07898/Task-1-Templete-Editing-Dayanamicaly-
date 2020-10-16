<?php
include 'config.php';
$id = $_GET['id'];
echo $id;
$sql = "DELETE  FROM categories WHERE `ID` = '" . $id . "'";
if ($conn->query($sql) === true) {
    echo "deleted Success";
    header('location:categories.php');
} else {
    echo "error in deletion" . $conn->error;
}


?>