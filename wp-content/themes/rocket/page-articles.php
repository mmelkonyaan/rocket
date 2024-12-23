<?php
/* Template Name: Статьи */
get_header(); ?>

<section class="articles">
    <div class="container">
        <div class="title">Статьи</div>
        <div class="row">
            <?php
            // WP_Query для вывода статей
            $articles = new WP_Query(array(
                'post_type' => 'article', 
                'posts_per_page' => 6
            ));
            if ($articles->have_posts()) :
                while ($articles->have_posts()) : $articles->the_post(); ?>
                    <div class="articles-card col-12 col-md-4">
                        <div class="articles-card-img">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('medium'); ?>
                            <?php else : ?>
                                <img src="path/to/default-image.jpg" alt="Default image">
                            <?php endif; ?>
                        </div>
                        <div class="articles-card-block">
                            <div class="articles-card-block-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </div>
                            <div class="articles-card-block-text">
                                <?php the_excerpt(); ?>
                            </div>
                            <div class="articles-card-block-date">
                                <?php echo get_the_date(); ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile;
                wp_reset_postdata();
            else :
                echo '<p>Нет статей для отображения.</p>';
            endif;
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
