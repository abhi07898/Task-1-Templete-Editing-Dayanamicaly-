<?php 
include 'admin/config.php';
$sr_no = $_POST['cart_srno'];
$img_link = $_POST['cart_img'];
$name = $_POST['cart_name'];
$price = $_POST['cart_price'];
$quantity = $_POST['cart_quantity'];

$sql  = "INSERT INTO add_to_cart (`SR_NO`, `IMAGE` , `NAME`,`PRICE`, `QUANTITY`) 
VALUES ( '$sr_no','$img_link', '$name', '$price','$quantity')";
// //$error = array('insert' => 'data not inserted succesfully','msg' => )

if ($conn->query($sql) === true) {
    echo "Record inserted Successfully";
    header('location:cart.php');
} else {
    echo "Error " . $conn->error;
        }
    
?>