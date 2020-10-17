<?php include 'admin/config.php';?>
<?php
$limit = 3;

if (isset($_GET['page'])) {
   $page = $_GET['page'];
} else {
    $page = 1;
}
$offset = ($page - 1)* $limit;

$sql  = "SELECT `SR_NO`, `NAME` , `PRICE`, `IMAGE`,  `DISCRIPTION` FROM products LIMIT {$offset}, {$limit}";
    $result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) { ?>
        <li>
    <figure>
    <a class="aa-product-img" href='product-detail.php?sr_no=<?php echo $row["SR_NO"]; ?>'><img src="admin/<?php echo $row["IMAGE"]; ?>" alt="polo shirt img"></a>
    <a class="aa-add-card-btn"href='product-detail.php?sr_no=<?php echo $row["SR_NO"]; ?>'><span class="fa fa-shopping-cart"></span>Add To Cart</a>
    <figcaption>
        <h4 class="aa-product-title"><a href='product-detail.php?sr_no=<?php echo $row["SR_NO"]; ?>'>'<?php echo $row["NAME"]; ?>'</a></h4>
        <span class="aa-product-price">'<?php echo $row["PRICE"]; ?>'</span><span class="aa-product-price"><del>$65.50</del></span>
        <p class="aa-product-descrip">'<?php echo $row["DISCRIPTION"]; ?>'</p>
    </figcaption>
    </figure>                         
    <div class="aa-product-hvr-content">
    
    <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>                            
    </div>
    <!-- product badge -->
    <span class="aa-badge aa-sale" href="#">SALE!</span>
</li>
<?php
        // echo '<td>' . $row["SR_NO"] . ' </td>';
        // echo '<td>' . $row["NAME"] . ' </td>';
        // echo '<td>' . $row["PRICE"] . '</td>';
        // echo '<td> <img src = ' . $row["IMAGE"] . ' height="100" width="100"></td>';
        // echo '<td>' . $row["CATEGORY"] . '</td>';
        // echo '<td>' . $row["TAGS"] . '</td>';
        // echo '<td><input type="color" value =  ' . $row["COLOR"] . ' disabled></td>';
        // echo '<td>' . $row["DISCRIPTION"] . '</td>';
        
        
        // echo ' <td>
        //     <!-- Icons -->
        //     <a href="products_edit.php?sr_no=' . $row["SR_NO"] . ' &name=' . $row["NAME"] . ' &price=' . $row["PRICE"] . ' &img_link=' . $row["IMAGE"] . ' &category=' . $row["CATEGORY"] . '&tags=' . $row["TAGS"] . '&discription=' . $row["DISCRIPTION"] . ' " title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>
        //     <a href="products_delete.php?sr_no=' . $row["SR_NO"] . ' &name=' . $row["NAME"] . ' &price=' . $row["PRICE"] . ' &img_link=' . $row["IMAGE"] . ' &category=' . $row["CATEGORY"] . '&tags=' . $row["TAGS"] . '&discription=' . $row["DISCRIPTION"] . '"  title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a> 
        //     <a href="#" title="Edit Meta"><img src="resources/images/icons/hammer_screwdriver.png" alt="Edit Meta" /></a>
        // </td> </tr>';

    }
}
?>
