<?php
require_once('store.php');
get_header();
?>

    <!-- Intro -->
<?php $main = get_post(7); ?>
    <section id="intro">
        <div class="container-fluid p-0 h-100">
            <div class="row h-100">
                <div class="col-12 p-0 h-100">
                    <?php
                    $intro_slider = get_field('intro_slider', $main->ID);
                    ?>
                    <div class="intro-item h-100">
                        <div class="img"
                             style="background-image: url(<?= $intro_slider['intro_slider_image']['url'] ?>)"></div>
                        <div class="content">'
                            <h2 class="title"><?= $intro_slider['intro_slider_title'] ?></h2>
                            <a href="<?=get_page_link(27)?>"
                               class="btn btn-primary"><?= __('[:ru]поддержать[:ua]підтримати') ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Target -->
    <section id="target">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-sm-6">
                    <div class="target-item">
                        <?php
                        $first_image = get_field('first_image', $main->ID);
                        $text = get_field('text', $main->ID);
                        $second_image = get_field('second_image', $main->ID);
                        $main_progress = get_field('main_progress', $main->ID);
                        $second_progress = get_field('second_progress', $main->ID);
                        $third_progress = get_field('third_progress', $main->ID);
                        ?>
                        <div class="img img--big" style="background-image:url('<?= $first_image['url']; ?>');">
                            <?php
                            echo
                                '<div class="progress-item progress-item-main progress-item--processing">'
                                . '<div class="value">' . $main_progress['main_progress_value'] . '</div>'
                                . '<div class="description">' . $main_progress['main_progress_description'] . '</div >'
                                . '</div>';
                            ?>

                        </div>
                        <div class="progress-outer">
                            <?php
                            echo
                                '<div class="progress-item progress-item-secondary progress-item--trees">'
                                . '<div class="value">' . $second_progress['second_progress_value'] . '</div>'
                                . '<div class="description">' . $second_progress['second_progress_description'] . '</div >'
                                . '</div>';
                            ?>
                            <?php
                            echo
                                '<div class="progress-item progress-item-secondary progress-item--garbage">'
                                . '<div class="value">' . $third_progress['third_progress_value'] . '</div>'
                                . '<div class="description">' . $third_progress['third_progress_description'] . '</div >'
                                . '</div>';
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="target-item">
                        <p>
                            <?= $text; ?>
                        </p>
                        <div class="img img--small"
                             style="background-image:url('<?= $second_image['url']; ?>'); ">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Join -->
