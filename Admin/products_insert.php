
<?php
include 'config.php';
echo "ranaryan";


$name = $_POST['pro_name'];
$price = $_POST['pro_price'];
$img_link = $_FILES['pro_image'];
$category = $_POST['pro_cat'];
$color = implode(' , ', $_POST['color']);
$tags_val = implode(' , ', $_POST['pro_tags']);
$discription = $_POST['pro_discription'];
echo $color;
$filename = $img_link['name'];
$filepath = $img_link['tmp_name'];
$fileerror = $img_link['error'];

if ($fileerror === 0) {
    $destfile = 'upload/' . $filename;
    move_uploaded_file($filepath, $destfile);

        $sql  = "INSERT INTO products ( `NAME` , `PRICE`, `IMAGE`, `CATEGORY`, `TAGS`,`COLOR`,`DISCRIPTION`) 
           VALUES ( '$name', '$price', '$destfile','$category', '$tags_val', '$color','$discription')";
    // //$error = array('insert' => 'data not inserted succesfully','msg' => )

    if ($conn->query($sql) === true) {
        echo "Record inserted Successfully";
        header('location:products.php');
    } else {
        echo "Error " . $conn->error;
    }
}

print_r($_POST);
 
?>