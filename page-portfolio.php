
<?php
/**
* Template name: page-portfolio.php
* Author : Mathenge Moses
* Description:  on top of the traditional page.php this template pulls  
* an extra template part  and adds it to the particular page ie portfolio 
*
**/

get_header(); 
?>
<div class="notice"> This page is powered by page-portfolio.php </div>

<h3> <?php get_search_form()  ;  ?> </h3> 

<?php
if ( have_posts() ) {
  while ( have_posts() ) {
    the_post();
      
      the_title('<h2>','</h2>') ;
        // replace the_content() with get templatre part content
        get_template_part('template-parts/page/content','page');

        // since the page portfolio is not refferenceced in the conditional logics,
        // the 1st condtion which is for all pages will be executed 
        // and you can add other conditions in the portfolio page itself
        get_template_part('template-parts/page/disclaimer','page');
  } // endwhile
} // endif

get_footer(); 
?>