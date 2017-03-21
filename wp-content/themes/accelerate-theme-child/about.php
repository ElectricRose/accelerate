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
	<div class="about-content" role="main">

		<?php query_posts('posts_per_page=3&post_type=services'); ?>
		<?php while ( have_posts() ) : the_post();
			$size = "full";
			$our_services = get_field('our_services');
			$image1 = get_field('image1');
			$service1 = get_field('service1')
			$service2 = get_field('service2')
			$image2 = get_field('image_2');
			$image3 = get_field('image_3');
			$service3 = get_field('service3')
			$service4 = get_field('service4')
			$image4 = get_field('image4')
			$work_with_us = get_field('work_with_us') ?>

			<article class="services">
						<h2><?php the_title(); ?></h2>
						<h5><?php echo $our_services; ?></h5>
						<h5><?php echo $service1; ?></h5>
						<h5><?php echo $service2; ?></h5>
						<h5><?php echo $service3; ?></h5>
						<h5><?php echo $service4; ?></h5>
						<h5><?php echo $work_with_us; ?></h5>
					</article>

		<div>
			<?php echo wp_get_attachment_image($image1, $image2, $image3, $image4, $size ); ?>
		</div>
</div>
</section>


<?php get_footer(); ?>
