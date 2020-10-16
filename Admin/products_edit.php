<?php
//id=' . $row["ID"] . ' &name=' . $row["NAME"] . ' &price=' . $row["PRICE"] . ' &short_disc=' . $row["SHORT_DISCRIPTION"] . ' &long_disc=' . $row["LONG_DISCRIPTION"] . ' &category_id=' . $row["CATEGORY_ID"] . ' " 
include 'header.php';
include 'sidebar.php';
include 'config.php';
$sr_no = $_GET['sr_no'];
$pro_name = $_GET['name'];
$pro_price = $_GET['price'];
$img_link = $_GET['img_link'];
$category = $_GET['category'];
$tags = $_GET['tags'];
$discription = $_GET['discription'];


?>
<body><div id="body-wrapper"> <!-- Wrapper for the radial gradient background --> 
    <div id="main-content"> <!-- Main Content Section with everything -->
        <noscript> <!-- Show a notification if the user has disabled javascript -->
            <div class="notification error png_bg">
                <div>
                    Javascript is disabled or is not supported by your browser. Please <a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface properly.
                </div>
            </div>
        </noscript>        
        <!-- Page Head -->
        <h2>Welcome John</h2>
        <p id="page-intro">What would you like to do?</p>
        <div class="clear"></div> <!-- End .clear -->
        <div class="content-box"><!-- Start Content Box -->
            <div class="content-box-header">   
                <h3>Content box</h3>                
                <ul class="content-box-tabs">                 
                    <li><a href="#tab2" class="default-tab">Add</a></li>
                </ul>               
                <div class="clear"></div>               
            </div> <!-- End .content-box-header -->           
            <div class="content-box-content">                
                <div class="tab-content default-tab" id="tab2">               
                <form action="products_update.php" method="post" enctype="multipart/form-data">
                        
                        <fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
                            <input type="hidden" value="<?php echo $sr_no;?>" name= "sr_no">
                            <p>
                                <label>Name</label>
                                    <input class="text-input small-input" type="text" id="" name="pro_name" value = '<?php echo $pro_name; ?> ' /> 
                                    <br /><small>Enter a Category_ID by which you can easly classify the content about product</small>
                            </p>
                            <p>
                                <label>Price</label>
                                    <input class="text-input small-input" type="text" id="" name="pro_price" value = '<?php echo $pro_price; ?>' /> 
                                    <br /><small>Eneter a specific product name </small>
                            </p>
                            <p>
                                <label>Image</label>
                                <img src="<?php echo $img_link; ?>" height="100" width="100" alt="">
                                <input type="file" name="pro_image" id="fileToUpload"  value = "<?php echo $img_link; ?>" /> 
                                    <br /><small>Eneter a specific product name </small>
                            </p>
                            <p>
                                        <label >Category</label> 
                                        <?php 
                                            include 'config.php';
                                            $sql = "SELECT * FROM categories";
                                            $result = $conn->query($sql);
                                            $row_count = $result->num_rows;
                                        ?>             
                                        <select name='pro_cat' class="small-input">
                                        <?php 
                                        for ($i = 1; $i <= $row_count; $i++) {
                                            $row = $result->fetch_assoc();
                                        ?>
                                            <option value="<?php echo $row["ID"] ?>"><?php echo $row["NAME"] ?></option>
                                            <?php } ?>
                                        </select> 
                                    </p>

                                    <p>
                                        <label >Tags</label>

                                        <?php 
                                            include 'config.php';
                                            $sql = "SELECT * FROM tags";
                                            $result = $conn->query($sql);
                                            $row_count = $result->num_rows;
                                            for ($i = 1; $i <= $row_count; $i++) {
                                                $row = $result->fetch_assoc();
                                        ?>    
                                        <input type="checkbox" value="<?php echo $row["ID"] ?>" name='pro_tags[]'/><?php echo $row["NAME"]; ?>
        
                                            <?php }?>
                                    </p>


                                    <p>
                                        <label >Color</label> 
                                        <?php 
                                            include 'config.php';
                                            $sql = "SELECT * FROM color_table";
                                            $result = $conn->query($sql);
                                            $row_count = $result->num_rows;
                                        ?>             
                                      
                                        <?php 
                                        for ($i = 1; $i <= $row_count; $i++) {
                                            $row = $result->fetch_assoc();
                                        ?>
                                            <input type="checkbox" value="<?php echo $row["ID"] ?>" name='color[]'/><input type="color" value = '<?php echo $row["COLOR"] ?>' disabled>
                                            
                                            <?php } ?>
                                        </select> 
                                    </p>



                                    <p>
                                        <label>Textarea with WYSIWYG</label>
                                        <textarea class="text-input textarea wysiwyg" id="textarea" name="pro_discription" cols="79" rows="15" value = '<?php echo $discription; ?>'></textarea>
                                    </p>
                            
                            
                            
                            <p>
                                <input class="button" type="submit" value="UPDATE" />
                            </p>
                            
                        </fieldset>
                        
                        <div class="clear"></div><!-- End .clear -->
                        
                    </form>
                    
                </div> <!-- End #tab2 -->        
                
            </div> <!-- End .content-box-content -->
            
        </div> <!-- End .content-box -->
        
        
            

        
        
        <!-- Start Notifications -->
        
        <!-- End Notifications -->
        
        <?php include 'footer.php';?>
        
        
    </div> <!-- End #main-content -->
</div>

