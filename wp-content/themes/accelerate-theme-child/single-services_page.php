<?php
/**
 * The template for displaying the about page
 *
 *
 * @package WordPress
 * @subpackage Accelerate_Theme
 * @since Accelerate Theme 1.1
 */

get_header(); ?>

<section class="recent-posts">
  <div class="site-content">
    <div class="blog-post">

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php query_posts('posts_per_page=3&post_type=services'); ?>
				<?php while ( have_posts() ) : the_post();
					$image_1 = get_field('image_1');
					$size = "medium";
				?>


			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->
<?php get_footer(); ?>
