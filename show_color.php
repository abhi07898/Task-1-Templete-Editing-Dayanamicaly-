<?php include 'admin/config.php';?>

<?php

$sql  = "SELECT `COLOR`,`ID`  FROM color_table";
    $result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) { ?>
                <a href="show_color_products.php?color_id=<?php echo $row['ID']; ?>"><input type="color" value ="<?php echo $row['COLOR']?>" disabled></a>
        <?php
    }
}?>