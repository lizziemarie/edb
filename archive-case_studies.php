<?php
/**
 * The template for displaying the portfolio page
 *
 *
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 *
 * @package rosemary child
 */

 ?>
 <?php get_header(); ?>


 <div class="container">

   <div id="content">

     <div id="main" class="fullwidth">
        <h6>Portfolio</h6>

      <?php while ( have_posts() ) : the_post();
          $featured_image = get_field('featured_image');
          $size = 'medium';?>

            <li class="case-study-images ">
              <a href="<?php the_permalink(); ?>">
                <figure>
                  <?php if($featured_image) {
                  echo wp_get_attachment_image( $featured_image, $size );
                  } ?>
              </figure>
              </a>

              <h3><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h3>
              
            </li>

      <?php endwhile; // end of the loop. ?>


          </div>

<?php
get_footer(); ?>
