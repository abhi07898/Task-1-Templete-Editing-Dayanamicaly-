<?php
include 'config.php';
$id = $_GET['tag_id'];
echo $id;
$sql = "DELETE  FROM tags WHERE `ID` = '" . $id . "'";
if ($conn->query($sql) === true) {
    echo "deleted Success";
    header('location:tags.php');
} else {
    echo "error in deletion" . $conn->error;
}


?>