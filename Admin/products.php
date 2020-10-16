<?php
include 'header.php';
include 'sidebar.php';
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
                    <li><a href="#tab1" class="default-tab">Manage</a></li> <!-- href must be unique and match the id of target div -->
                    <li><a href="#tab2">Add</a></li>
                </ul>
                
                <div class="clear"></div>
                
            </div> <!-- End .content-box-header -->
            
            <div class="content-box-content">
                
                <div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
                    
                    <div class="notification attention png_bg">
                        <a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
                        <div>
                            This is a Content Box. You can put whatever you want in it. By the way, you can close this notification with the top-right cross.
                        </div>
                    </div>
                    
                    <table>
                        
                        <thead>
                            <tr>
                               
                                <th>SR_NO</th>
                                <th>NAME</th>
                                <th>PRICE</th>
                                <th>Image</th>
                                <th>Category</th>
                                <th>Tags</th>
                                <th>COLOR</th>
                                <th>Discription</th>
                                <th>Action</th>
                                
                            </tr>
                            
                        </thead>
                        
                        <tfoot>
                            <tr>
                                <td colspan="6">
                                    <div class="bulk-actions align-left">
                                        <select name="dropdown">
                                            <option value="option1">Choose an action...</option>
                                            <option value="option2">Edit</option>
                                            <option value="option3">Delete</option>
                                        </select>
                                        <a class="button" href="#">Apply to selected</a>
                                    </div>
                                    
                                    <div class="pagination">
                                        <a href="#" title="First Page">&laquo; First</a><a href="#" title="Previous Page">&laquo; Previous</a>
                                        <a href="#" class="number" title="1">1</a>
                                        <a href="#" class="number" title="2">2</a>
                                        <a href="#" class="number current" title="3">3</a>
                                        <a href="#" class="number" title="4">4</a>
                                        <a href="#" title="Next Page">Next &raquo;</a><a href="#" title="Last Page">Last &raquo;</a>
                                    </div> <!-- End .pagination -->
                                    <div class="clear"></div>
                                </td>
                            </tr>
                        </tfoot>
                        
                        <tbody>
                            <tr>
                            <?php include 'products_show.php';?>
                        </tbody>
                        
                    </table>
                    
                </div> <!-- End #tab1 -->
                
                <div class="tab-content" id="tab2">
                
                    <form action="products_insert.php" method="post" enctype="multipart/form-data">
                        
                        <fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
                            
                            <p>
                                <label>Name</label>
                                    <input class="text-input small-input" type="text" id="" name="pro_name"" /> 
                                    <br /><small>Enter a Category_ID by which you can easly classify the content about product</small>
                            </p>
                            <p>
                                <label>Price</label>
                                    <input class="text-input small-input" type="text" id="" name="pro_price" /> 
                                    <br /><small>Eneter a specific product name </small>
                            </p>
                            <p>
                                <label>Image</label>
                                <input type="file" name="pro_image" id="fileToUpload"   /> 
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
                                        <input type="checkbox" value="<?php echo $row["ID"] ?>" name='pro_tags[]'/><?php echo $row["NAME"] ?>
                
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
                                        <textarea class="text-input textarea wysiwyg" id="textarea" name="pro_discription" cols="79" rows="15"></textarea>
                                    </p>
                            
                            
                            
                            <p>
                                <input class="button" type="submit" value="Submit" />
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
