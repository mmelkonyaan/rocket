<?php get_header(); ?>
<section class="site-wrapper">
<section class="article-detail">
    <div class="container">
        <div class="articles-card-img detail-img">
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('medium'); ?>
            <?php else : ?>
                <img src="path/to/default-image.jpg" alt="Default image">
            <?php endif; ?>
        </div>
        <h1 class="detail-title"><?php the_title(); ?></h1>
        <div class="detail-content"><?php the_content(); ?></div>
    </div>
</section>

<?php get_footer(); ?>
</section>
