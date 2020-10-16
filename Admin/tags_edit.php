<?php
//id=' . $row["ID"] . ' &name=' . $row["NAME"] . ' &price=' . $row["PRICE"] . ' &short_disc=' . $row["SHORT_DISCRIPTION"] . ' &long_disc=' . $row["LONG_DISCRIPTION"] . ' &category_id=' . $row["CATEGORY_ID"] . ' " 
include 'header.php';
include 'sidebar.php';
include 'config.php';

$tag_name = $_GET['tag_name'];
$tag_id = $_GET['tag_id'];


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
                <form action="tags_update.php" method="post">
							
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
                                <input type="hidden" value="<?php echo $tag_id; ?>" name="tag_id"/>
                                <p>
									<label>Tags_Name</label>
										<input class="text-input small-input" type="text" id="small-input" name="tag_name" value="<?php echo $tag_name; ?>"/> 
										<br /><small>Eneter a specific Tags name </small>
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

