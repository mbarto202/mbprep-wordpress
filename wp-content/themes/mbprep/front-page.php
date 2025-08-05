<?php get_header(); ?>

<main>
  <section class="hero">
    <div class="hero-content">
      <h1>Welcome to MBPrep</h1>
      <p>Follow my natural bodybuilding prep journey — weekly progress updates, photos, and training insights.</p>
      <a href="/progress" class="btn-primary">View Progress</a>
    </div>
  </section>

  <section class="latest-updates">
    <h2>Latest Progress Updates</h2>
    <?php
    $progress_posts = new WP_Query([
      'post_type' => 'progress',
      'posts_per_page' => 3
    ]);

    if ($progress_posts->have_posts()) :
      while ($progress_posts->have_posts()) : $progress_posts->the_post(); ?>
        <article class="update-card">
          <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <p><?php the_excerpt(); ?></p>
        </article>
      <?php endwhile;
      wp_reset_postdata();
    else :
      echo '<p>No updates yet.</p>';
    endif;
    ?>
  </section>
</main>

<?php get_footer(); ?>
