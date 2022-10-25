<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <?php echo get_the_date("l d/m/y"); ?>

        <p><?php
            $categories = get_the_category();
            foreach ($categories as $cat) : ?>

                <a href="<?php echo get_category_link($cat->term_id); ?>">
                    <?php echo $cat->name; ?>
                </a>

            <?php endforeach; ?>
        </p>



        <?php the_content(); ?>


        <?php
        $fname = get_the_author_meta('first_name');
        // $lname = get_the_author_meta('last_name');
        ?>
        <p><i> Posted by <?php echo $fname; ?></i></p>

        <p><?php
            $tags = get_the_tags();
            foreach ($tags as $tag) : ?>
                <a class="tags" href="<?php echo get_tag_link($tag->term_id); ?>">
                    <?php echo $tag->name; ?>
                </a>
            <?php endforeach; ?>
        </p>


        <?php comments_template(); ?>
<?php endwhile;
else : endif; ?>