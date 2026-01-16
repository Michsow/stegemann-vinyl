</main>

<footer class="site-footer">
    <p>© <?php echo date("Y"); ?> Stegemann Vinyl</p>
</footer>

<?php wp_footer(); ?>
</body>
</html>
<script>
add_action('wp_enqueue_scripts', function() {
  wp_enqueue_script('auth-js', get_template_directory_uri() . '/assets/js/auth.js', [], null, true);
});
</script>