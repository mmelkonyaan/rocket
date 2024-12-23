<?php get_header(); ?>

<section class="articles">
    <div class="container">
        <div class="title">Статьи</div>
        <div class="row">
            <?php
                $articles = new WP_Query(array('post_type' => 'article', 'posts_per_page' => 6));
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

<section class="services">
    <div class="container">
        <div class="title">Услуги</div>

        <!-- Карусель для мобильных -->
        <div id="servicesCarousel" class="carousel slide d-lg-none" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php
                $promotions = new WP_Query(array('post_type' => 'promotion', 'posts_per_page' => 4));
                if ($promotions->have_posts()) :
                    $active = true;
                    while ($promotions->have_posts()) : $promotions->the_post(); ?>
                        <div class="carousel-item <?php echo $active ? 'active' : ''; ?>">
                            <div class="services-card">
                                <div class="service-badges">
                                    <?php
                                    $terms = get_the_terms(get_the_ID(), 'promotion_tag'); 
                                    if ($terms && !is_wp_error($terms)) :
                                        $badge_count = 0;
                                        foreach ($terms as $term) :
                                            $badge_class = $badge_count === 1 ? 'secondary' : ''; 
                                            echo '<div class="badge ' . $badge_class . '">' . esc_html($term->name) . '</div>';
                                            $badge_count++;
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
                        </div>
                        <?php $active = false; ?>
                    <?php endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>

            <div class="carousel-indicators">
                <?php
                $promotions_count = $promotions->post_count;
                for ($i = 0; $i < $promotions_count; $i++) :
                    ?>
                    <button type="button" data-bs-target="#servicesCarousel" data-bs-slide-to="<?php echo $i; ?>" class="<?php echo $i === 0 ? 'active' : ''; ?>" aria-current="<?php echo $i === 0 ? 'true' : 'false'; ?>"></button>
                <?php endfor; ?>
            </div>
        </div>

        <!-- Сетка для ПК -->
        <div class="row d-none d-lg-flex">
            <?php
            $promotions = new WP_Query(array('post_type' => 'promotion', 'posts_per_page' => 4));
            if ($promotions->have_posts()) :
                while ($promotions->have_posts()) : $promotions->the_post(); ?>
                    <div class="services-card col-md-3">
                        <div class="service-badges">
                            <?php
                            $terms = get_the_terms(get_the_ID(), 'promotion_tag'); 
                            if ($terms && !is_wp_error($terms)) :
                                $badge_count = 0;
                                foreach ($terms as $term) :
                                    $badge_class = $badge_count === 1 ? 'secondary' : ''; 
                                    echo '<div class="badge ' . $badge_class . '">' . esc_html($term->name) . '</div>';
                                    $badge_count++;
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
            endif;
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
