<?php
/*
Template name: archive.php
author : Mathenge Moses
description:  
theme name: Conditional logics

* https://codex.wordpress.org/Creating_an_Archive_Index#The_Template_.28archive.php.29
-- 

*/
?>

<?php    get_header(); ?>
<h3> <?php get_search_form()  ;  ?> </h3> 

<!-- <a href="index.php?page_id=23" title="Search Page">Search Page</a> -->


<div class="notice"> This page is powered by archive.php </div>


<?php the_post(); ?>
        <h1 class="entry-title"><?php the_title(); ?></h1>
        
        <?php get_search_form(); ?>
        
        <h2>Archives by Month:</h2>
        <ul>
            <?php wp_get_archives('type=monthly'); ?>
        </ul>
        
        <h2>Archives by Subject:</h2>
        <ul>
             <?php wp_list_categories(); ?>
        </ul>

<?php get_footer(); ?>