<?php
/** Template name: page-contact.php
	author : Mathenge Moses
	description : this page powers the contact page indipedent of the index template
	note the color chage in the main section
**/
?>


<?php   get_header(); ?>


<div class="notice"> This page is powered by page-contact.php </div>

   <div class="below_header"> 


<?php 
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post(); 
				//
				?>
			
			<h2> <?php the_title(); ?> </h2>
            
            <?php the_content();  ?> 
        
			          <!-- custom Field contents -->  
			     <div class="customfield">
			     		<p> <b> The following contents are  aretrieve from  custom field </b> </p>

			        <p> Last Name :  <?php echo  get_post_meta($post ->ID ,'Last Name', true );  ?> </p>
			        <p> First Name :   <?php echo  get_post_meta($post ->ID ,'First Name', true );  ?> </p>
			        <p> Capital City :  <?php echo  get_post_meta($post ->ID ,'Capital City', true );  ?> </p>
						
				</div>

	<?php	
				
			} // end while
		} // end if
?>
					

	</div><!-- below_header -->

   <?php get_footer() ; ?>

