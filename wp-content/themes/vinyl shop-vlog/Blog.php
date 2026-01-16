<?php
/*
Template Name: Vlog Page
*/
get_header(); ?>

<main class="vlog-container">
<div class="shop-layout">

  <aside class="shop-sidebar">
    <div class="sidebar-card">
      <span class="sidebar-heading">Heading</span>
      <span class="sidebar-subtitle">sorting options</span>
      <ul class="filter-list">
        <li>
          <span class="icon">☆</span>
          <div class="filter-info">
            <span class="filter-title">sort 1</span>
            <span class="filter-desc">Menu description.</span>
          </div>
        </li>
        <li>
          <span class="icon">☆</span>
          <div class="filter-info">
            <span class="filter-title">sort 2</span>
            <span class="filter-desc">Menu description.</span>
          </div>
        </li>
        <li>
          <span class="icon">☆</span>
          <div class="filter-info">
            <span class="filter-title">sort 3</span>
            <span class="filter-desc">Menu description.</span>
          </div>
        </li>
      </ul>
    </div>
  </aside>

 <div class="shop-content">
  <h1 class="content-heading">Blogs</h1>

  <div class="product-list">
    <?php
      $args = [
        'post_type' => 'post',
        'posts_per_page' => 10,
        'paged' => get_query_var('paged') ?: 1
      ];

      $loop = new WP_Query($args);

      if ($loop->have_posts()) :
        while ($loop->have_posts()) : $loop->the_post(); ?>

          <div class="product-row">
            <div class="product-thumb">
              <?php if (has_post_thumbnail()) : ?>
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
              <?php else: ?>
                <img src="https://via.placeholder.com/300x200" alt="No Image">
              <?php endif; ?>
            </div>

            <div class="product-body">
              <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
              <p><?php echo wp_trim_words(get_the_excerpt(), 25); ?></p>
              <a href="<?php the_permalink(); ?>" class="btn">Read More</a>
              <p class="date"><?php echo get_the_date(); ?></p>
            </div>
          </div>

        <?php endwhile;

        echo paginate_links([
          'total' => $loop->max_num_pages
        ]);

      else :
        echo "<p>No posts found.</p>";
      endif;

      wp_reset_postdata();
    ?>
  </div>

</div>

</div>
</main>

<?php get_footer(); ?>