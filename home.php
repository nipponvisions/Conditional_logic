<?php
/*
Template name: home.php
author : Mathenge Moses
description:  This page is called the blog posts index. 
theme name: Conditional logics
-- 

*/
?>

<?php    get_header(); ?>
<h3> <?php get_search_form()  ;  ?> </h3> 

<!-- <a href="index.php?page_id=23" title="Search Page">Search Page</a> -->


<div class="notice"> This page is powered by home.php </div>




<?php
    if ( have_posts() ) : while ( have_posts() ) : the_post();
    	?>


    	<h2> <?php  the_title();  ?> </h2>

        <div id="archive_columns">
            <li>
                <?php

                   // check if the post has a Post Thumbnail assigned to it.
                if ( has_post_thumbnail() ) {
                    the_post_thumbnail('thumbnail');
                } 
                ?>
            </li>
            <li>
                <?php
                 the_excerpt();
                // see functions.php for readmore
                 ?>
                

            </li>    
            
        </div><!-- archive_columns -->
        <?php

    endwhile;
    else :
        get_template_part();
    endif;
  
    get_footer(); 
?>