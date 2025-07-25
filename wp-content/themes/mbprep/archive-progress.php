<?php get_header(); ?>

<main>
  <h1>Progress Updates</h1>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article>
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <div><?php the_excerpt(); ?></div>
    </article>
  <?php endwhile; else : ?>
    <p>No updates found.</p>
  <?php endif; ?>
</main>

<?php get_footer(); ?>
