<?php
/**
 * The template for displaying the 404 page (Not Found)
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */
?>
      <div class="content404-area">
           <div class="a404-content" role="main">
                <header class="page404-header" style="margin-left:35%;">
                     <h1>Oh no! You have a 404 Error!</h1>
                </header>
                <div class="error-wrapper">
                   <div class="error-logo">
                     <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cat1.png" alt="Surprised Cat" style="width:1200px;height:898px;margin-left:7%;">
                   </div>
                      <div class="error-message">
                          <p style="margin-left:38%;">Sorry, but you seem to be in the wrong place.</p>
                      </div>
                  </div>
                         <div class="search-form">
                         <p style="margin-left:38%;"> You can search below or return to homepage </p>
                         <ul>
                           <li style="margin-left:37%;list-style:none;"><?php get_search_form(); ?></li>
                         </ul>
                        </div>
                   <ul class="error-links">
                        <li style="list-style:none;margin-left:1%;"><a href="<?php echo home_url(); ?> ">Home</a> <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cat3.png"/> </li>
                        <li style="list-style:none;margin-left:75%;margin-top:-15%;"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cat2.png"/><a href=" # ">Popular Pages</a></li>
                   </ul>
           </div><!-- #content -->
      </div><!-- #primary -->
