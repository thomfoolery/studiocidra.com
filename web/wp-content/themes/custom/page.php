<?php
/**
 * custom template for displaying Pages
 *
 * @package WordPress
 * @subpackage custom
 * @since custom 1.0
 */

get_header();
the_post();

?>

  <section class="page-content primary" role="main">

    <article>
      <h1 class="sr-only">
        <?php the_title(); ?>
      </h1>
      <?php the_content(); ?>
    </article>

  </section>

<?php get_footer(); ?>