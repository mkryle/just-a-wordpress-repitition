<?php /* Template Name: blog */ ?>

<?php get_header(); ?>

<h1>blog.php</h1>


<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
		the_title();
		// Post Content here
		//
	} // end while
} // end if
?>
<?php get_footer(); ?>
