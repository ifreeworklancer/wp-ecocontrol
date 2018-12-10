<?php

$currentCategory = !empty($_GET['categories']) ? $_GET['categories'] : null;

get_header(secondary);

?>
    <nav class="archive-nav">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="archive-nav-outer">
                        <div class="news-theme-nav__title mb-3">
                            <?= __('[:ru]Месяц событий[:ua]Місяць події[:]'); ?>
                        </div>
                        <form action="" method="GET" id="months">
                            <input type="hidden" name="categories" value="">
                            <?php
                            $categories = get_categories([
                                'type' => 'post',
                                'child_of' => 5,
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
                                        id="' . $cat->cat_ID . '" onchange="onCategoryChange('. $cat->cat_ID .')"
                                        '. (in_array($cat->cat_ID, explode(',', $currentCategory)) ? ' checked' : '') .'
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

    <!-- Calendar -->
    <section id="archive-calendar">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-10 ml-auto">
                    <div class="content">
                        <div class="content-header mb-5">
                            <h2 class="section-title">
                                ЕКО календар
                            </h2>
                        </div>
                        <div class="content-body">
                            <div class="d-flex flex-wrap justify-content-center align-items-start">
                                <?php
                                $args = array(
                                    'cat' => !empty($_GET['categories']) ? $_GET['categories'] : 5,
                                );

                                $query = new WP_Query($args);

                                if ($query->have_posts()) {
                                    while ($query->have_posts()) {
                                        $query->the_post();
                                        echo '<div class="calendar-column"><div class="calendar-card">'
                                            . '<div class="calendar-card-header">'
                                            . '<div class="img" style="background-image: url(' . get_post_first_image_src() . ')"></div>'
                                            . '</div>'
                                            . '<div class="calendar-card-body">'
                                            . '<h6 class="title">' . get_the_title() . '</h6>'
                                            . '<p class="text">' . get_the_excerpt() . '</p>'
                                            . '</div>'
                                            . '<div class="calendar-card-footer">'
                                            . '<div class="data">' . get_field('calendar_data') . '</div>'
                                            . '</div>'
                                            . '</div></div>';
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
            document.getElementById('months').submit();
        }
    </script>

<?php

get_footer('secondary');