<?php
/**
 * Template Name: Submit Post
 */
get_header();
?>

<div class="submit-post-container">
    <?php if ( is_user_logged_in() ) : ?>

        <h2>Submit Your Post</h2>

        <?php
        if ( isset($_POST['submit_post']) ) {
            $title   = sanitize_text_field($_POST['post_title']);
            $content = wp_kses_post($_POST['post_content']);

            $post_id = wp_insert_post([
                'post_title'   => $title,
                'post_content' => $content,
                'post_status'  => 'pending', // change to 'publish' if you want auto-publish
                'post_author'  => get_current_user_id(),
            ]);

            if ( $post_id ) {
                echo "<p><strong>Post submitted! Pending review.</strong></p>";
            } else {
                echo "<p><strong>Something went wrong — try again.</strong></p>";
            }
        }
        ?>

        <form method="POST">
            <p>
                <label>Title</label><br/>
                <input type="text" name="post_title" required style="width:100%; padding:8px;"/>
            </p>
            <p>
                <label>Content</label><br/>
                <textarea name="post_content" rows="8" required style="width:100%; padding:8px;"></textarea>
            </p>
            <p>
                <input type="submit" name="submit_post" value="Submit Post"/>
            </p>
        </form>

    <?php else: ?>

        <p>You must be logged in to submit a post.</p>
        <p><a href="<?php echo wp_login_url( get_permalink() ); ?>">Click here to login</a></p>

    <?php endif; ?>
</div>

<?php get_footer(); ?>
