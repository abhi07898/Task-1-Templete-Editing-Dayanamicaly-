<?php

include 'config.php';
$sql  = "SELECT `SR_NO`,`NAME` , `PRICE`, `IMAGE`, `CATEGORY`, `TAGS`,`COLOR`, `DISCRIPTION` FROM products"; 
    $result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<td>' . $row["SR_NO"] . ' </td>';
        echo '<td>' . $row["NAME"] . ' </td>';
        echo '<td>' . $row["PRICE"] . '</td>';
        echo '<td> <img src = ' . $row["IMAGE"] . ' height="100" width="100"></td>';
        echo '<td>' . $row["CATEGORY"] . '</td>';
        echo '<td>' . $row["TAGS"] . '</td>';
        echo '<td><input type="color" value =  ' . $row["COLOR"] . ' disabled></td>';
        echo '<td>' . $row["DISCRIPTION"] . '</td>';
        
        
        echo ' <td>
            <!-- Icons -->
            <a href="products_edit.php?sr_no=' . $row["SR_NO"] . ' &name=' . $row["NAME"] . ' &price=' . $row["PRICE"] . ' &img_link=' . $row["IMAGE"] . ' &category=' . $row["CATEGORY"] . '&tags=' . $row["TAGS"] . '&discription=' . $row["DISCRIPTION"] . ' " title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>
            <a href="products_delete.php?sr_no=' . $row["SR_NO"] . ' &name=' . $row["NAME"] . ' &price=' . $row["PRICE"] . ' &img_link=' . $row["IMAGE"] . ' &category=' . $row["CATEGORY"] . '&tags=' . $row["TAGS"] . '&discription=' . $row["DISCRIPTION"] . '"  title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a> 
            <a href="#" title="Edit Meta"><img src="resources/images/icons/hammer_screwdriver.png" alt="Edit Meta" /></a>
        </td> </tr>';

    }
}
?>