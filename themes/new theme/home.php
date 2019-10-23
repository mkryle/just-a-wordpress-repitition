<?php get_header(); ?>

<div>
 <h1>The blogposts !!!</h1>

<br>

<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
		//
		echo '<h1>';
        the_title();
        echo '</h1><br><p>';
		the_content();
		echo '</p><br><hr>';
		// Post Content here
		//
	} // end while
} // end if
?>

 </div>


<?php get_footer(); ?>
