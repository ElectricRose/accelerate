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
		<div class="service-content">

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
					<div class = "about-hero">
						<h1><span>Accelerate</span> is a strategy and marketing agency located in the heart of NYC. Our goal is to build businesses by making our clients visible and making their customers smile.<h1>
						</div>
						<div class = "intro">
							<h4>We take pride in our clients and the content we create for them.<br> Here's a brief overview of our offered services</h4>
						</div>

						<div class = "all-services">
								<div id = "image1">
									<?php echo wp_get_attachment_image($image_10, $size); ?>
								</div>
							<figure id = "service1">
								<h5>Content Strategy</h5>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ante felis, blandit ac orci quis, porttitor mollis ex. Nunc a nunc elit. Etiam id mauris porta, tempus justo a, mollis eros. Donec eget tristique dui. Sed sed vestibulum est.</p>
							</figure>
						</div>

					<div class="all-services">
						<figure id = "service2">
							<h5>Influencer Mapping</h5>
							<p>Nam id sem maximus, pulvinar neque quis, elementum nulla. In lacinia semper ultricies. Sed venenatis diam a tincidunt interdum. Quisque non maximus lorem, et molestie purus. Cras pharetra mi nulla, eget ornare neque mollis quis.</p>
						</figure>
								<div id = "image2">
									<?php echo wp_get_attachment_image($image_11, $size); ?>
								</div>
					</div>

						<div class="all-services">
								<div id = "image3">
									<?php echo wp_get_attachment_image($image_12, $size); ?>
								</div>
								<figure id = "service3">
									<h5>Social Media Strategy</h5>
									<p>Nulla nec sapien in risus tempus cursus. Morbi bibendum nunc sed diam pellentesque bibendum in at purus. Curabitur luctus sapien in neque rhoncus ullamcorper. Phasellus aliquet in enim eu consectetur. Cras non lectus nec dolor faucibus volutpat.</p>
								</figure>
						</div>

						<div class="all-services">
							<figure id = "service4">
								<h5>Design & Development</h5>
								<p>In non odio fermentum, sodales sem interdum, posuere dolor. Nullam eu rutrum purus. Sed at ultrices ipsum. Curabitur ut finibus diam, in placerat augue. Sed urna massa, lacinia eget mollis et, volutpat at ipsum. Nulla ac consequat magna, eu vulputate ipsum.</p>
							</figure>
									<div id = "image4">
										<?php echo wp_get_attachment_image($image_13, $size); ?>
									</div>
						</div>

						<div class = "outtro">
							<h3>Interested in working with us?</h3>
						</div>
			</li>
				<?php endwhile;
	  		wp_reset_query(); ?>
			</ul>
		</div>
	</div>
	</section>


<?php get_footer(); ?>
