<?php
include 'admin/config.php';
$sr_no=$_GET['sr_no'];

$sql  = "SELECT  `NAME` , `PRICE`, `IMAGE`,  `DISCRIPTION`, `CATEGORY`, `COLOR` FROM products WHERE `SR_NO`='$sr_no'";
    $result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) { ?>
    <form action="cart_insert.php" method="post">
      <input type="hidden" value ='<?php echo $sr_no; ?>' name="cart_srno">
      <div class="col-md-5 col-sm-5 col-xs-12">                              
                  <div class="aa-product-view-slider">                                
                    <div id="demo-1" class="simpleLens-gallery-container">
                      <div class="simpleLens-container">
                        <div class="simpleLens-big-image-container"><a data-lens-image="img/view-slider/large/polo-shirt-1.png" class="simpleLens-lens-image"><img src="admin/<?php echo $row['IMAGE']?>" class="simpleLens-big-image"></a></div>
                        <input type="hidden" value='<?php echo $row['IMAGE']?>', name = 'cart_img'>
                      </div>
                      <div class="simpleLens-thumbnails-container">
                          <a data-big-image="img/view-slider/medium/polo-shirt-1.png" data-lens-image="img/view-slider/large/polo-shirt-1.png" class="simpleLens-thumbnail-wrapper" href="#">
                            <img src="img/view-slider/thumbnail/polo-shirt-1.png">
                          </a>                                    
                          <a data-big-image="img/view-slider/medium/polo-shirt-3.png" data-lens-image="img/view-slider/large/polo-shirt-3.png" class="simpleLens-thumbnail-wrapper" href="#">
                            <img src="img/view-slider/thumbnail/polo-shirt-3.png">
                          </a>
                          <a data-big-image="img/view-slider/medium/polo-shirt-4.png" data-lens-image="img/view-slider/large/polo-shirt-4.png" class="simpleLens-thumbnail-wrapper" href="#">
                            <img src="img/view-slider/thumbnail/polo-shirt-4.png">
                          </a>
                      </div>
                    </div>
                  </div>
                </div> 
     <div class="col-md-7 col-sm-7 col-xs-12">
        
                  <div class="aa-product-view-content">
                    <h3><?php echo $row['NAME'];?></h3>
                      <input type="hidden" value='<?php echo $row['NAME'];?>', name = 'cart_name'>
                    <div class="aa-price-block">
                      <span class="aa-product-view-price"><?php echo $row['PRICE']; ?></span>
                      <input type="hidden" value='<?php echo $row['PRICE']?>', name = 'cart_price'>
                      <p class="aa-product-avilability">Avilability: <span>In stock</span></p>
                    </div>
                    <p><?php echo $row['DISCRIPTION'];?></p>
                    <h4>Size</h4>
                    <div class="aa-prod-view-size">
                      <a href="#">S</a>
                      <a href="#">M</a>
                      <a href="#">L</a>
                      <a href="#">XL</a>
                    </div>
                    <h4>Color</h4>

                     

                    <div class="aa-color-tag">
                      <a href="#" class="aa-color-green"></a>
                      <a href="#" class="aa-color-yellow"></a>
                      <a href="#" class="aa-color-pink"></a>                      
                      <a href="#" class="aa-color-black"></a>
                      <a href="#" class="aa-color-white"></a>                      
                    </div>
                    <div class="aa-prod-quantity">
                      <!-- <form action=""> -->
                        <select id="" name="cart_quantity">
                          
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                        </select>
                      <!-- </form> -->
                      <p class="aa-prod-category">
                        Category: <a href="#"><?php echo $row['CATEGORY'];?></a>
                      </p>
                    </div>
                    <div class="aa-prod-view-bottom">
                    <input type="submit" class="aa-add-to-cart-btn" name="add_to_cart" value = "Add To Cart">
                   
                      <a class="aa-add-to-cart-btn" href="#">Wishlist</a>
                      <a class="aa-add-to-cart-btn" href="#">Compare</a>
                    </div>
                  </div>
                </div>
                <div class="tab-content">
                <div class="tab-pane fade in active" id="description">
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                   <p><?php echo $row['DISCRIPTION'];?></p>
                </div>
              </div>
            </form>    

<?php 
    }
  }
?>
