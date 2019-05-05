<?php
/*
Template name: single.php
author : Mathenge Moses
description:  displays single regular  posts 
theme name: Conditional logics
-- 

*/
?>

<?php    get_header(); ?>
<h3> <?php get_search_form()  ;  ?> </h3> 

<!-- <a href="index.php?page_id=23" title="Search Page">Search Page</a> -->


<div class="notice"> This page is powered by single.php  </div>

   <div class="below_header"> 


<?php
    if ( have_posts() ) : while ( have_posts() ) : the_post();
    	?>


    	<h2> <?php  the_title();  ?> </h2>
    	<?php

			   // check if the post has a Post Thumbnail assigned to it.
			if ( has_post_thumbnail() ) {
				the_post_thumbnail('medium');
			} 

        the_content();
    endwhile;
    else :
        get_template_part();
    endif;
  
    get_footer(); 
?>



</div><!-- below_header -->