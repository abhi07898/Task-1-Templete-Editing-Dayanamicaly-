<?php 

include 'admin/config.php';?>

                          <?php
                            $sql  = "SELECT `SR_NO`, `IMAGE`,`NAME` , `PRICE`, `QUANTITY` FROM add_to_cart ";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) { 
                                    $name = $row['NAME'];
                                    $link = $row['IMAGE'];
                                    $price = $row['PRICE'];
                                    $quant = $row['QUANTITY'];
                                    // foreach ($_SESSION as $pro => $val) {
                                    //     if ($pro == $key) {
                                    //         $quant=$val[3] +1 ;
                                    //     }
                                    //     // $prod = array($name , $link, $price, $quant);
                                    //     // $_SESSION[$name] = $prod;
                                    // }
                                    
                                    $prod = array($name , $link, $price, $quant);
                                    $_SESSION[$name] = $prod;
                                    
                                }
                            }?>
        <table class="table">
                    <thead>
                      <tr>
                        <th>ACTION</th>
                        <th>PRODUCT</th>
                        <th>IMAGE</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                      </tr>
                    </thead>
<?php
$amount = 0;
$p = 0;
$q = 0;
$total = 0;
echo '<tbody>';
                    
foreach ($_SESSION as $product) {
    echo '<tr>';
    echo '<td><a class="remove" href="#"><fa class="fa fa-close"></fa></a></td>';
    foreach ($product as $key => $value) {
       
        
        if ($key == 0) {                  
            echo " <input type='hidden' value='" . $value . "' name='name$key'></td>";
            echo "<td> " . $value . "</td>";
           
        } elseif ($key == 1) {
            echo "<input type='hidden' name='name$key' value= '" . $value . "'>";
           
            echo "<td> <img src = admin/"  . $value . "> </td>";
           
        } elseif ($key == 2) {
            echo "<input type='hidden' name='name$key' value="  . $value . ">";
            echo "<td> Rs. " . $value . "</td>";
            $p = $value;
        } elseif ($key == 3) {
            echo "<td><input type='text' name='name$key' value="  . $value . "></td>";
            echo "<input type='hidden' name='name$key' value="  . $value . ">";
            $q = $value;
        }
    }
    $amount = ($q * $p);
	echo ' <td> Rs. ' . ($amount) . '</td>';   
    echo '</tr>'; 
    $total = $amount + $total;    
} 
echo '</tbody>';
echo '</tbody>'; 
?>
