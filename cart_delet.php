<?php
include 'admin/config.php';
$name = $_GET['name'];

$sql = "DELETE  FROM add_to_cart WHERE `NAME` = '" . $name . "'";
if ($conn->query($sql) === true) {
    echo "deleted Success";
    header('location:cart.php');
} else {
    echo "error in deletion" . $conn->error;
}
?>