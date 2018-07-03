<?php
/**
 * The template for displaying the single work page
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

      <?php while ( have_posts() ) : the_post();
        $project_type = get_field('project_type');
        $size = "full"; ?>

        <?php get_template_part('content', 'page'); ?>

      <?php endwhile; // end of the loop. ?>

      <div class="buttons">
          <span class="previous-button"><?php previous_post_link('%link', '<< previous'); ?></span>
          <span class="next-button"><?php next_post_link( '%link', 'next >>'); ?></span>
      </div>
    </div>

<?php
get_footer(); ?>
