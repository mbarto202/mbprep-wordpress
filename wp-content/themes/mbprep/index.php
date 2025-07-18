<?php
/**
 * The main file
 * It is used to display a page when nothing more specific matches a query.
 */

get_header(); ?>
<main>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article>
      <h2><?php the_title(); ?></h2>
      <div><?php the_content(); ?></div>
    </article>
  <?php endwhile; else : ?>
    <p>No posts found.</p>
  <?php endif; ?>
</main>
<?php get_footer(); ?>