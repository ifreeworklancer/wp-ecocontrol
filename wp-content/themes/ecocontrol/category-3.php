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
                            Тема
                        </div>
                        <form action="" method="GET" id="themes">
                            <input type="hidden" name="categories" value="">
                            <?php
                            $categories = get_categories([
                                'type' => 'post',
                                'child_of' => 3,
                                'parent' => '',
                                'orderby' => 'id',
                                'order' => 'ASC',
                                'hide_empty' => 0,
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
    <section id="archive-news">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-9 ml-auto">
                    <div class="content">
                        <div class="content-header">
                            <h2 class="section-title mb-4">
                                <?= __('[:ru]Эко новости[:ua]ЕКО новини'); ?>
                            </h2>
                        </div>
                        <div class="content-body">
                            <div class="news-tabs">
                                <div class="news-tabs-header">
                                    <ul class="news-tabs-header-list">
                                        <li class="news-tabs-header-list__item active"><?= __('[:ru]Последние[:ua]Останні'); ?></li>
                                        <li class="news-tabs-header-list__item"><?= __('[:ru]Прошедшие[:ua]Минулі'); ?></li>
                                    </ul>
                                </div>
                                <div class="news-tabs-body">
                                    <div class="news-tabs-body-item">
                                        <?php
                                        $args = array(
                                            'cat' => !empty($_GET['categories']) ? $_GET['categories'] : 3,
                                            'posts_per_page' => 3,
                                        );

                                        $query = new WP_Query($args);

                                        if ($query->have_posts()) {
                                            while ($query->have_posts()) {
                                                $query->the_post();
                                                echo
                                                    '<div class="news-tabs-body-item-row">'
                                                    . '<div class="content order-2 order-lg-1">'
                                                    . '<h5 class="title"><a href="' . get_post_permalink() . '">' . get_the_title() . '</a></h5>'
                                                    . '<div class="info d-flex align-items-center">'
                                                    . '<div class="info__data">' . get_field('news_data') . '</div>'
                                                    . '<div class="info__author">' . get_field('news_author') . '</div>'
                                                    . '</div>'
                                                    . '<p class="text">' . get_the_excerpt() . '</p>'
                                                    . '</div>'
                                                    . '<div class="img order-1 order-lg-2" style="background-image: url(' . get_post_first_image_src() . ')"></div>'
                                                    . '</div>';
                                            }
                                        }
                                        wp_reset_postdata();
                                        ?>
                                    </div>
                                    <div class="news-tabs-body-item">
                                        <?php
                                        $args = array(
                                            'cat' => !empty($_GET['categories']) ? $_GET['categories'] : 3,
                                            'offset' => 3,
                                        );

                                        $query = new WP_Query($args);

                                        if ($query->have_posts()) {
                                            while ($query->have_posts()) {
                                                $query->the_post();
                                                echo
                                                    '<div class="news-tabs-body-item-row">'
                                                    . '<div class="content order-2 order-lg-1">'
                                                    . '<h5 class="title"><a href="' . get_post_permalink() . '">' . get_the_title() . '</a></h5>'
                                                    . '<div class="info d-flex align-items-center">'
                                                    . '<div class="info__data">' . get_field('news_data') . '</div>'
                                                    . '<div class="info__author">' . get_field('news_author') . '</div>'
                                                    . '</div>'
                                                    . '<p class="text">' . get_the_excerpt() . '</p>'
                                                    . '</div>'
                                                    . '<div class="img order-1 order-lg-2" style="background-image: url(' . get_post_first_image_src() . ')"></div>'
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
            document.getElementById('themes').submit();
        }
    </script>


<?php
get_footer('secondary');