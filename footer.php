<?php
/**
 * @package WordPress
 * @subpackage 
*/
?>
		</div>
	</div>

	<div class="footer container_12">
			
			<div class="grid_9">
			<p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> - all rights reserved </p> 
			</div>
			
			<div class="grid_3">
			<?php wp_nav_menu( array('menu' => 'Footer Menu', 'container' => '' ) ); ?>	
			</div>

	</div>

<?php wp_footer(); ?>
<script>
	var _gaq = [['_setAccount', 'UA-XXXXXXXX'], ['_trackPageview']];
	(function(d, t) {
		var g = d.createElement(t),
		s = d.getElementsByTagName(t)[0];
		g.async = true;
		g.src = ('https:' == location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		s.parentNode.insertBefore(g, s);
	})(document, 'script');
</script>
</body>
</html>