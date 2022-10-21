<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


                <div class="archive-page">
                        <div class="archive-item">
                                <h3><?php the_title(); ?></h3>

                                <?php the_excerpt(); ?>

                                <a href="<?php the_permalink(); ?>">Read more...</a>
                        </div>
                </div>

<?php endwhile;
else : endif; ?>