<?php
$first_join_card = get_field('first_join_card', $main->ID);
$second_join_card = get_field('second_join_card', $main->ID);
$third_join_card = get_field('third_join_card', $main->ID);
?>
    <section id="join">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-description text-white text-center">
                        <h2 class="section-title text-white">
                            <?= __('[:ru]Ты нужен природе[:ua]Ти потрібен природі') ?>
                        </h2>
                        <div class="section-subtitle">
                            <?= __('[:ru]Хочешь стать волонтером в своем городе?[:ua]Хочеш стати волонтером у своєму місті?') ?>
                            <a href="<?= get_page_link(9); ?>"><?= __('[:ru]Стать волонтером ECOCONTROOL[:ua]Стати волонтером ECOCONTROOL') ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-7 col-lg-4">
                    <div class="custom-card custom-card--primary">
                        <div class="custom-card-header">
                            <h5 class="title"><?= $first_join_card['title'] ?></h5>
                        </div>
                        <div class="custom-card-body">
                            <a href="<?= get_page_link(27); ?>"
                               class="btn btn-primary"><?= __('[:ru]поддержать[:ua]підтримати') ?></a>
                            <div class="img img--big"
                                 style="background-image:url(<?= $first_join_card['image']['url'] ?>);"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-7 col-lg-4">
                    <div class="custom-card custom-card--primary">
                        <div class="custom-card-header">
                            <h5 class="title"><?= $second_join_card['title'] ?></h5>
                        </div>
                        <div class="custom-card-body">
                            <a href="<?= get_page_link(9); ?>"
                               class="btn btn-primary"><?= __('[:ru]присоедниться[:ua]приєднатися') ?></a>
                            <div class="img img--big"
                                 style="background-image:url(<?= $second_join_card['image']['url'] ?>)"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-7 col-lg-4">
                    <div class="custom-card custom-card--primary">
                        <div class="custom-card-header">
                            <h5 class="title"><?= $third_join_card['title'] ?></h5>
                        </div>
                        <div class="custom-card-body">
                            <a href="<?= get_page_link(1043); ?>"
                               class="btn btn-primary"><?= __('[:ru]сберечь[:ua]зберегти') ?></a>
                            <div class="img img--big"
                                 style="background-image:url(<?= $third_join_card['image']['url'] ?>);"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Technology -->
    <section id="technology">
        <div class="container">
            <?php
            $posts = get_posts(array(
                'numberposts' => 4,
                'category' => 2,
                'orderby' => 'date',
                'order' => 'ASC',
                'post_type' => 'post',
                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
            ));
            $count = 0;
            foreach ($posts as $post) {
                $count++;
                setup_postdata($post);
                echo
                '<div class="row';
                if ($count % 2 == 1) {
                    echo " justify-content-end align-items-center";
                }
                echo '">';
                if ($count == 1) {
                    echo
                        '<div class="col-sm-8 col-xl-4 mb-5 mb-xl-0">'
                        . '<h2 class="section-title text-white">' . __('[:ru]Технологии которые мы популяризируем[:ua]Технології які ми популяризуємо') . '</h2>'
                        . '</div>';
                }
                echo '<div class="';
                if ($count == 1) echo "col-sm-11 col-lg-9 col-xl-8"; elseif ($count != 0) echo "col-sm-12 col-lg-9 col-xl-8";

                echo '">'
                    . '<div class="technology-item">'
                    . '<div class="img" style="background-image:url(' . get_post_first_image_src() . ')"></div>'
                    . '<div class="content">'
                    . '<h4 class="title">' . __($post->post_title) . '</h4>'
                    . '<div class="subtitle">' . __($post->post_excerpt) . '</div>'
                    . '<a href="' . get_post_permalink() . '" class="more-info">' . __('[:ru]Читать дальше[:ua]Читати далі') . '</a>'
                    . '</div>'
                    . '</div>'
                    . '</div>'
                    . '</div>';
            }
            wp_reset_postdata();
            ?>
        </div>
    </section>

    <!-- Eco-nav -->
    <section id="eco-nav">
        <div class="container">
            <div class="row justify-content-center">
                <?php
                $image_eco_maps = get_field('image_eco_maps', $main->ID);
                $image_eco_news = get_field('image_eco_news', $main->ID);
                $image_eco_calendar = get_field('image_eco_calendar', $main->ID);
                ?>
                <div class="col-sm-7 col-lg-4">
                    <div class="custom-card custom-card--secondary custom-card--big-title">
                        <div class="custom-card-header">
                            <h5 class="title"><?= __('[:ru]Эко карты[:ua]Еко мапи') ?></h5>
                        </div>
                        <div class="custom-card-body">
                            <a href="<?= get_category_link(37); ?>"
                               class="btn btn-light"><?= __('[:ru]посмотреть[:ua]переглянути') ?></a>
                            <div class="img img--big"
                                 style="background-image:url(<?= $image_eco_maps['url']; ?>);"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-7 col-lg-4">
                    <div class="custom-card custom-card--secondary custom-card--big-title">
                        <div class="custom-card-header">
                            <h5 class="title"><?= __('[:ru]Эко новости[:ua]Еко новини') ?></h5>
                        </div>
                        <div class="custom-card-body">
                            <a href="<?= get_category_link(3) ?>"
                               class="btn btn-light"><?= __('[:ru]посмотреть[:ua]переглянути') ?></a>
                            <div class="img img--big"
                                 style="background-image:url(<?= $image_eco_news['url']; ?>);"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-7 col-lg-4">
                    <div class="custom-card custom-card--secondary custom-card--big-title">
                        <div class="custom-card-header">
                            <h5 class="title"><?= __('[:ru]Эко календарь[:ua]Еко календар') ?></h5>
                        </div>
                        <div class="custom-card-body">
                            <a href="<?= get_category_link(5) ?>"
                               class="btn btn-light"><?= __('[:ru]посмотреть[:ua]переглянути') ?></a>
                            <div class="img img--big"
                                 style="background-image:url(<?= $image_eco_calendar['url']; ?>);"></div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- Help -->
