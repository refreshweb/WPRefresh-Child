<?php
/* Admin Welcome */
function refreshweb_admin_welcome() {
global $current_user;
get_currentuserinfo();	 
echo '
<div class="welcome-panel-content">
<h3 class="welcome">';
bloginfo('name');
echo ', Welcome to your New Website!</h3>
<i class="icon-repeat icon-15x refresh-link floatleft" title="Developed by Refresh Web Marketing"></i>
<p class="about-description">';
echo $current_user->user_firstname;
echo ', follow the simple instructions below to update the dynamic features and content of your new ';
echo get_bloginfo('name');
echo ' website. If you need help getting started, use our <a href="http://refreshwebmarketing.com/website-support/?company='.get_bloginfo('name').'&website='.get_bloginfo('url').'&email='.$current_user->user_email.'&firstname='.$current_user->user_firstname.'&lastname='.$current_user->user_lastname.'" target="_blank">support form</a> or contact us by phone at 319.535.0796.
</p>
<div class="clearfix"></div>
<div class="welcome-panel-column-container">
<div class="welcome-panel-column">
<h4>
<span class="icon16 icon-settings"></span>
Basic Settings
</h4>
<p>Here are a few easy things you can do to get your feet wet. Make sure to click Save on each Settings screen.</p>
<ul>
<li>
<a href="#">Choose your privacy setting</a>
</li>
<li>
<a href="#">Select your tagline and time zone</a>
</li>
<li>
<a href="#">Turn comments on or off</a>
</li>
<li>
<a href="#">Fill in your profile</a>
</li>
</ul>
</div>
<div class="welcome-panel-column">
<h4>
<span class="icon16 icon-settings"></span>
Basic Instructions
</h4>
<p>Here are a few easy things you can do to get your feet wet. Make sure to click Save on each Settings screen.</p>
<ul>
<li>
<a href="#">Choose your privacy setting</a>
</li>
<li>
<a href="#">Select your tagline and time zone</a>
</li>
<li>
<a href="#">Turn comments on or off</a>
</li>
<li>
<a href="#">Fill in your profile</a>
</li>
</ul>
</div>
<div class="welcome-panel-column welcome-panel-last">
<h4>
<span class="icon16 icon-appearance"></span>
Customize Your Site
</h4>
<p>
Use the current theme — Impact Starter — or
<a href="#">choose a new one</a>
. If you stick with Impact Starter, here are a few ways to make your site look unique.
</p>
<ul>
<li>
<a href="#">Add some widgets</a>
</li>
</ul>
</div>
</div>
</div>
<div class="clearfix"></div>';
	 }   
add_action('admin_notices', 'refreshweb_admin_welcome', 1);

//  Add an metabox for support into the dashboard and remove default meta boxes
function mycustom_dashboard_widgets() {
global $wp_meta_boxes;
	wp_add_dashboard_widget('custom_help_widget', 'Company Information', 'custom_dashboard_help');
}

function custom_dashboard_help() { 
    
	global $post;
	
	$args = array(
		'post_type' => 'company'
	);
	
	$the_query = new WP_Query( $args );
	
	
	if ( $the_query->have_posts() ) :
    
	// The Loop
	while ( $the_query->have_posts() ) :
		$the_query->the_post();
		echo '<div class="location">';
		echo '<h4>' . get_the_title() . '</h4>';
		if (get_post_meta( $post->ID, '_cmb_contact_address1', true )) {
			echo get_post_meta( $post->ID, '_cmb_contact_address1', true );
		}
		if (get_post_meta( $post->ID, '_cmb_contact_address2', true )) {
			echo '&nbsp;';
			echo get_post_meta( $post->ID, '_cmb_contact_address2', true );
		}
		echo '</br>';
		if (get_post_meta( $post->ID, '_cmb_contact_city', true )) {
			echo '<strong>';
			echo get_post_meta( $post->ID, '_cmb_contact_city', true );
			echo '</strong>';
		}
		if ((get_post_meta( $post->ID, '_cmb_contact_city', true )) && (get_post_meta( $post->ID, '_cmb_contact_state', true ))) {
			echo ', &nbsp;';
		}
		if (get_post_meta( $post->ID, '_cmb_contact_state', true )) {
			echo '<strong>';
			echo get_post_meta( $post->ID, '_cmb_contact_state', true );
			echo '</strong>';
		}
		if (get_post_meta( $post->ID, '_cmb_contact_zip', true )) {
			echo '&nbsp;';
			echo get_post_meta( $post->ID, '_cmb_contact_zip', true );
		}
		
		if ((get_post_meta( $post->ID, '_cmb_contact_phone', true )) || (get_post_meta( $post->ID, '_cmb_contact_phonetf', true )) || (get_post_meta( $post->ID, '_cmb_contact_fax', true ))) {
		echo '<div class="metabox-contact-info">';
			if (get_post_meta( $post->ID, '_cmb_contact_phone', true )) {
				echo '<strong>Phone</strong>';
				echo get_post_meta( $post->ID, '_cmb_contact_phone', true );
			}
			if (get_post_meta( $post->ID, '_cmb_contact_phonetf', true )) {
				echo '</br><strong>Toll Free</strong>';
				echo get_post_meta( $post->ID, '_cmb_contact_phonetf', true );
			}
			if (get_post_meta( $post->ID, '_cmb_contact_fax', true )) {
				echo '</br><strong>Fax</strong>';
				echo get_post_meta( $post->ID, '_cmb_contact_fax', true );
			}
		echo '</div>';	
		}
		
		echo '<br/>';
		echo edit_post_link();
		echo '</div>';	
		
	endwhile;
	
	else : ?>
		<div class="no-content-entry-content">
			<a href="/wp-admin/edit.php?post_type=company" class="no-info btn btn-large btn-danger">Add Company Information</a>
		</div><!-- .entry-content -->
	<?php endif;
	
	/* Restore original Post Data 
	 * NB: Because we are using new WP_Query we aren't stomping on the 
	 * original $wp_query and it does not need to be reset.
	*/
	wp_reset_postdata();
}
	
add_action('wp_dashboard_setup', 'mycustom_dashboard_widgets');
?>