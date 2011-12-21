<?php
/**
 * @package WordPress
 * @subpackage 
*/

require_once('classes/moon-base.php');
require_once('classes/widgets.php');
MoonBase::init();


/**
* add_site_styles function.
* Add site styles to the head of the theme
* @access public
* @return void
*/	
function add_site_styles(){
	if (!is_admin()) {
		wp_enqueue_style('theme', get_bloginfo('template_directory') . '/assets/css/theme.css', array(), '1.00', 'all');
		wp_enqueue_style('1200', get_bloginfo('template_directory') . '/assets/css/1200.css', array(), '1.00', 'all and (min-width: 1200px)');
		wp_enqueue_style('960', get_bloginfo('template_directory') . '/assets/css/960.css', array(), '1.00', 'all and (min-width: 620px) and (max-width: 1200px)');
		wp_enqueue_style('mobile', get_bloginfo('template_directory') . '/assets/css/mobile.css', array(), '1.00', 'all and (min-width: 0px) and (max-width: 620px)');
	}	
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
		wp_enqueue_script( 'modernizr', JS . '/modernizr-1.7.min.js', array() ); // Load modernizer in header
		// Re-register jquery in order to load jquery from CDN
		wp_deregister_script( 'jquery' );
	    wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js');
		wp_enqueue_script( 'jquery', FALSE, array(), FALSE, TRUE ); // Load in footer from Google CDN
		if(ENVIRONMENT==='test')
		{
			// Un-minified app.js + separate plugin file for easier development
			wp_enqueue_script( 'plugins', JS . '/plugins.js', array('jquery'), FALSE, TRUE ); // Load in footer
			wp_enqueue_script( 'app', JS . '/app.js', array('jquery'), '1.02', TRUE ); // Load in footer
		}
		else
		{
			// minified app.js with plugins combined in one file.
			wp_enqueue_script( 'app-min', JS . '/app-min.js', array('jquery'), '1.02', TRUE ); // Load in footer
		}
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