<?php
$help_title = get_field('help_title', $main->ID);
$help_subtitle = get_field('help_subtitle', $main->ID);
$help_text = get_field('help_text', $main->ID);
?>
    <section id="help">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-sm-6">
                    <div class="help-item">
                        <div class="help-item-title">
                            <h4 class="title">
                                <?= $help_title; ?>
                            </h4>
                            <div class="logo logo--simple"
                                 style="background-image:url('<?= get_theme_file_uri('images/icon/logo/logo-simple.png') ?>');"></div>
                        </div>
                        <h6 class="subtitle">
                            <?= $help_subtitle; ?>
                        </h6>
                        <p>
                            <?= $help_text; ?>
                        </p>
                    </div>
                </div>
                <div class="col-auto mt-4 mt-sm-0">
                    <a href="<?= get_page_link(29) ?>" class="btn btn-primary">
                        <?= __('[:ru]оставить[:ua]залишити') ?>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- News -->
    <section id="news">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-description">
                        <h3 class="title"> <?= __('[:ru]Экологические новости Украины[:ua]Екологічні новини України') ?></h3>
                        <div class="subtitle">
                            <?= __('[:ru]Здесь мы освещаем все срочные события и ситуации в экологической сфере[:ua]Тут ми освітлюємо всі термінові події та ситуації в екологічній сфері') ?>
                        </div>
                        <a href="<?= get_category_link(3) ?>" class="btn btn-primary">
                            <?= __('[:ru]посмотреть[:ua]переглянути') ?>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <?php
                $posts_news = get_posts(array(
                    'numberposts' => 3,
                    'category' => 3,
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'post_type' => 'post',
                    'suppress_filters' => true,
                ));
                foreach ($posts_news as $post) {
                    setup_postdata($post);
                    echo
                        '<div class="col-sm-7 col-lg-4">'
                        . '<div class="custom-post-prev custom-post-prev--news">'
                        . '<div class="img" style="background-image:url(' . get_post_first_image_src() . ');"></div>'
                        . '<div class="content">'
                        . '<h6 class="title"><a href="' . get_post_permalink() . '">' . __($post->post_title) . '</a></h6>'
                        . '<div class="author">' . get_field('news_author') . '</div>'
                        . '</div>'
                        . '</div>'
                        . '</div>';
                }
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>

    <!-- Events -->
    <section id="events">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="section-title">
                        Заходи <span>ECOCONTROL</span>
                    </h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <?php
                $posts_events = get_posts(array(
                    'numberposts' => 3,
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
                        . '<div class="custom-post-prev custom-post-prev--events">'
                        . '<div class="img" style="background-image:url(' . get_post_first_image_src() . ');">'
                        . '<a href="' . get_page_link(31) . '" class="btn btn-primary">' . __('[:ru]принять участие[:ua]взяти участь') . '</a>'
                        . '</div>'
                        . '<div class="content">'
                        . '<h6 class="title"><a href="' . get_post_permalink() . '">' . __($post->post_title) . '</a></h6>'
                        . '<div class="data">' . __('[:ru]Запланировано[:ua]Заплановано') . '<span class="data__value">' . get_field('events_data') . '</span></div>'
                        . '<div class="place">' . get_field('events_place') . '</div>'
                        . '</div>'
                        . '</div>'
                        . '</div>';
                }
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>


<?php get_footer(); ?>