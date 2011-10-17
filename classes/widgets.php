<?php
/*
Plugin Name: Foo 
Plugin URI: 
Description: This widget...
Version: 1.0
Author: Mister Machine
Author URI: http://mistermachine.com
*/


class Widget_Foo extends WP_Widget {

	// widget actual processes
	function Widget_Foo() {
		$widget_ops = array( 'description' => __('I can haz foo') );
		parent::WP_Widget(false, $name = 'Foo', $widget_ops);
	}

	// outputs the content of the widget
	function widget($args, $instance) {

		extract( $args );
		$foo = apply_filters('widget_title', $instance['foo']);
		$bar = apply_filters('widget_title', $instance['bar']);

		?>
			<li><a href="<?php echo $foo ?>" title=""><?php echo $bar ?></a></li>
		<?php
	}

	// outputs the options form on admin
	function form($instance) {

		$foo = esc_attr($instance['foo']);
		$bar = esc_attr($instance['bar']);
		?>
			<p>
				<label for="<?php echo $this->get_field_id('foo'); ?>"><?php _e('Foo:'); ?></label>
				<input class="" id="<?php echo $this->get_field_id('foo'); ?>" name="<?php echo $this->get_field_name('foo'); ?>" type="text" value="<?php echo $foo ?>" />
			</p>
			<p>
				<label for="<?php echo $this->get_field_id('bar'); ?>"><?php _e('Bar:'); ?></label>
				<input class="widefat" id="<?php echo $this->get_field_id('bar'); ?>" name="<?php echo $this->get_field_name('bar'); ?>" type="text" value="<?php echo $bar; ?>" />
			</p>
		<?php 
	}

	// processes widget options to be saved
	function update($new_instance, $old_instance) {
		$instance = $old_instance;
		$instance['foo'] = strip_tags($new_instance['foo']);
		$instance['bar'] = strip_tags($new_instance['bar']);
		return $instance;
	}
	
}

// register Widget_Foo widget
add_action('widgets_init', create_function('', 'return register_widget("Widget_Foo");'));

?>