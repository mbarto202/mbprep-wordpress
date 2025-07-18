<?php get_header(); ?>

<main>
  <h1>Progress Updates</h1>
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <article>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div><?php the_excerpt(); ?></div>
      </article>
    <?php endwhile; ?>
  <?php else : ?>
    <p>No updates yet.</p>
  <?php endif; ?>
</main>

<?php get_footer(); ?>
