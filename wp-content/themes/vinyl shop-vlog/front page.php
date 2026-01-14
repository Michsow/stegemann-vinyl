<?php get_header(); ?>

<style>
/* Layout */
.shop-wrapper {
  display: flex;
  gap: 40px;
  padding: 40px;
}

/* Sidebar */
.shop-sidebar {
  width: 260px;
  border: 1px solid #e0e0e0;
  padding: 20px;
  border-radius: 10px;
  background: #fafafa;
}

.shop-sidebar h3 {
  margin-bottom: 10px;
  font-size: 18px;
}

.shop-sidebar ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

.shop-sidebar li {
  margin-bottom: 20px;
  border-bottom: 1px solid #eee;
  padding-bottom: 8px;
  cursor: pointer;
}

.shop-sidebar li:hover {
  color: #333;
}

/* Product cards */
.product-card {
  border: 1px solid #e0e0e0;
  padding: 20px;
  border-radius: 10px;
  margin-bottom: 25px;
  display: flex;
  gap: 20px;
  align-items: center;
}

.product-card img {
  width: 120px;
  height: 120px;
  object-fit: cover;
  background: #f0f0f0;
  border-radius: 6px;
}

.product-card h2 {
  margin: 0;
  font-size: 20px;
}

.product-card p {
  margin-top: 8px;
  opacity: 0.7;
}

.product-card a.button {
  display: inline-block;
  margin-top: 10px;
}
</style>

<div class="shop-wrapper">

  <!-- Sidebar -->
  <aside class="shop-sidebar">
    <h3>Sorting options</h3>
    <ul>
      <li>Sort 1</li>
      <li>Sort 2</li>
      <li>Sort 3</li>
      <li>Sort 4</li>
      <li>Sort 5</li>
    </ul>
  </aside>

  <!-- Product List -->
  <div class="shop-content">

    <?php
    // WooCommerce product loop
    $args = array(
      'post_type' => 'product',
      'posts_per_page' => 9,
    );

    $loop = new WP_Query($args);

    while ($loop->have_posts()) :
        $loop->the_post();
        global $product;
    ?>

      <div class="product-card">
        <a href="<?php the_permalink(); ?>">
          <?php 
            if (has_post_thumbnail()) {
              the_post_thumbnail('medium');
            } else {
              echo '<img src="https://via.placeholder.com/120" />';
            }
          ?>
        </a>

        <div class="product-info">
          <h2><?php the_title(); ?></h2>
          <p><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>

          <?php echo $product->get_price_html(); ?>

          <br>
          <a href="<?php echo esc_url($product->add_to_cart_url()); ?>" class="button">
            Add to Cart
          </a>
        </div>
      </div>

    <?php endwhile; wp_reset_query(); ?>

  </div>

</div>

<?php get_footer(); ?>
