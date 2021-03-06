<?php
/**
 * @package WordPress
 * @subpackage 
 */

get_header();
?>

	<div id="content" class="grid_9">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<div class="byline">
				<span class="time"><?php the_time('F jS, Y') ?></span> 
				<span class="name"> <?php the_author() ?></span> 
			</div>
			<h1><?php the_title(); ?></h1>

			<div class="entry">
				<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				<?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
			</div>
			<p class="post_meta"><?php the_tags('Tags: ', ', ', '<br />'); ?> via <?php the_category(', ') ?></p>
			
		</div>

	<?php //comments_template(); ?>

	<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>

	</div>

	<div class="sidebar aside grid_3">	
		<?php get_sidebar(); ?>	
	</div>

	<?php get_footer(); ?>