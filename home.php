<?php
/**
    * Template name: home.php
    * Theme name: conditional logics
    * Author : Mathenge Moses
    * Description:  This page is called the blog posts index. 
    * @link https://codex.wordpress.org/Conditional_Tags
    *
**/
?>

<?php    get_header();
?> <div class="notice"> <?php global $template; echo basename($template); ?> </div> 

<h3> <?php get_search_form()  ;  ?> </h3> 



<?php
if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<ul class="archive_columns">
    <li>
        <?php the_title('<h2>','</h2>'); 
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

</ul><!-- archive_columns -->
<?php

endwhile;
else :
// get_template_part();
endif;
?>

<?php get_footer(); 
?>