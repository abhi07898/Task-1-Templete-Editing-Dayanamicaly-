<?php include 'admin/config.php';?>

<?php

$sql  = "SELECT `NAME`,`ID`  FROM categories";
    $result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) { ?>
                <li><a href="show_category_products.php?cat_id=<?php echo $row['ID'];?>"><?php echo $row['NAME'];?></a></li>
        <?php
    }
}?>