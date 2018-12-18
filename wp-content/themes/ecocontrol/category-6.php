<?php

$currentCategory = !empty($_GET['categories']) ? $_GET['categories'] : null;

get_header('secondary');

?>


    <nav class="archive-nav">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="archive-nav-outer">
                        <div class="news-theme-nav__title mb-3">
                            <?= __('[:ru]Город[:ua]Місто') ?>
                        </div>
                        <form action="" method="GET" id="city">
                            <input type="hidden" name="categories" value="">
                            <?php
                            $categories = get_categories([
                                'type' => 'post',
                                'child_of' => 6,
                                'parent' => '',
                                'orderby' => 'id',
                                'order' => 'ASC',
                                'hide_empty' => 1,
                                'hierarchical' => 1,
                            ]);
                            if ($categories) {
                                foreach ($categories as $cat) {
                                    echo '<div class="custom-control custom-checkbox">'
                                        . '<input type="checkbox" class="custom-control-input"
                                        id="' . $cat->cat_ID . '" onchange="onCategoryChange(' . $cat->cat_ID . ')"
                                        ' . (in_array($cat->cat_ID, explode(',', $currentCategory)) ? ' checked' : '') . '
                                        >'
                                        . '<label class="custom-control-label" for="' . $cat->cat_ID . '">' . $cat->name . '</label>'
                                        . '</div>';
                                }
                            }
                            ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- News -->
    <section id="archive-institute">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-9 ml-auto">
                    <div class="content">
                        <div class="content-header mb-5">
                            <div class="quote-slider">
                                <div class="quote-slider-item">
                                    <h5 class="quote-slider-item__text"><?= __('[:ru]Человеком была сделана огромная ошибка в том, что он отделил себя от законов природы и перестал с ними считаться[:ua]Людиною була зроблена величезна помилка в тому, що він відділив себе від законів природи і перестав з ними рахуватися') ?></h5>
                                    <div class="quote-slider-item__author"><?= __('[:ru]В.И.Вернадский[:ua]В.І.Вернадський') ?></div>
                                </div>
                                <div class="quote-slider-item">
                                    <h5 class="quote-slider-item__text"><?= __('[:ru]Природа всегда права. Ошибки исходят от людей[:ua]Природа завжди права. Помилки виходять від людей') ?></h5>
                                    <div class="quote-slider-item__author"><?= __('[:ru]Иоганн Вольфганг фон Гёте[:ua]Йоганн Вольфганг фон Гете') ?></div>
                                </div>
                                <div class="quote-slider-item">
                                    <h5 class="quote-slider-item__text"><?= __('[:ru]Природа всегда действует не спеша и по-своему экономно[:ua]Природа завжди діє не поспішаючи і по-своєму економно') ?></h5>
                                    <div class="quote-slider-item__author"><?= __('[:ru]Шарль-Луи Монтескье[:ua]Шарль-Луї Монтеск\'є') ?></div>
                                </div>
                            </div>
                            <h2 class="section-title">
                                <?= __('[:ru]ЭКО заведения[:ua]ЕКО заклади') ?>
                            </h2>
                            <div class="subtitle">
                                <?= __('[:ru]Перечень высших учебных заведений экологического направления[:ua] Перелік вищих навчальних закладів екологічного напрямку') ?>
                            </div>
                        </div>
                        <div class="content-body">
                            <?php
                            $args = array(
                                'cat' => !empty($_GET['categories']) ? $_GET['categories'] : 6,
                            );

                            $query = new WP_Query($args);


                            if ($query->have_posts()) {
                                while ($query->have_posts()) {
                                    $query->the_post();
                                    echo '<div class="single-card">'
                                        . '<div class="content order-2 order-md-1">'
                                        . '<h5 class="title"><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></h5>'
                                        . '<div class="info">'
                                        . '<div class="info__faculty mb-1">' . get_field('institute_faculty') . '</div>'
                                        . '<div class="d-flex align-items-center">'
                                        . '<div class="info__place">' . get_field('institute_city') . '</div>'
                                        . '<div class="info__data"><span>' . __('[:ru]Основан:[:ua]Заснований:') . '</span>' . get_field('institute_founded') . '</div>'
                                        . '</div>'
                                        . '</div>'
                                        . '<p class="text">' . get_the_excerpt() . '</p>'
                                        . '</div>'
                                        . '<div class="img order-1 order-md-2" style="background-image: url(' . get_post_first_image_src() . ')"></div>'
                                        . '</div>';
                                }
                            }
                            $args = array(
                                'show_all' => false,
                                'end_size' => 1,
                                'mid_size' => 1,
                                'prev_next' => true,
                                'prev_text' => __(''),
                                'next_text' => __(''),
                                'add_args' => false,
                                'add_fragment' => '',
                                'screen_reader_text' => __('Posts navigation'),
                            );
                            the_posts_pagination($args);
                            wp_reset_postdata();

                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <script>
        function onCategoryChange(id) {
            event.preventDefault();
            var categories = [<?= isset($currentCategory) ? htmlentities($currentCategory) : '' ?>];

            if (categories.includes(id)) {
                categories.splice(categories.indexOf(id), 1);
            } else {
                categories.push(id);
            }

            document.querySelector('[name="categories"]').value = categories.join(',');
            document.getElementById('city').submit();
        }
    </script>

<?php
get_footer('secondary');