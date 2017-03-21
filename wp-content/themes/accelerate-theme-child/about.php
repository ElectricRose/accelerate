<?php /* Template Name: About */ ?>
<?php
/**
 * The template for displaying the About page
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>
<section class="about-page">
	<div class="about-content">

		<?php while ( have_posts() ) : the_post(); ?>
			<div class='about-hero'>
				<?php the_content(); ?>
			</div>
		<?php endwhile; // end of the loop. ?>


		<?php query_posts('posts_per_page=3&post_type=services'); ?>
			<?php while ( have_posts() ) : the_post();
				$image_1 = get_field('image_1');
				$size = "medium";
			?>
		<div>
			<?php echo wp_get_attachment_image( $image_1, $size ); ?>
		</div>
		<?php endwhile;
		wp_reset_query(); ?>

</div>
</section>


<?php get_footer(); ?>
