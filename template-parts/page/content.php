<?php
/**
	* Template name: content.php
	* Theme: conditional_logic
	* Description: used in page template file to change what content is displayed and how  depending on what  page
	* @link  https://codex.wordpress.org/Conditional_Tags
**/
?>
<div class="content">
	<?php
	//LOGIC ONE:-  All PAGES SHOULD DISPLAY CONTENT  REGARDLESS WHETER THUMBNAILS ARE AVAILLABLE
	// this code  will be executed AT all times if its a page
	if(is_page()){
		?>
		<div class="content_column"> 
		<?php   the_content(); ?> 
		</div><!-- content_column -->
		<?php
	} 

	//  LOGIC TWO:- PAGE_2 HAS A THUMBNAIL IMAGE
	//if a page doesn't have a thumbnail, this code will be ignored
	if ( has_post_thumbnail() ) {
		# display thumbnail
		?>
			<div class="thumbnail_column">
				<?php the_post_thumbnail('medium'); ?>
				<h3> <?php the_post_thumbnail_caption(); ?> </h3> 
			</div><!--thumbnail_column -->
	<?php
	}

	// LOGIC THREE:- ON Page PAGE_3 add A THUMBNAIL AND A THIRD COLORED COLUMN -->
	if (is_page('page_3')) {
		# add a third column 
		?>
		<div class="logic_3_column">
			<p>This is a conditional logic column <br> 
				added only to page_3 </p>

		</div><!--logic_3_column -->
	<?php
	}

	//LOGIC FOUR:- PAGE_4 HAS A DISCLAIMER BOX INSTEAD OF A THIRD COLUMN-->
	if (is_page('page_4')) {
		# add a disclaimer box
		?>
		<div class="logic_4_column">
			<p>This Box has been put here  as a conditional logic.
			its only on page_4 and its position is fixed Right of The Title </p>
		</div>
		<?php   
	}
?>
</div><!--content -->
