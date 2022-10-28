<?php get_header(); ?>

<section class="page-wrap">



    <div class="container">



        <h1><?php the_title(); ?></h1>

        <?php get_template_part('includes/section', 'content'); ?>


    </div>
    <aside>
        <?php if (is_active_sidebar('page-sidebar')) : ?>
            <?php dynamic_sidebar('page-sidebar'); ?>
        <?php endif; ?>
    </aside>
</section>



<?php get_footer(); ?>