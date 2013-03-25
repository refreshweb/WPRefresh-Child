<?php
// Contextual Help
function my_contextual_help( $contextual_help, $screen_id, $screen ) { 

   	# Uncomment this to see actual screen
   	# echo 'Screen ID = '.$screen_id.'<br />';
	
	// Editing Portfolio
	if ( 'portfolio' == $screen->id ) {

		$contextual_help = '<h2>Adding / Editing  Portfolio</h2>
		<p>This page allows you to modify/add Pioneer portfolio pieces. When adding a portfolio piece please remember to enter the title, description, genre, and to upload an image with the Featured Image meta box on the bottom right side of your administration panel.</p>
		<p>To add additional photos to create the slideshow effect on the portfolio page of the website you will need to add additional images by selecting the Upload/Insert media icon that is above the text editor. Add the media files and upload them and then enter the appropriate description in the title fields for the images. Save the changes and exit out of the modal window. Be sure to publish by saving.</p>';

	// Portfolio	
	} elseif ( 'edit-portfolio' == $screen->id ) {

		$contextual_help = '<h2>Portfolio Items</h2>
		<p>This page allows you to view/modify/add Pioneer portfolio pieces for display on your website. </p>
		<p>You can view/edit the details of each product by clicking on its name, or you can perform bulk actions using the dropdown menu and selecting multiple items.</p>';

	}
	
	
	return $contextual_help;
	
}
//add_action( 'contextual_help', 'my_contextual_help', 10, 3 );