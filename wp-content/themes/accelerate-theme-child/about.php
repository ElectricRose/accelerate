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
		<div class="site-content">

			<ul class="services">
				<?php query_posts('post_type=services'); ?>
				<?php while ( have_posts() ) : the_post();

				$our_services = get_field('our_services');
				$image_10 = get_field('image_10');
				$image_11 = get_field('image_11');
				$image_12 = get_field('image_12');
				$image_13 = get_field('image_13');
				$size = "full"; ?>

			<li class="individual-services">
						<h2><?php the_title(); ?></h2>
						<h5>We take pride in our clients and the content we create for them.<br> Here's a brief overview of our offered services</h5>
						<figure>
							<?php echo wp_get_attachment_image($image_10, $size); ?>
							<h5>Content Strategy</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ante felis, blandit ac orci quis, porttitor mollis ex. Nunc a nunc elit. Etiam id mauris porta, tempus justo a, mollis eros. Donec eget tristique dui. Sed sed vestibulum est.</p>
						</figure>
						<figure>
							<?php echo wp_get_attachment_image($image_11, $size); ?>
							<h5>Influencer Mapping</h5>
							<p>Nam id sem maximus, pulvinar neque quis, elementum nulla. In lacinia semper ultricies. Sed venenatis diam a tincidunt interdum. Quisque non maximus lorem, et molestie purus. Cras pharetra mi nulla, eget ornare neque mollis quis.</p>
						</figure>
						<figure>
							<?php echo wp_get_attachment_image($image_12, $size); ?>
							<h5>Social Media Strategy</h5>
							<p>Nulla nec sapien in risus tempus cursus. Morbi bibendum nunc sed diam pellentesque bibendum in at purus. Curabitur luctus sapien in neque rhoncus ullamcorper. Phasellus aliquet in enim eu consectetur. Cras non lectus nec dolor faucibus volutpat.</p>
						</figure>
						<figure>
							<?php echo wp_get_attachment_image($image_13, $size); ?>
							<h5>Design & Development</h5>
							<p>In non odio fermentum, sodales sem interdum, posuere dolor. Nullam eu rutrum purus. Sed at ultrices ipsum. Curabitur ut finibus diam, in placerat augue. Sed urna massa, lacinia eget mollis et, volutpat at ipsum. Nulla ac consequat magna, eu vulputate ipsum.</p>
						</figure>
						<h5>Interested in working with us?</h5>
			</li>
				<?php endwhile;
	  		wp_reset_query(); ?>
			</ul>
		</div>
	</div>
	</section>


<?php get_footer(); ?>
