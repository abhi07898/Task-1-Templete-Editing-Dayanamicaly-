<?php
include 'config.php';
$sr_no = $_GET['sr_no'];

$sql = "DELETE  FROM products WHERE `SR_NO` = '" . $sr_no . "'";
if ($conn->query($sql) === true) {
    echo "deleted Success";
    header('location:products.php');
} else {
    echo "error in deletion" . $conn->error;
}
?>