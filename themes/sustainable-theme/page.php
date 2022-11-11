<?php get_header(); ?>

<section class="page-wrap">


    <div class="header-title" style="background-image:linear-gradient( rgba(249, 249, 249, 0.52), rgba(11, 50, 16, 1)),url(<?php the_post_thumbnail_url('blog-large'); ?>);">
        <h1><?php the_title(); ?></h1>
    </div>

    <div class="container">

        <?php get_template_part('includes/section', 'content'); ?>


    </div>
    <!-- <aside>
        <?php if (is_active_sidebar('page-sidebar')) : ?>
            <?php dynamic_sidebar('page-sidebar'); ?>
        <?php endif; ?>
    </aside> -->
</section>



<?php get_footer(); ?>