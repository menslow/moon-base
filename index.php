<?php
/**
 * @package WordPress
 * @subpackage 
 */

get_header(); ?>

	<div class="content main section grid_9">

		<?php if (have_posts()) : ?>

			<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<p class="blob_date">
					<span class="time"><?php the_time('l, F jS, Y @ g:i A e') ?></span> 
					<!--span class="name"> <?php //the_author() ?></span--> 
				</p>
				
				<h2><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
		
				<div class="entry">
					<?php the_content('Read the rest of this entry &raquo;'); ?>
				</div>

				<p class="post_meta"><?php the_tags('Tags: ', ', ', '<br />'); ?> via <?php the_category(', ') ?></p>
			</div>

			<?php endwhile; ?>

			<?php else : ?>

			<h2>Not Found</h2>
			<p>Sorry, but you are looking for something that isn't here.</p>
			<?php get_search_form(); ?>

		<?php endif; ?>

	</div>

	<div class="statHolder sidebar aside grid_3">
		<?php get_sidebar(); ?>
	</div>

<?php get_footer(); ?>