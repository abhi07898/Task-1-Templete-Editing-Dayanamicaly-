<?php
include 'admin/config.php';

$sql1 = "SELECT * FROM products";
$result1 = $conn->query($sql1);
if ($result1->num_rows > 0) { 
    $total_records = mysqli_num_rows($result1);
    $limit = 3;
    $total_page = ceil($total_records/ $limit);
    if ($page>1) {
    echo '  <li>
            <a href="product.php?page='.($page-1).'" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            </a>
            </li>';
    }
    for ($i=1; $i<=$total_page; $i++) {
            echo '<li><a href="product.php?page='.$i.'">'.$i.'</a></li>';
    }
    if ($total_page > $page) {
        echo '<li>
                <a href="product.php?page='.($page+1).'" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                </a>    
            </li>';
    }

    
}
?>