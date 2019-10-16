<?php /* Template Name: posts */ ?>

<?php get_header(); ?>

          <p>Blog</p>

          <?php
          if(have_posts()){
            while (have_posts()) {

              the_post();
              the_title();
              the_content();

            }
          }
          ?>

        </div>
    </div>
<?php get_footer(); ?>
