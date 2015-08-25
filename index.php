<?php get_header(); ?>

<main role="main">
    <div class="container">
        <!-- section -->
        <section>
            <h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>
            <?php get_template_part('loop'); ?>
            <?php get_template_part('pagination'); ?>
        </section>
    </div>
</main>
<!-- /section -->
<?php get_footer(); ?>
