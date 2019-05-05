
<?php
/*
Template name: page-portfolio.php
author : Mathenge Moses
description:  on top of the traditional page.php this template pulls  
an extra template part  and adds it to the particular page ie portfolio 
-- 

*/
?>

<?php    get_header(); ?>
<h3> <?php get_search_form() ; ?> </h3> 
<!-- <a href="index.php?page_id=23" title="Search Page">Search Page</a> -->
<div class="notice"> This page is powered by page-portfolio.php  </div>

<?php
if ( have_posts() ) {
    while ( have_posts() ) {
        the_post();
        ?>

        <h2> <?php  the_title();  ?> </h2>

        <!--<div class="content_column">  -->
        <?php
        // check if the post has a Post Thumbnail assigned to it.
        if ( has_post_thumbnail() ) {
        the_post_thumbnail('medium');
        }
        ?>
        <div id="disclaimer_box">
        <?php get_template_part('template-parts/page/disclaimer'); ?>

        </div><!--disclaimer_box --> 

        <?php  the_content(); ?>
        <!--</div>content_column -->

        <?php
    } //endwhile
} //endif


get_footer(); 