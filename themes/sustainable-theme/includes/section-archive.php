<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


                <div class="archive-page">
                        <div class="archive-item">
                                <?php if (has_post_thumbnail()) : ?>

                                        <img src="<?php the_post_thumbnail_url('blog-small'); ?>" alt="<?php the_title(); ?>" class="post-image">

                                <?php endif; ?>

                                <div class="blog-content">
                                        <h3><?php the_title(); ?></h3>

                                        <?php the_excerpt(); ?>

                                        <a href="<?php the_permalink(); ?>">Read more...</a>
                                </div>
                        </div>
                </div>

<?php endwhile;
else : endif; ?>