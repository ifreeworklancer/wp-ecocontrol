<?php
/*
Template Name: Шаблон страницы контакты
Template Post Type: page
*/

get_header('secondary');

?>

    <!-- page-contacts -->
    <section id="page-contacts">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content">
                        <div class="content">
                            <h2 class="title">
                                <?= __('[:ru]Контакты[:ua]Контакти[:]') ?>
                            </h2>
                            <div class="subtitle mt-2 mb-4">
                                <?= __('[:ru]Звоните или пишите с радостью ответим на все ваши вопросы[:ua]Телефонуйте чи пишіть з радістю відповімо на всі ваші питання[:]') ?>
                            </div>
                        </div>
                        <ul class="social-list social-list--special mb-5">
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
                        <input type="hidden" name="contactsLat" value="<?= get_field('contacts_coordinates')['lat']; ?>">
                        <input type="hidden" name="contactsLon" value="<?= get_field('contacts_coordinates')['lon']; ?>">
                        <div class="page-contacts-item">
                            <div id="maps-contacts"></div>
                            <div class="page-contacts-item-col">
                                <div class="item">
                                    <div class="title">
                                        <?= __('[:ru]АДРЕС[:ua]АДРЕСА[:]') ?>
                                    </div>
                                    <ul>
                                        <li>
                                            <?= get_field('contacts_place'); ?>
                                        </li>
                                    </ul>
                                </div>
                                <div class="item">
                                    <div class="title">
                                        <?= __('[:ru]ТЕЛЕФОН[:ua]ТЕЛЕФОН[:]') ?>
                                    </div>
                                    <ul>
                                        <li>
                                            <?= get_field('contacts_phone')['contacts_phone_fist']; ?>
                                        </li>
                                        <li>
                                            <?= get_field('contacts_phone')['contacts_phone_second']; ?>
                                        </li>
                                    </ul>
                                </div>
                                <div class="item">
                                    <div class="title">
                                        <?= __('[:ru]По общим вопросам[:ua]ПО ЗАГАЛЬНІМ ПИТАННЯМ[:]') ?>
                                    </div>
                                    <ul>
                                        <li>
                                            <a href="mailto:<?= get_field('contacts_all_email'); ?>"><?= get_field('contacts_all_email'); ?></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="item">
                                    <div class="title">
                                        <?= __('[:ru]для волонтеров[:ua]ДЛЯ ВОЛОНТЕРІВ[:]') ?>
                                    </div>
                                    <ul>
                                        <li>
                                            <a href="mailto:<?= get_field('contacts_val_email'); ?>"><?= get_field('contacts_val_email'); ?></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php
get_footer('footer');