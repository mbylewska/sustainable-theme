<?php get_header(); ?>

<section class="page-wrap">
    <div class="container">

        <?php if (has_post_thumbnail()) : ?>

            <img src="<?php the_post_thumbnail_url('blog-large'); ?>" alt="<?php the_title(); ?>" class="post-image">

        <?php endif; ?>

        <h1><?php the_title(); ?></h1>

        <?php get_template_part('includes/section', 'blogcontent'); ?>


    </div>

    <!-- <aside>
        <?php if (is_active_sidebar('blog-sidebar')) : ?>
            <?php dynamic_sidebar('blog-sidebar'); ?>
        <?php endif; ?>
    </aside> -->

</section>





<?php get_footer(); ?>