<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <? wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php require_once('includes/partials/svgs.php'); ?>


<header id="app-header">
    <div class="container-fluid">
        <div class="row justify-content-between align-items-center">
            <div class="col-sm-5">
                <div class="site-nav d-flex align-items-center">
                    <div class="burger-menu position-relative d-flex flex-column justify-content-center align-items-center">
                        <div class="line line--top"></div>
                        <div class="line line--middle"></div>
                        <div class="line line--bottom"></div>
                    </div>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'main_menu',
                        'menu_class' => '',
                        'items_wrap' => '<ul>%3$s</ul>',
                        'depth' => 0,
                    ));
                    ?>
                </div>
            </div>
            <a href="/" class="logo"
               style="background-image: url('<?= get_theme_file_uri('images/icon/logo/logo-header.png') ?>')"></a>
            <div class="col-sm-5 col-lg-4 pr-sm-0 d-none d-md-block">
                <div class="social-nav d-flex justify-content-end align-items-center">
                    <ul class="social-list social-list--white">
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
                    <ul class="languages-list">
                        <li>
                            RU
                        </li>
                    </ul>
                    <a href="page-help.php" class="btn btn-danger">
                        <?= __('[:ru]Поддержать[:ua]Підтримати') ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="menu">
    <nav class="menu-nav">
        <ul class="menu-nav-list">
            <li>
                <a href="#">Екологічні катастрофи</a>
            </li>
            <li>
                <a href="category-3.php">Екологічні новини</a>
            </li>
            <li>
                <a href="category-37.php">Еко мапи</a>
            </li>
            <li>
                <a href="single.php">Технології</a>
            </li>
            <li>
                <a href="category-5.php">Еко календар</a>
            </li>
            <li>
                <a href="category-6.php">Еко заклади</a>
            </li>
            <li>
                <a href="category-4.php">Заходи ECOCONTROL</a>
            </li>
            <li>
                <a href="#">Цікаві факти</a>
            </li>
        </ul>
    </nav>
</div>

<main>