<?php
/** template name: content.php
* theme: conditional_logic
**/


//LOGIC ONE  NO THUMBNAIL IMAGE  ON PAGE  (SEE PAGE ONE ONE)
// this code   including the div will be executed all times  even if the thumnail mis empty -->
?>
<div class="content_column"> 
	<?php   the_content(); ?> 
</div><!-- content_column -->

<?php

//  LOGIC TWO 
// Page_2 has a thumbnail image    
// this applies to all pages
//if a page doesnt have a thumbnail, this code  including the  markup will be ignored.
// check if the post has a Post Thumbnail assigned to it.
if ( has_post_thumbnail() ) {
	?>
	<div class="thumbnail_column">

		<?php
		the_post_thumbnail('medium');
		?>
		<h3><?php the_post_thumbnail_caption(); ?> </h3> 
	</div><!--thumbnail_column -->
	<?php
}
?>	

      

 <!-- LOGIC THREE -->
<!-- page_3 has an image  add a 3rd coloured column-->
<?php 
if (is_page('page_3')) {
	# add a third column 
	?>
	<div class="logic_3_column">
		<p>This is a conditional logic column <br> added only to page_2 </p>

	</div><!--logic_3_column -->
	<?php
}
?>


<!-- LOGIC FOUR -->
<!-- page_4 add a  third column  colored column-->

<?php 
if (is_page('page_4')) {
	# code...  add a different color column 
	?>
	<div class="logic_4_column">
		<p>This Box has been put here  as a conditional logic.
		its only on page_4 and its position is fixed Right of The Title </p>
	</div>
	<?php   
}