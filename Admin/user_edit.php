<?php
//id=' . $row["ID"] . ' &name=' . $row["NAME"] . ' &price=' . $row["PRICE"] . ' &short_disc=' . $row["SHORT_DISCRIPTION"] . ' &long_disc=' . $row["LONG_DISCRIPTION"] . ' &category_id=' . $row["CATEGORY_ID"] . ' " 
include 'header.php';
include 'sidebar.php';
include 'config.php';
$id = $_GET['id'];
$name = $_GET['name'];

$email = $_GET['email'];
$dob = $_GET['dob'];
$address = $_GET['address'];


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
                <form action="user_update.php" method="post">
							
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
								
								<p>
									<label>ID</label>
										<input class="text-input small-input" type="text" id="small-input" name="user_id" value="<?php echo $id;?>" /> 
										<br /><small>Enter a Tags_ID by which you can easly classify the content about product</small>
								</p>
                                <p>
									<label>Name</label>
										<input class="text-input small-input" type="text" id="small-input" name="user_name" value="<?php echo $name;?>"/> 
										<br /><small>Eneter a specific Tags name </small>
								</p>
                  
                                <p>
									<label>Email</label>
										<input class="text-input small-input" type="text" id="small-input" name="user_email" value="<?php echo $email;?>" /> 
										<br /><small>Eneter a specific Tags name </small>
								</p>
                                <p>
									<label>DOB</label>
										<input class="text-input small-input" type="date" id="small-input" name="user_dob" value="<?php echo $dob;?>"/> 
										<br /><small>Eneter a specific Tags name </small>
								</p>
                                <p>
									<label>Address</label>
										<input class="text-input small-input" type="text" id="small-input" name="user_address" value="<?php echo $address;?>"/> 
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

