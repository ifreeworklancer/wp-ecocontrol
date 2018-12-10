<?php


get_header('light');

?>

    <!-- Maps -->
    <div id="eco-maps-intro">
        <iframe src="https://maphub.net/embed/41999" frameborder="0"></iframe>
    </div>
    <section id="appeal-maps">
        <div class="container">
            <div class="row justify-content-around align-items-center">
                <div class="col-sm-6 col-lg-5 col-xl-4">
                    <div class="appeal-maps-item">
                        <div class="appeal-maps-item-title">
                            <h5 class="title text-white font-weight-normal">
                                <?= __('[:ru]Оставьте ваше обращение если вы заметили нарушение экологических норм[:ua]Залиште ваше звернення якщо ви помітили порушення екологічних норм[:]'); ?>
                            </h5>
                        </div>
                        <div class="appeal-maps-item__subtitle text-white">
                            <?= __('[:ru]Ваше обращение поможет сделать Украину чище[:ua]Ваше звернення допоможе зробити Україну чистішою[:]'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5 mt-4 mt-sm-0">
                    <a href="<?= get_page_link(29); ?>"
                       class="btn btn-primary"><?= __('[:ru]оставить[:ua]залишити[:]') ?></a>
                </div>
            </div>
        </div>
    </section>

    <section id="appeal-maps-items">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <?php
                    $cat = get_the_category();
                    ?>
                    <div class="appeal-maps-slider appeal-maps-slider--popular">
                        <div class="appeal-maps-slider-title"><h4 class="title"><?= get_cat_name(38) ?></h4></div>
                        <div class="d-flex align-items-start">
                            <?php
                            $args = array(
                                'cat' => 38,
                                'posts_per_page' => -1,
                            );

                            $query = new WP_Query($args);

                            if ($query->have_posts()) {
                                while ($query->have_posts()) {
                                    $query->the_post();
                                    echo
                                        '<div class="appeal-maps-slider-col"><a href="'.get_the_permalink().'" class="appeal-maps-slider-item">'
                                        . '<div class="img" style="background-image: url(' . get_post_first_image_src() . ')"></div>'
                                        . '<div class="data"><div class="data__item">' . get_field('appeal_data') . '</div></div>'
                                        . '</a></div>';
                                }
                            }

                            wp_reset_postdata();
                            ?>
                        </div>
                    </div>

                    <div class="appeal-maps-slider appeal-maps-slider--new">
                        <div class="appeal-maps-slider-title"><h4 class="title"><?= get_cat_name(39) ?></h4></div>
                        <div class="d-flex align-items-start">
                            <?php
                            $args = array(
                                'cat' => 39,
                                'posts_per_page' => -1,
                            );

                            $query = new WP_Query($args);

                            if ($query->have_posts()) {
                                while ($query->have_posts()) {
                                    $query->the_post();
                                    echo
                                        '<div class="appeal-maps-slider-col"><a href="'.get_the_permalink().'" class="appeal-maps-slider-item">'
                                        . '<div class="img" style="background-image: url(' . get_post_first_image_src() . ')"></div>'
                                        . '<div class="data"><div class="data__item">' . get_field('appeal_data') . '</div></div>'
                                        . '</a></div>';
                                }
                            }

                            wp_reset_postdata();
                            ?>
                        </div>
                    </div>

                    <div class="appeal-maps-slider appeal-maps-slider--performed">
                        <div class="appeal-maps-slider-title"><h4 class="title"><?= get_cat_name(40) ?></h4></div>
                        <div class="d-flex align-items-start">
                            <?php
                            $args = array(
                                'cat' => 40,
                                'posts_per_page' => -1,
                            );

                            $query = new WP_Query($args);

                            if ($query->have_posts()) {
                                while ($query->have_posts()) {
                                    $query->the_post();
                                    echo
                                        '<div class="appeal-maps-slider-col"><a href="'.get_the_permalink().'" class="appeal-maps-slider-item">'
                                        . '<div class="img" style="background-image: url(' . get_post_first_image_src() . ')"></div>'
                                        . '<div class="data"><div class="data__item">' . get_field('appeal_data') . '</div></div>'
                                        . '</a></div>';
                                }
                            }

                            wp_reset_postdata();
                            ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


<?php

get_footer();