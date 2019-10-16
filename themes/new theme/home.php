<?php get_header(); ?>

<div>


          <?php
          the_post();
          echo '<h1>';
          the_title();
          echo '</h1><p>';
          the_content();  
          echo '</p>';

?>
    </div>
<?php get_footer(); ?>
