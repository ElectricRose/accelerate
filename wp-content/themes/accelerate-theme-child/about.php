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
		<h1><span>Accelerate</span> is a strategy and marketing agency located in the heart of NYC. Our goal is to build businesses by making our clients visable and making their customers smile.</h1>
		<div class="about-container">
			<div class="our-services">
			<h4>Our Services</h4>
			<p>We take pride in our clients and the content we create for them.<br>
				Here's a brief overview of our offered services.</p>
			</div>
				<div class="image1">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/bullseye.png" />
				</div>
			<div class="service1">
				<h3>Content Strategy</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ante felis, blandit ac orci quis, porttitor mollis ex. Nunc a nunc elit. Etiam id mauris porta, tempus justo a, mollis eros. Donec eget tristique dui. Sed sed vestibulum est.</p>
			</div>
			<div class="service2">
				<h3>Influencer Mapping</h3>
				<p>Nam id sem maximus, pulvinar neque quis, elementum nulla. In lacinia semper ultricies. Sed venenatis diam a tincidunt interdum. Quisque non maximus lorem, et molestie purus. Cras pharetra mi nulla, eget ornare neque mollis quis.</p>
			</div>
			<div class="image2">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/atom.png" />
			</div>
			<div class="image3">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/like.png" />
			</div>
			<div class="service3">
				<h3>Social Media Strategy</h3>
				<p>Nulla nec sapien in risus tempus cursus. Morbi bibendum nunc sed diam pellentesque bibendum in at purus. Curabitur luctus sapien in neque rhoncus ullamcorper. Phasellus aliquet in enim eu consectetur. Cras non lectus nec dolor faucibus volutpat.</p>
			</div>
			<div class="service4">
				<h3>Design & Development</h3>
				<p>In non odio fermentum, sodales sem interdum, posuere dolor. Nullam eu rutrum purus. Sed at ultrices ipsum. Curabitur ut finibus diam, in placerat augue. Sed urna massa, lacinia eget mollis et, volutpat at ipsum. Nulla ac consequat magna, eu vulputate ipsum.</p>
			</div>
			<div class="image4">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/design.png" />
			</div>
			<div id="work-with-us">
				<h3>Interested in working with us?</h3>
			</div>
	</div>
</div>
</div>
</section>


<?php get_footer(); ?>
