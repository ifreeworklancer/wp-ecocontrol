<?php
/*
* Template name: Форма обращения
* Template type: page
*/
session_start();
get_header('light');

?>

<?php if ($_SESSION['message']) : ?>
<div class="alert alert-<?= $_SESSION['message'] ?> notification">
    Форма успешно отправлена
</div>
<?php session_unset(); endif; ?>

    <nav class="site-navigations site-navigations--mt">
        <div class="container">
            <div class="row">
                <div class="col-12 pl-4">
                    <div class="breadcrumb">
                        <?php
                        if(function_exists('bcn_display'))
                        {
                            bcn_display();
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- News -->
    <section id="page-form-appeal">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 col-lg-10 mx-auto d-flex align-items-center justify-content-center">
                    <div class="content content-form">
                        <div class="form-header">
                            <h3 class="form-header__title">
                                <?= __('[:ru]Обращения[:ua]Звернення') ?>
                            </h3>
                            <div class="form-header__subtitle">
                                <?= __('[:ru]Создай обращения и сделай свой город чище[:ua]Створи звернення та зроби своє місто чистішим') ?>
                            </div>
                        </div>
                        <form method="POST" action="<?= get_theme_file_uri('includes/actions/appeal.php');?>">
                            <div class="form-row">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="l_name" id="last-name" placeholder="<?= __('[:ru]Фамилия[:ua]Прізвище') ?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="f_name" id="first-name" placeholder="<?= __('[:ru]Имя[:ua]Ім\'я*') ?>" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="patronymic" id="patronymic" placeholder="<?= __('[:ru]Отчество[:ua]По батькові') ?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="birthday" id="birthday" placeholder="<?= __('[:ru]День рождения[:ua]Дата народження') ?>">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="E-mail">
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" name="phone" id="phone" placeholder="Телефон*" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="region" id="region" placeholder="<?= __('[:ru]Регион[:ua]Регіон') ?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="city" id="city" placeholder="<?= __('[:ru]Город[:ua]Місто') ?>">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group form-group--small">
                                    <input type="text" class="form-control" name="index" id="index" placeholder="<?= __('[:ru]Индекс[:ua]Індекс') ?>">
                                </div>
                                <div class="form-group form-group--big">
                                    <input type="text" class="form-control" name="outside" id="outside" placeholder="<?= __('[:ru]Улица[:ua]Вулиця') ?>">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="house"  id="house" placeholder="<?= __('[:ru]Дом[:ua]Дім') ?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="entrance"  id="entrance" placeholder="<?= __('[:ru]Подъезд[:ua]Підїзд') ?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="apartment"  id="apartment" placeholder="Квартира">
                                </div>
                            </div>
                            <input type="hidden" name="lat">
                            <input type="hidden" name="lng">
                            <div id="page-form-appeal__maps"></div>
                            <button type="submit" class="btn btn-primary d-flex" id="form-btn"><?= __('[:ru]Отправить обращение[:ua]Відправити звернення') ?></button>
                            <div class="form-group-checkbox d-flex justify-content-center align-items-center">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" name="conditions" class="custom-control-input" id="conditions">
                                    <label class="custom-control-label" for="conditions"><?= __('[:ru]Я принимаю условия[:ua]Я приймаю умови ') ?><a href="#"><?= __('[:ru]Договора-оферты[:ua]Договору-оферти') ?></a></label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer('simple');