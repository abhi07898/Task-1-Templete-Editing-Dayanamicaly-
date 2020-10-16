<?php
include 'config.php';
$id = $_GET['id'];

$sql = "DELETE  FROM users WHERE `ID` = '" . $id . "'";
if ($conn->query($sql) === true) {
    echo "deleted Success";
    header('location:users.php');
} else {
    echo "error in deletion" . $conn->error;
}
?>