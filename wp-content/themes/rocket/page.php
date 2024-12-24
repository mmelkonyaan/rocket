<?php
get_header();
?>

<main class="page-content">
    <div class="container">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post(); ?>
                <h1><?php the_title(); ?></h1> 
                <div class="page-text">
                    <?php the_content(); ?>
                </div>
            <?php endwhile;
        else : ?>
            <p>Контент не найден.</p>
        <?php endif; ?>
    </div>
</main>

<?php
get_footer(); 
?>
