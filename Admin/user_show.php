<?php

include 'config.php';
$sql  = "SELECT `ID`, `NAME` , `E_MAIL`, `DOB`, `ADDRESS` FROM users"; 
    $result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<td>' . $row["ID"] . ' </td>';
        echo '<td>' . $row["NAME"] . ' </td>';
        echo '<td>' . $row["E_MAIL"] . '</td>';
        echo '<td>' . $row["DOB"] . '</td>';
        echo '<td>' . $row["ADDRESS"] . '</td>';
        
        echo ' <td>
            <!-- Icons -->
            <a href="user_edit.php?id=' . $row["ID"] . ' &name=' . $row["NAME"] . ' &email=' . $row["E_MAIL"] . ' &dob=' . $row["DOB"] . ' &address=' . $row["ADDRESS"] . ' " title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>
            <a href="user_delete.php?id=' . $row["ID"] . ' &name=' . $row["NAME"] . ' &email=' . $row["E_MAIL"] . ' &dob=' . $row["DOB"] . ' &address=' . $row["ADDRESS"] . '"  title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a> 
            <a href="#" title="Edit Meta"><img src="resources/images/icons/hammer_screwdriver.png" alt="Edit Meta" /></a>
        </td> </tr>';

    }
}
?>