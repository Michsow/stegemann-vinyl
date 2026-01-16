<?php
/*
Template Name: Vlog Page
*/
get_header(); ?>

<main class="vlog-container">
<?php
// WP Query for posts
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$query = new WP_Query([
    'post_type' => 'post',
    'posts_per_page' => 10,
    'paged' => $paged
]);

if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post(); ?>
        
       <?php
/* Template Name: Custom Shop Homepage */
get_header(); ?>
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
        <!-- repeat -->
      </ul>
    </div>
  </aside>

  <div class="shop-content">
    <h1 class="content-heading">Vlogs</h1>
    <p class="content-subheading"></p>

    <div class="product-list">
      <div class="product-row">
        <div class="product-thumb"></div>
        <div class="product-body">
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <p>Body text for whatever you'd like to say. Add main takeaway points, quotes, anecdotes, or even a very very short story.</p>
          <button class="btn">Button</button>
        </div>
      </div>

      <div class="product-row">
        <div class="product-thumb"></div>
        <div class="product-body">
          <h2>Title</h2>
          <p>Body text for whatever you'd like to say. Add main takeaway points, quotes, anecdotes, or even a very very short story.</p>
          <button class="btn">Button</button>
        </div>
      </div>
    </div>

  </div>

</div>


  <main class="shop-products">
   
  </main>
</div>

<?php get_footer(); ?>


    <?php endwhile;

    // Pagination
    echo paginate_links([
        'total' => $query->max_num_pages
    ]);

else :
    echo "<p>No posts found.</p>";
endif;

wp_reset_postdata();
?>
</main>

<?php get_footer(); ?>
