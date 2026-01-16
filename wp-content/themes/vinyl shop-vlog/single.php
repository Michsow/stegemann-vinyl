<?php get_header(); ?>

<main class="single-post-container">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <h1><?php the_title(); ?></h1>
    <p class="date"><?php echo get_the_date(); ?></p>
    <div class="content">
      <?php the_content(); ?>
    </div>

  <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
