<!-- Call -->
<section id="call">
    <div class="container">
        <div class="row justify-content-center call-row">
            <?php
            $posts_events = get_posts(array(
                'numberposts' => 2,
                'category' => 4,
                'orderby' => 'date',
                'order' => 'DESC',
                'post_type' => 'post',
                'suppress_filters' => true,
            ));
            foreach ($posts_events as $post) {
                setup_postdata($post);
                echo
                    '<div class="col-sm-7 col-lg-4">'
                    . '<div class="custom-card custom-card--primary custom-card--bg">'
                    . '<div class="custom-card-header">'
                    . '<h5 class="title">';
                trim_title_words(2, '...');
                echo '</h5>'
                    . '</div>'
                    . '<div class="custom-card-body">'
                    . '<a href="' . get_the_permalink() . '" class="btn btn-primary">' . __('[:ru]присоединиться[:ua]приэднатися') . '</a>'
                    . '<div class="img img--big" style="background-image:url(' . get_post_first_image_src() . ')"></div>'
                    . '</div>'
                    . '</div>'
                    . '</div>';
            }
            wp_reset_postdata();
            ?>
            <div class="col-sm-7 col-lg-4">
                <div class="custom-card custom-card--primary custom-card--bg">
                    <div class="custom-card-header">
                        <h5 class="title"><?= __('[:ru]Прими решение в пользу природы[:ua]Прийми рішення на користь природи'); ?></h5>
                    </div>
                    <div class="custom-card-body">
                        <a href="<?= get_page_link(27); ?>"
                           class="btn btn-primary"><?= __('[:ru]поддержать[:ua]підтримати'); ?></a>
                        <div class="img img--big"
                             style="background-image:url(<?= get_field('participate_image', 265)['url']; ?>)"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-between">
            <div class="col-sm-4">
                <a href="/" class="call-description mb-4 mb-sm-0">
                    <div class="logo logo--simple"
                         style="background-image:url('<?= get_theme_file_uri('images/icon/logo/logo-simple.png') ?>');"></div>
                    <div class="title">

                        <?= __('[:ru]Национальный Экологический Контроль[:ua]Національний Екологічний Контроль') ?>
                    </div>
                </a>
            </div>
            <div class="col-auto d-flex flex-column mx-auto mx-sm-0 flex-sm-row ">
                <a href="<?= get_page_link(9); ?>"
                   class="btn btn-primary mr-sm-5 mb-4 mb-sm-0"><?= __('[:ru]стать волонтером[:ua]стати волонтером') ?></a>
                <a href="<?= get_page_link(27); ?>"
                   class="btn btn-danger"><?= __('[:ru]поддержать[:ua]підтримати') ?></a>
            </div>
        </div>
    </div>
</section>

</main>

<footer id="app-footer">
    <div class="container">
        <div class="row align-items-start">
            <div class="col-sm-6 col-lg-4 d-flex justify-content-center align-items-center">
                <div class="footer-item">
                    <h4 class="title"><?= __('[:ru]Контакты[:ua]Контакти') ?></h4>
                    <ul class="footer-list">
                        <li>
                            <a href="tel:<?php echo phone_filter(get_theme_mod('phone')) ?>"><?php echo get_theme_mod('phone') ?></a>
                        </li>
                        <li>
                            <a href="<?php echo get_theme_mod('email') ?>"> <?php echo get_theme_mod('email') ?></a>
                        </li>
                        <li>
                            <a href="#"><?php echo get_theme_mod('address') ?></a>
                        </li>
                    </ul>
                    <div class="footer-copyr">
                        <?= __('[:ru]© Ecocontrol 2018 Все права защищены.[:ua]© Ecocontrol 2018 Всі права захищені.') ?>
                    </div>
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
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 d-flex justify-content-center align-items-center">
                <div class="footer-item">
                    <h4 class="title"><?= __('[:ru]Последние новости[:ua]Останні новини') ?></h4>
                    <ul class="footer-list">
                        <?php
                        $posts_news = get_posts(array(
                            'posts_per_page' => 7,
                            'category' => 3,
                            'orderby' => 'date',
                            'order' => 'DESC',
                            'post_type' => 'post',
                            'suppress_filters' => true,
                        ));
                        foreach ($posts_news as $post) {
                            setup_postdata($post);
                            echo
                                '<li>'
                                . '<a href="' . get_post_permalink() . '">';
                            trim_title_words(2, '...');
                            echo '</a>'
                                . '</li>';
                        }
                        wp_reset_postdata();
                        ?>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4 d-flex justify-content-center align-items-center">
                <div class="footer-item">
                    <h4 class="title"><?= __('[:ru]Карта сайта[:ua]Мапа сайту') ?></h4>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer_menu',
                        'menu_class' => 'footer-list',
                        'items_wrap' => '<ul class="%2$s">%3$s</ul>',
                        'depth' => 0,
                    ));
                    ?>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Script -->
<?php wp_footer() ?>
</body>
</html>