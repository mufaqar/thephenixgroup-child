<?php get_header(); ?>



<main id="site-content">
    <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

        <h1 class="jOWiiO"><?php the_title()?></h1>
     
        <?php
            while ( have_posts() ) : the_post();
                the_content();
            endwhile;
            ?>
        </div><!-- .post-inner -->

        <div class="location-reviews">
            <h2 class="LBVfu">FAQS</h2>
            <?php echo do_shortcode('[elementor-template id="6974"]'); ?>
        </div>


</main>

<?php get_footer(); ?>