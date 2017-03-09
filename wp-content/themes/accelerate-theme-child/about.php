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
		<div class="about-container">
			<h4>Our Services</h4>
			<p>We take pride in our clients and the content we create for them.<br>
				Here's a brief overview of our offered services.</p>
				<div class="image1">
				</div>
			<div class="service1">
			</div>
			<div class="image2">
			</div>
			<div class="service2">
			</div>
			<div class="image3">
			</div>
			<div class="service3">
			</div>
			<div class="image4">
			</div>
			<div class="service4">
			</div>
	</div>
</div>
</div>
</section>


<?php get_footer(); ?>
