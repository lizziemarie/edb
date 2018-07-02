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
        <h1 class="portfolio-title">Portfolio</h1>

      <ul class="portfolio-projects">
      <?php while ( have_posts() ) : the_post();
          $featured_image = get_field('featured_image');?>

            <li class="individual-project ">
              <a href="<?php the_permalink(); ?>">
                <figure>
                  <?php if($featured_image) {
                  echo wp_get_attachment_image( $featured_image, $size );
                  } ?>
                </figure>
              </a>

              <h2><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h2>

            </li>

      <?php endwhile; // end of the loop. ?>
      </ul>
    </div>

<?php
get_footer(); ?>
