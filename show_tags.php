<?php include 'admin/config.php';?>

<?php

$sql  = "SELECT `NAME`,`ID`  FROM tags";
    $result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) { ?>
                <a href="show_tags_products.php?tag_id=<?php echo $row['ID'];?>"><?php echo $row['NAME'];?></a>
        <?php
    }
}?>