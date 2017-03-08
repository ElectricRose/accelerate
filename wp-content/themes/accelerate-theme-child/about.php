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
		<?php endwhile; // end of the loop. ?>
	</div><!-- .container -->
	</section><!-- .home-page -->

<section class=""



		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
