<?php 
/*
Theme Name: Flatmin
Theme URI: http://inkcreativ.com
Description: Wordress admin theme
Author: JBL for Inkcreativ
Author URI: http://inkcreativ.com
*/


function admin_css() 
{
    $url = get_option('siteurl');
    echo '<link rel="stylesheet" type="text/css" href="'.get_bloginfo('template_directory').'/    		admin_theme/wp-admin.css" />';

}
add_action('admin_enqueue_scripts', 'admin_css');

//LOGIN STYLING 

function custom_login_css() 
{ 
	echo '<link rel="stylesheet" type="text/css" href="'.get_bloginfo('template_directory').'/			admin_theme/wp-admin.css" />';
}
add_action('login_head', 'custom_login_css');

add_filter( 'login_headerurl', 'custom_login_header_url' );
function custom_login_header_url() 
{
  return home_url();
}

//changing the logo + REPLACE WITH YOUR OWN LOGO +
function my_custom_login_logo() 
{ ?>
	  <a href="<?php echo home_url(); ?>">
	  	<div class="logologin">
	  	<img  src="<?php echo get_template_directory_uri();?>/admin_theme/images/toplogo.png">
	  	</div>
	  </a>
<?php
}
add_action('login_head', 'my_custom_login_logo');

?>
