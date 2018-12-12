<?php
/*
Template Name: Шаблон страницы обращения
Template Post Type: post
*/

get_header('light');

?>
    <nav class="site-navigations site-navigations--mt">
        <div class="container">
            <div class="row">
                <div class="col-12 pl-4">
                    <div class="breadcrumb">
                        <?php
                        if (function_exists('bcn_display')) {
                            bcn_display();
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- page-appeal -->
    <section id="page-appeal">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content">
                        <div class="page-appeal-item">
                            <div class="page-appeal-item-content order-2 order-sm-1">
                                <?php while (have_posts()) : the_post();
                                    echo
                                        '<div class="page-appeal-item-content-header">'
                                        . '<h4 class="title">' . get_the_title() . '</h4>'
                                        . '</div>'
                                        . '<div class="page-appeal-item-content-body">'
                                        . '<div class="item">'
                                        . ' <div class="item-title">Адреса:'
                                        . ' <span class="value">' . get_field('adress') . '</span>'
                                        . ' </div>'
                                        . '</div>'
                                        . ' <div class="item">'
                                        . ' <div class="item-title">Координати сміттєзвалища:'
                                        . '  <span class="value">' . get_field('coordinates')['lat'] . ', ' . get_field('coordinates')['lon'] . '</span>'
                                        . '</div>'
                                        . '</div>'
                                        . ' <div class="item">'
                                        . '<div class="item-title">Відповідальний:'
                                        . ' <span class="value">' . get_field('respons') . '</span>'
                                        . ' </div>'
                                        . '</div>'
                                        . '<div class="item">'
                                        . ' <div class="item-title">Дата контролю:'
                                        . ' <span class="value">' . get_field('appeal_data') . '</span>'
                                        . '</div>'
                                        . '</div>'
                                        . '<div class="status">' . get_field('status') . '</div>'
                                        . ' <a href="' . get_the_permalink(29) . '" class="send-appeal">' . __('[:ru]подать обращение[:ua]подати звернення[:]') . '</a>'
                                        . '<input type="hidden" name="appealLat" value="' . get_field('coordinates')['lat'] . '">'
                                        . '<input type="hidden" name="appealLon" value="' . get_field('coordinates')['lon'] . '">'
                                        . '</div>';
                                endwhile; ?>
                            </div>
                            <div id="appeal-map" class="map order-1 order-sm-2"></div>
                        </div>
                        <div class="page-appeal-img mb-5">
                            <?php
                            //                            $images = get_field('appeal_images');
                            //                                foreach ($images as $image) {
                            //                                    echo
                            //                                    '<a href="'. $image['url'] .'" rel="fancybox-thumb" class="page-appeal-img-item fancybox" style="background-image: url('. $image['url'] .')"></a>';
                            //                                }
                            ?>
                            <?php
                            while (have_posts()) : the_post();
                                the_content();
                            endwhile; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php
get_footer('footer');