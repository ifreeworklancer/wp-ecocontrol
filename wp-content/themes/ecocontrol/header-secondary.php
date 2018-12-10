<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://unpkg.com/leaflet@1.0.1/dist/leaflet.css" rel="stylesheet"/>
    <? wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<?php require_once('includes/partials/svgs.php'); ?>

<header id="app-header" class="header-secondary">
    <div class="container-fluid">
        <div class="row justify-content-between align-items-center">
            <div class="col-sm-5">
                <div class="site-nav d-flex align-items-center">
                    <div class="burger-menu position-relative d-flex flex-column justify-content-center align-items-center">
                        <div class="line line--top"></div>
                        <div class="line line--middle"></div>
                        <div class="line line--bottom"></div>
                    </div>
                    <ul>
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'main_menu',
                            'menu_class' => '',
                            'items_wrap' => '<ul>%3$s</ul>',
                            'depth' => 0,
                        ));
                        ?>
                    </ul>
                </div>
            </div>
            <a href="/" class="logo"
               style="background-image: url('<?= get_theme_file_uri('images/icon/logo/logo-header.png') ?>')"></a>
            <div class="col-sm-5 col-lg-4 pr-sm-0 d-none d-md-block">
                <div class="social-nav d-flex justify-content-end align-items-center">
                    <ul class="social-list social-list--special">
                        <li class="social-list-item social-list-item--facebook">
                            <a href="<?php echo get_theme_mod('facebook') ?>">
                                <svg width="20" height="20">
                                    <use xlink:href="#facebook-icon"></use>
                                </svg>
                            </a>
                        </li>
                        <li class="social-list-item social-list-item--youtube">
                            <a href="<?php echo get_theme_mod('youtube') ?>">
                                <svg width="20" height="20">
                                    <use xlink:href="#youtube-icon"></use>
                                </svg>
                            </a>
                        </li>
                        <li class="social-list-item social-list-item--instagram">
                            <a href="<?php echo get_theme_mod('instagram') ?>">
                                <svg width="20" height="20">
                                    <use xlink:href="#instagram-icon"></use>
                                </svg>
                            </a>
                        </li>
                    </ul>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'languages_menu',
                        'container' => false,
                        'menu_class' => 'languages-list',
                        'items_wrap' => '<ul class="%2$s">%3$s</ul>',
                        'depth' => 0,
                    ));
                    ?>
                    <a href="<?= get_page_link(27);?>" class="btn btn-danger">
                        <?= __('[:ru]Поддержать[:ua]Підтримати') ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="menu">
    <nav class="menu-nav">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'burger_menu',
            'container' => false,
            'menu_class' => 'menu-nav-list',
            'items_wrap' => '<ul class="%2$s">%3$s</ul>',
            'depth' => 0,
        ));
        ?>
    </nav>
</div>


<main>

    <nav class="site-navigations">
        <div class="banner" style="background-image:url('<?= get_field('banner_image')['url'] ?>');"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb">
                        <?php
                        if(function_exists('bcn_display'))
                        {
                            bcn_display();
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </nav>