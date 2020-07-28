<?php
/**
	* Template name: search.php
	* author : Mathenge Moses
	* Description:  The template for displaying  search results
	*
**/
?>

<?php    get_header(); ?>

<div class="notice"> This page is powered by search.php </div>
	<p> this is  the search .php page it is displaying search results </p>
	<?php
	if ( have_posts() ) : 
		while ( have_posts() ) : 
			the_post();
			?>
			<h3> <?php the_title();  ?> </h3>
			<?php the_content(); ?>
			 <h3> <?php get_search_form()  ;  ?> </h3> 
			 <?php
		endwhile;
		else :
		//if no post found 
		get_template_part('content-none');
	endif;
	?>
<?php  get_footer();   