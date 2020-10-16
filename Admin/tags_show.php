<?php
include 'config.php';
$sql = "SELECT `ID`, `NAME`  FROM tags";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<td><input type="checkbox" /></td>';
        
        echo '<td>' . $row["ID"] . ' </td>';
        echo '<td>' . $row["NAME"] . '</td>';
        echo ' <td>
            <!-- Icons -->
            <a href="tags_edit.php?tag_id=' . $row["ID"] . ' &tag_name=' . $row["NAME"] . '" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>
            <a href="tags_delete.php?tag_id=' . $row["ID"] . ' &tag_name=' . $row["NAME"] . '"  title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a> 
            <a href="#" title="Edit Meta"><img src="resources/images/icons/hammer_screwdriver.png" alt="Edit Meta" /></a>
        </td> </tr>';
        
    }
}
					?>