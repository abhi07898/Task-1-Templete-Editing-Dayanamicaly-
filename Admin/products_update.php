
<?php
include 'config.php';
echo "ranaryan";

$sr_no = $_POST['sr_no'];
$name = $_POST['pro_name'];
$price = $_POST['pro_price'];
$img_link = $_FILES['pro_image'];
$category = $_POST['pro_cat'];
$tags_val = implode(' , ', $_POST['pro_tags']);
$color = implode(',', $_POST['color']);
$discription = $_POST['pro_discription'];

$filename = $img_link['name'];
$filepath = $img_link['tmp_name'];
$fileerror = $img_link['error'];

if ($fileerror === 0) {
    $destfile = 'upload/' . $filename;
    move_uploaded_file($filepath, $destfile);

        $sql  = "UPDATE products SET  `NAME` ='" . $name . "' , `PRICE`='" . $price . "', `IMAGE`='" . $destfile . "', `CATEGORY`='" . $category . "', `TAGS`='" . $tags_val . "',`COLOR`='" . $color . "', `DISCRIPTION`='" . $discription . "' WHERE `SR_NO`='" . $sr_no . "'  ";
          
    if ($conn->query($sql) === true) {
        echo "Record updated Successfully";
        header('location:products.php');
    } else {
        echo "Error " . $conn->error;
    }
}


 
?>

