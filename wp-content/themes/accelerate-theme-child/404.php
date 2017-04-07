<?php
/**
 * The template for displaying the 404 page (Not Found)
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */
get_header(); ?>
      <div class="content404-area">
           <div class="a404-content" role="main">
                <div id="page404-header">
                     <h2>Oh no! A 404 Error!</h2>
                </div>
                <div class="error-wrapper">
                      <div class="error-message">
                          <p>You seem to be a little lost.</p>
                      </div>
                  </div>
                         <div class="search-form">
                         <p> Try another page instead! </p>
                         <ul>
                           <li><?php get_search_form(); ?></li>
                         </ul>
                        </div>
                   <div class="error-links">
                        <div id="leftcat"><a href="<?php echo home_url(); ?> ">Home</a> <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cat3.png"/> </li>
                        <div id="rightcat"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cat2.png"/><a href="blog"></a></li>
                   </div>
           </div><!-- #content -->
      </div><!-- #primary -->

<?php get_footer(); ?>
