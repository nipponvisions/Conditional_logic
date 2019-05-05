<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

?>


<?php   get_header(); ?>

<div class="notice"> this is 404.php  </div>

   <div class="below_header"> 
 
        <div class="page-content">
          <h2><?php _e( 'This is somewhat embarrassing, isn’t it?', 'twentythirteen' ); ?></h2>
          <p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentythirteen' ); ?></p>

          <?php get_search_form(); ?>
        </div><!-- .page-content -->


	</div><!-- below_header -->

   <?php get_footer() ; ?>

