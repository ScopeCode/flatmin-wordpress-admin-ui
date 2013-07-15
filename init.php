// ADMIN INIT + paste in your function.php file or make a "require once"
function admin_css() {
    $url = get_option('siteurl');
    $dir = $url . '/wp-content/themes/yourcooltheme/yourcoollib/';
    echo '<link rel="stylesheet" type="text/css" href="' . $dir . '/yourpathto/wp-admin.css" />';
   /* if needed can add some js 
    echo '<script type="text/javascript" src="' . $dir .'/admin/admin_theme/compile.js"></script>';
    echo '<script type="text/javascript" src="' . $dir .'/admin/admin_theme/select-init.js"></script>';
*/
}
