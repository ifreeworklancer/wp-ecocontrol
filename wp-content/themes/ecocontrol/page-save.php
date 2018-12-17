<?php
/*
* Template name: Сберечь
* Template type: page
*/
session_start();
get_header('simple'); ?>
<?php if ($_SESSION['message']) : ?>
    <div class="alert alert-<?= $_SESSION['message'] ?> notification">
        Форма успешно отправлена
    </div>
    <?php session_unset(); endif; ?>

    <!-- News -->
    <section id="page-help" class="pt-5">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-sm-10 col-lg-8 mx-auto d-flex align-items-center justify-content-center">
                    <div class="content content-form">
                        <div class="form-header">
                            <a href="/" class="logo"
                               style="background-image:url('<?= get_theme_file_uri('images/icon/logo/logo-help.png') ?>');"></a>

                            <div class="title">
                                <?= __('[:ru]Наша работа становится возможной только благодаря вам. Сделайте пожертвование сегодня, чтобы сохранить лес[:ua]Наша робота стає можливою тільки завдяки вам. Зробити пожертву сьогодні щоб зберегти ліс') ?>
                            </div>
                        </div>
                        <div class="form-sum">
                            <div class="form-sum__title">
                                <?= __('[:ru]Выберите сумму благотворительного взноса:[:ua]Виберіть суму благодійного внеску:') ?>
                            </div>
                            <ul class="form-sum-choice">
                                <li class="form-sum-choice-item" data-value="500">
                                    500грн
                                </li>
                                <li class="form-sum-choice-item" data-value="350">
                                    350грн
                                </li>
                                <li class="form-sum-choice-item" data-value="200">
                                    200грн
                                </li>
                            </ul>
                            <form>
                                <div class="form-group d-flex justify-content-center align-items-center">
                                    <label for="sum-value"><?= __('[:ru]Другая сумма[:ua]Інша сумма') ?></label>
                                    <input type="number" class="form-control-sum" id="sum-value" placeholder="200"
                                           min="0" value="200">
                                </div>
                            </form>
                            <div class="form-sum-final">
                                <div class="form-sum-final-item form-sum-final-item--text">
                                    <?= __('[:ru]Сумма вашего благотворительного взноса:[:ua]Сума вашого благодійного внеску:') ?>
                                </div>
                                <div class="form-sum-final-item">
                                    <span id="form-sum-final-value" class="value">200</span> грн
                                </div>
                            </div>
                        </div>
                        <div class="form-body">
                            <form method="POST" action="<?= get_theme_file_uri('includes/actions/help.php'); ?>">
                                <div class="form-row">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="l_name" id="last-name"
                                               placeholder="<?= __('[:ru]Фамилия[:ua]Прізвище') ?>">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="f_name" id="first-name"
                                               placeholder="<?= __('[:ru]Имя[:ua]Ім\'я*') ?>" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="patronymic" id="patronymic"
                                               placeholder="<?= __('[:ru]Отчество[:ua]По батькові') ?>">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="birthday" id="birthday"
                                               placeholder="<?= __('[:ru]День рождения[:ua]Дата народження') ?>">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" id="email"
                                               placeholder="E-mail">
                                    </div>
                                    <div class="form-group">
                                        <input type="tel" class="form-control" name="phone" id="phone"
                                               placeholder="Телефон*" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="region" id="region"
                                               placeholder="<?= __('[:ru]Регион[:ua]Регіон') ?>">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="city" id="city"
                                               placeholder="<?= __('[:ru]Город[:ua]Місто') ?>">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group form-group--small">
                                        <input type="text" class="form-control" name="index" id="index"
                                               placeholder="<?= __('[:ru]Индекс[:ua]Індекс') ?>">
                                    </div>
                                    <div class="form-group form-group--big">
                                        <input type="text" class="form-control" name="outside" id="outside"
                                               placeholder="<?= __('[:ru]Улица[:ua]Вулиця') ?>">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="house" id="house"
                                               placeholder="<?= __('[:ru]Дом[:ua]Дім') ?>">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="entrance" id="entrance"
                                               placeholder="<?= __('[:ru]Подъезд[:ua]Підїзд') ?>">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="apartment" id="apartment"
                                               placeholder="Квартира">
                                    </div>
                                </div>
                                <input type="hidden" name="v_help" value="200">
                                <button type="submit"
                                        class="btn btn-primary d-flex" id="form-btn"><?= __('[:ru]Пожертвовать[:ua]Зробити внесок') ?></button>
                                <div class="form-group-checkbox d-flex justify-content-center align-items-center">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="conditions">
                                        <label class="custom-control-label"
                                               for="conditions"><?= __('[:ru]Я принимаю условия[:ua]Я приймаю умови ') ?>
                                            <a href="#"><?= __('[:ru]Договора-оферты[:ua]Договору-оферти') ?></a></label>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <a href="<?= '/category/report/';?>" class="btn btn-report">
                    <span class="icon"></span><?= __('[:ru]Отчет о расходах[:ua]Звіт про витрати[:]')?>
                </a>
            </div>
        </div>
    </section>

<?php
require_once('footer-simple.php');