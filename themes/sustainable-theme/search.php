<?php get_header(); ?>


<section class="archive-wrap">


    <h1>Search results for '<?php echo get_search_query(); ?>'</h1>

    <?php get_template_part('includes/section', 'archive'); ?>
    <?php previous_posts_link(); ?>
    <?php next_posts_link(); ?>

</section>