<?php
/*
* Template name: Принять участие
* Template type: page
*/
get_header('light'); ?>

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

    <!-- News -->
    <section id="subscribe">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 col-lg-10 mx-auto d-flex align-items-center justify-content-center">
                    <div class="single-form">
                        <div class="single-form-header">
                            <div class="title">  <?= __('[:ru]Вместе мы сделаем страну лучше[:ua]Разом ми зробимо країну краще') ?></div>
                            <div class="subtitle">  <?= __('[:ru]Прими участие в мероприятии ECOCONTROL, помоги Украины[:ua]Візьми участь у заході ECOCONTROL, допоможи Україні') ?></div>
                        </div>
                        <div class="single-form-content">
                            <form>
                                <div class="form-row">
                                    <div class="form-group w-100">
                                        <input type="text" class="form-control" id="first-name"
                                               placeholder="<?= __('[:ru]Имя[:ua]Ім\'я*') ?>" require>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="email" placeholder="E-mail">
                                    </div>
                                    <div class="form-group">
                                        <input type="tel" class="form-control" id="phone" placeholder="Телефон*"
                                               require>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary d-flex mr-0"><?= __('[:ru]Принять участие[:ua]Взяти участь') ?></button>
                                <div class="form-group-checkbox d-flex justify-content-center align-items-center">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="conditions">
                                        <label class="custom-control-label" for="conditions"><?= __('[:ru]Я принимаю условия[:ua]Я приймаю умови ') ?><a href="#"><?= __('[:ru]Договора-оферты[:ua]Договору-оферти') ?></a></label>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
require_once('footer-simple.php');