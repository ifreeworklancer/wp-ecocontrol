<?php

get_header('secondary');

?>

    <nav class="archive-nav">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="archive-nav-outer">
                        <ul class="archive-nav-list">
                            <?php
                            if (in_category(2)) {
                                $args = array(
                                    'cat' => 2,
                                    'order' => 'ASC'
                                );

                                $query = new WP_Query($args);

                                if ($query->have_posts()) {
                                    while ($query->have_posts()) {
                                        $query->the_post();
                                        echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
                                    }
                                }
                                wp_reset_postdata();
                            }

                            if (in_category(7)) {
                                $args = array(
                                    'cat' => 7,
                                    'order' => 'ASC'
                                );

                                $query = new WP_Query($args);

                                if ($query->have_posts()) {
                                    while ($query->have_posts()) {
                                        $query->the_post();
                                        echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
                                    }
                                }
                                echo '<li><a href="' . get_page_link(9) . '">' . __('[:ru]присоедниться[:ua]приэднатися') . '</a></li>';
                                wp_reset_postdata();
                            }

                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Single -->
    <section id="single">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-9 ml-auto">
                    <div class="single-content">
                        <?php while (have_posts()) : the_post();
                            echo '<h3>' . get_the_title() . '</h3>';
                            if (in_category(4)) {
                                echo
                                    '<div class="single-content__data">' . get_field('events_data') . '</div>';
                            }

                            if (in_category(3)) {
                                echo
                                    '<div class="single-content__data">' . get_field('news_data') . '</div>';
                            }
                            echo '<ul class="social-list social-list--special mb-5">'
                                . '<li class="social-list-item social-list-item--facebook">'
                                . '<a href="' . get_theme_mod('facebook') . '">'
                                . '<svg width="20" height="20">'
                                . ' <use xlink:href="#facebook-icon"></use>'
                                . ' </svg>'
                                . ' </a>'
                                . ' </li>'
                                . ' <li class="social-list-item social-list-item--youtube">'
                                . '<a href="' . get_theme_mod('youtube') . '">'
                                . '<svg width="20" height="20">'
                                . '    <use xlink:href="#youtube-icon"></use>'
                                . '</svg>'
                                . '</a>'
                                . ' </li>'
                                . ' <li class="social-list-item social-list-item--instagram">'
                                . '<a href="' . get_theme_mod('instagram') . '">'
                                . '<svg width="20" height="20">'
                                . '   <use xlink:href="#instagram-icon"></use>'
                                . '</svg>'
                                . ' </a>'
                                . ' </li>'
                                . '</ul>';
                            the_content();
                        endwhile; ?>
                    </div>
                    <?php
                    if (in_category(4)) {
                        echo
                            '<div class="single-form">'
                            . '<div class="single-form-header">'
                            . '<div class="title">' . __('[:ru]Вместе мы сделаем страну лучше[:ua]Разом ми зробимо країну краще') . '</div>'
                            . '<div class="subtitle">' . __('[:ru]Прими участие в мероприятии ECOCONTROL, помоги Украины[:ua]Візьми участь у заході ECOCONTROL, допожи Україні') . '</div>'
                            . '</div>'
                            . '<div class="single-form-content">'
                            . '<form>'
                            . '<div class="form-row">'
                            . '<div class="form-group w-100">'
                            . '<input type="text" class="form-control" id="first-name" placeholder="' . __('[:ru]Имя[:ua]Ім\'я*') . '" require>'
                            . '</div>'
                            . '</div>'
                            . '<div class="form-row">'
                            . '<div class="form-group">'
                            . '<input type="email" class="form-control" id="email" placeholder="E-mail">'
                            . '</div>'
                            . '<div class="form-group">'
                            . '<input type="tel" class="form-control" id="phone" placeholder="Телефон*" require>'
                            . '</div>'
                            . '</div>'
                            . '<button type="submit" class="btn btn-primary d-flex mr-0">' . __('[:ru]Принять участие[:ua]Взяти участь') . '</button>'
                            . '<div class="form-group-checkbox d-flex justify-content-center align-items-center">'
                            . '<div class="custom-control custom-checkbox">'
                            . '<input type="checkbox" class="custom-control-input" id="conditions">'
                            . '<label class="custom-control-label" for="conditions">' . __('[:ru]Я принимаю условия[:ua]Я приймаю умови') . '<a href="#">' . __('[:ru]Договора-оферты[:ua]Договору-оферти') . '</a></label>'
                            . '</div>'
                            . '</div>'
                            . ' </form>'
                            . '</div>'
                            . '</div>';
                    }
                    ?>

                </div>
            </div>
        </div>
    </section>

<?php
get_footer('secondary');