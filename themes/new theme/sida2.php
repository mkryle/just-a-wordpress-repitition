<?php get_header(); ?>

<div>
     <h1>
            <?php the_title();?>
          </h1>

        <br><br>
        <p>
            <?php
            the_post();
            the_content(); ?>
          </p>
     
<?php get_footer(); ?>