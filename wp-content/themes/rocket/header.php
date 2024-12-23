<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
</head>
<body>
<header>
    <div class="container">
        <div class="header-logo"><a href="<?php echo home_url(); ?>">Header Logo</a></div>
    </div>
</header>
<nav class="main-menu">
    <?php
    wp_nav_menu(array(
        'theme_location' => 'header_menu',
        'container' => false, 
        'menu_class' => 'menu', 
        'fallback_cb' => false 
    ));
    ?>
</nav>
