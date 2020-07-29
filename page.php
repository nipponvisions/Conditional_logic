<?php
/**
*Template name: page.php
*author : Mathenge Moses
*Description:  powers the conditional logic pages ie Page_1 Page_2 Page_3 $ Page_4
*Theme: Conditional logic
*@link   https://codex.wordpress.org/Conditional_Tags
**/

?>

<?php    get_header(); 
?> <div class="notice"> <?php global $template; echo basename($template); ?> </div>

<h3> <?php get_search_form()  ;  ?> </h3> 

<?php
if ( have_posts() ) {
  while ( have_posts() ) {
    the_post();
      
      the_title('<h2>','</h2>') ;
        // replace the_content() with get templatre part content
        get_template_part('template-parts/page/content','page');
  } // endwhile
} // endif

 get_sidebar();
 get_footer(); 
 ?>
