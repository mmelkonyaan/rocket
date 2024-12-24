<?php
/* 
Template Name: Шаблон для акций
*/

get_header(); ?>

<section class="services">
    <div class="container">
        <div class="title">Акции</div>
        <div class="row">
            <?php
            $promotions = new WP_Query(array(
                'post_type' => 'promotion',
                'posts_per_page' => -1,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'promotion_tag',
                        'field' => 'slug', 
                        'terms' => 'акция',
                        'operator' => 'IN',
                    ),
                ),
            ));

            if ($promotions->have_posts()) :
                while ($promotions->have_posts()) : $promotions->the_post(); ?>
                    <div class="services-card col-md-3">
                        <div class="service-badges">
                            <?php
                            $terms = get_the_terms(get_the_ID(), 'promotion_tag');
                            if ($terms && !is_wp_error($terms)) :
                                foreach ($terms as $term) :
                                    echo '<div class="badge">' . esc_html($term->name) . '</div>';
                                endforeach;
                            endif;
                            ?>
                        </div>
                        <div class="services-card-img">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('promotion-thumbnail'); ?>
                            <?php else : ?>
                                <img src="path/to/default-image.jpg" alt="Default image">
                            <?php endif; ?>
                        </div>
                        <div class="services-card-block">
                            <div class="services-card-block-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </div>
                            <div class="services-card-block-price"><?php the_excerpt(); ?></div>
                        </div>
                    </div>
                <?php endwhile;
                wp_reset_postdata();
            else :
                echo '<p>Акции не найдены.</p>';
            endif;
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
