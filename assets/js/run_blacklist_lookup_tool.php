<?php 
	$pagetitle="Check an IP address for Blacklisting";
	include "../functions/header.php"; 
	echo '<div id="mainWrap" style="width:990px; margin:0 auto;">'; 
	include "../functions/header-background_image_with_ad.php"; 
	include "../functions/sidebar.php";		
?>
    
	<div id="rcontent">	
    
    	 <div id="text_block">
          	<h1>Are you on an Email Blacklist?</h1>
          	<p> Enter your website's IP address in the box below and click on "lookup" to use our email blacklist tool to check. If your address is found on a blacklist, see our article "<a href="../learning_resources/how_to_get_off_an_email_blacklist.php?p=4">How to get off an Email Blacklist</a>" for more information.  	
          	<br /><br />
            (NOTE: this must be the address that your email is sent from. If you are unsure of what address to enter, contact your server administrator.)   
            <br />
          	</p>
          </div> <!-- text_block -->


		<div id="google_ad">
			<?php include ($_SERVER['DOCUMENT_ROOT'] . "/functions/google_ad-half_banner-bgcolor.php"); ?>
		</div>
        
        <div id="lookup_box">
    
 <?php include "call_lookup_tool.php"; ?> 
    
 <?php include "../functions/addthis_sharing.php"; ?>
    
		</div>
    
    

	</div> <!-- /rcontent -->
    
    <div class="clear"></div>

</div> <!-- /mainWrap -->

<?php include "../functions/footer.php"; ?>



   




