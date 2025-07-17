<article>
  <h1><?php the_title(); ?></h1>
  <p><?php the_date(); ?></p>
  <?php if ( has_post_thumbnail() ) {
    the_post_thumbnail();
  } ?>
  <div><?php the_content(); ?></div>
</article>
