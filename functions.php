<?php
/**
 * @package WordPress
 * @subpackage 
*/

require_once('classes/moon-base.php');
MoonBase::init();


/**
* add_site_styles function.
* Add site styles to the head of the theme
* @access public
* @return void
*/	
function add_site_styles(){

}

/**
 * add_site_scripts function.
 * Add site scripts to the theme. Most will go in Footer for fastest loading.
 * @access public
 * @return void
 */
function add_site_scripts() {

?>
<script type="text/javascript">
	var AJAX_URL = '<?php echo admin_url('admin-ajax.php'); ?>';
</script>
<?php
	
	if (!is_admin()) {
		wp_enqueue_script( 'modernizr', JS . '/modernizr-1.7.min.js', array() ); // keep modernizer in header
		wp_enqueue_script( 'jquery-cdn', 'http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js', array(), FALSE, TRUE ); // Load in footer from Google CDN
		wp_enqueue_script( 'app', JS . '/app.js', array('jquery-cdn'), FALSE, TRUE );
	}

}

/**
 * new_excerpt_more function.
 * Over write the default WordPres [...] with anything you like.
 * @access public
 * @return void
 */
function new_excerpt_more($more) {
	return '...';
}

// Add Theme style sheets
add_action('wp_print_styles', 'add_site_styles');

// Add Theme Scripts
add_action('wp_print_scripts', 'add_site_scripts');

// Modify the default expert more symbol
add_filter('excerpt_more', 'new_excerpt_more');
?>