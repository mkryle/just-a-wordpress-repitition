<?php 
/* Template Name: single */
 ?>
<?php get_header(); ?>
<div>
  
          <?php
          if(have_posts()){
            while (have_posts()) {

              the_post();
              echo "<div>";
              the_post_thumbnail();
              the_title('<h1>', '</h1>');
              the_content('<p>', '</p>');
               echo "</div>";
            }
          }
          ?>

  </div>
<?php get_footer(); ?>
