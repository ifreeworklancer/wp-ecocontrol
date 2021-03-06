<?php


get_header(secondary);

?>


    <!-- Events -->
    <section id="archive-held-events">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-9 ml-auto">
                    <div class="content">
                        <div class="content-header mb-5">
                            <h3 class="section-title">
                                <?= __('[:ru]Природоохранные акции[:ua]Природоохоронні акції'); ?>
                            </h3>
                        </div>
                        <div class="content-body">
                            <div class="news-tabs">
                                <div class="news-tabs-header">
                                    <ul class="news-tabs-header-list">
                                        <li class="news-tabs-header-list__item active"><?= __('[:ru]Запланированные[:ua]Заплановані'); ?></li>
                                        <li class="news-tabs-header-list__item"><?= __('[:ru]Прошедшие[:ua]Минулі'); ?></li>
                                    </ul>
                                </div>
                                <div class="news-tabs-body">
                                    <div class="news-tabs-body-item">
                                        <?php
                                        $args = array(
                                            'category_name' => 'actions',
                                            'post_status' => 'future'
                                        );

                                        $query = new WP_Query( $args );

                                        // обрабатываем результат
                                        if ( $query->have_posts() ) {
                                            while ( $query->have_posts() ) {
                                                $query->the_post();
                                                echo '<div class="news-tabs-body-item-row">'
                                                    . '<div class="content order-2 order-md-1">'
                                                    . '<h5 class="title"><a href="' . get_post_permalink() . '">' . get_the_title() . '</a></h5>'
                                                    . '<div class="info">'
                                                    . '<div class="d-flex align-items-center">'
                                                    . '<div class="info__data">' . get_field('events_data') . '</div>'
                                                    . '<div class="info__place">' . get_field('events_place') . '</div>'
                                                    . '</div>'
                                                    . '<div class="info__more"><a href="' . get_post_permalink() . '">'.__('[:ru]Подробнее[:ua]Детальніше').'</a></div>'
                                                    . '</div>'
                                                    . '<p class="text">' . get_the_excerpt() . '</p>'
                                                    . '</div>'
                                                    . '<div class="img order-1 order-md-2" style="background-image: url(' . get_post_first_image_src() . ')"><a href="' . get_post_permalink() . '" class="btn btn-primary">' . __('[:ru]Принять участие[:ua]Взяти участь') . '</a></div>'
                                                    . '</div>';
                                            }
                                        }
                                        $args = array(
                                            'show_all'     => false,
                                            'end_size'     => 1,
                                            'mid_size'     => 1,
                                            'prev_next'    => true,
                                            'prev_text'    => __(''),
                                            'next_text'    => __(''),
                                            'add_args'     => false,
                                            'add_fragment' => '',
                                            'screen_reader_text' => __( 'Posts navigation' ),
                                        );
                                        the_posts_pagination($args);
                                        wp_reset_postdata();
                                        ?>
                                    </div>
                                    <div class="news-tabs-body-item">
                                        <?php
                                        $args = array(
                                            'category_name' => 'actions',
                                            'post_status' => 'publish'
                                        );

                                        $query = new WP_Query( $args );


                                        if ( $query->have_posts() ) {
                                            while ( $query->have_posts() ) {
                                                $query->the_post();
                                                echo '<div class="news-tabs-body-item-row">'
                                                    . '<div class="content order-2 order-md-1">'
                                                    . '<h5 class="title"><a href="' . get_post_permalink() . '">' . get_the_title() . '</a></h5>'
                                                    . '<div class="info">'
                                                    . '<div class="d-flex align-items-center">'
                                                    . '<div class="info__data">' . get_field('events_data') . '</div>'
                                                    . '<div class="info__place">' . get_field('events_place') . '</div>'
                                                    . '</div>'
                                                    . '<div class="info__more"><a href="' . get_post_permalink() . '">'.__('[:ru]Подробнее[:ua]Детальніше').'</a></div>'
                                                    . '</div>'
                                                    . '<p class="text">' . get_the_excerpt() . '</p>'
                                                    . '</div>'
                                                    . '<div class="img order-1 order-md-2" style="background-image: url(' . get_post_first_image_src() . ')"></div>'
                                                    . '</div>';
                                            }
                                        }
                                        $args = array(
                                            'show_all'     => false,
                                            'end_size'     => 1,
                                            'mid_size'     => 1,
                                            'prev_next'    => true,
                                            'prev_text'    => __(''),
                                            'next_text'    => __(''),
                                            'add_args'     => false,
                                            'add_fragment' => '',
                                            'screen_reader_text' => __( 'Posts navigation' ),
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

<?php
get_footer('secondary');