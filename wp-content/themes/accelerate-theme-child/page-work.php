<?php /* Template Name: Work */ ?>
<?php
/**
 * The template for displaying the Work page
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

 get_header(); ?>

 	<div class="work-content">
			<?php query_posts('posts_per_page=3&post_type=case_studies&order=ASC');?>
				<?php while ( have_posts() ) : the_post();
					$image_1 = get_field('image_1');
					$size = "large";
					$services = get_field('services');
	        $client = get_field('client');
	        $link = get_field('site_link'); ?>

					<div class="works">
						<ul class="work">
							<li class="work-list">
						<figure id ="work-img">
							<?php echo wp_get_attachment_image($image_1, $size); ?>
						</figure>
					</div>
				</li>
			</ul>

		<?php endwhile; ?>
			<?php wp_reset_query(); ?>

			<div class="work-side">
			<aside class="work-sidebar">
				<div id ="work1">
					<h3>MailChimp Campaign</h3>
					<h2><a href="<?php the_permalink(); ?>"<?php the_title(); ?></a></h2>
					<h5><?php echo $services; ?></h5>
					<?php the_excerpt(); ?>
					<p><strong><a href="<?php the_permalink(); ?>">View Project ></a></strong></p>
				</div>

				<div id ="work2">
					<h3>Coroflot Advertising</h3>
					<h2><a href="<?php the_permalink(); ?>"<?php the_title(); ?></a></h2>
					<h5><?php echo $services; ?></h5>
					<?php the_excerpt(); ?>
					<p><strong><a href="<?php the_permalink(); ?>">View Project ></a></strong></p>
				</div>

				<div id ="work3">
					<h3>Zurb Foundation</h3>
					<h2><a href="<?php the_permalink(); ?>"<?php the_title(); ?></a></h2>
					<h5><?php echo $services; ?></h5>
					<?php the_excerpt(); ?>
					<p><strong><a href="<?php the_permalink(); ?>">View Project ></a></strong></p>
				</div>
			</aside>
 		</div>
	</div>


 <?php get_footer(); ?>
