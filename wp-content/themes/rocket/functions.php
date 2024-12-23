<?php
// Добавление поддержки изображений и размеров
add_theme_support('post-thumbnails');
add_image_size('promotion-thumbnail', 400, 300, true); 
add_image_size('article-thumbnail', 800, 600, true);

// Подключение стилей и скриптов
function theme_enqueue_styles() {
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css');
    wp_enqueue_style('main-style', get_stylesheet_directory_uri() . '/css/main.css');
    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array('jquery'), null, true);
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Vela+Sans+GX&display=swap', false );
    wp_enqueue_style( 'google-fonts-inter', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap', false );
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

function register_custom_menus() {
    register_nav_menus(array(
        'header_menu' => __('Header Menu', 'your-theme-textdomain')
    ));
}
add_action('init', 'register_custom_menus');


// Регистрация типов записей
function custom_post_types() {
    // Услуги
    register_post_type('promotion', array(
        'labels' => array(
            'name' => 'Услуги',
            'singular_name' => 'Услуга',
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
    ));

    // Статьи
    register_post_type('article', array(
        'labels' => array(
            'name' => 'Статьи',
            'singular_name' => 'Статья',
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
    ));
}
add_action('init', 'custom_post_types');

// Регистрация таксономии для меток акций
function create_promotion_tags() {
    register_taxonomy(
        'promotion_tag', // Название таксономии
        'promotion',      // Тип записи
        array(
            'label' => 'Метки акций',
            'hierarchical' => false, // Для простых меток (не категорий)
            'show_ui' => true,       // Показывать в админке
            'show_tagcloud' => true, // Показывать облако тегов
            'rewrite' => array('slug' => 'promotion-tag'),
        )
    );
}
add_action('init', 'create_promotion_tags');
?>
