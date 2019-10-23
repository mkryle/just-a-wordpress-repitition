<?php 
/* Template Name:index*/
 ?>
<?php get_header(); ?>

<div>
<div id="header">
     <h1>
            <?php the_title();?>
          </h1>
</div>
        <br><br>
       <div id="post">

       <div class="row">
 

         <div class="column">
           <img width="200px" src="<?php the_field('picture1');?>">
   
<br><br>
  <?php the_field('text1');?>
</div>

         <div class="column">
   <img width="200px" src="<?php the_field('picture2');?>">
<br><br>
  <?php the_field('text2');?>
</div>


          </div>
</div>
<div id="banner"><h1>
 <?php the_field('banner');?></h1>
</div>
        

<div id="quote">
  <p>
 <?php the_field('quote');?></p>
</div>
<?php get_footer(); ?>
