<?php get_header(); ?>
<main id="site-content">
    <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
        <h1 class="jOWiiO">The Phenix Group-Nationwide Credit Repair</h1>
        <p class="kiUiDu">IMPROVING YOUR CREDIT HAS NEVER BEEN THIS EASY. </p>
        <?php
            while ( have_posts() ) : the_post();
                the_content();
            endwhile;
            ?>
        </div><!-- .post-inner -->
        <div class="location-reviews">
            <h2 class="LBVfu">Reviews</h2>
            <?php echo do_shortcode('[elementor-template id="6421"]'); ?>
        </div>
    </article>
</main>
<?php get_footer(); ?>