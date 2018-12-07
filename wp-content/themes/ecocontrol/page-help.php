<?php
/*
* Template name: Поддержать
* Template type: page
*/
get_header('simple'); ?>

    <!-- News -->
    <section id="page-help">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-sm-10 col-lg-8 mx-auto d-flex align-items-center justify-content-center">
                    <div class="content content-form">
                        <div class="form-header">
                            <a href="/" class="logo" style="background-image:url('/images/icon/logo/logo-help.png');"></a>

                            <div class="title">
                                Наша робота стає можливою тільки завдяки
                                допомозі таких людей як ви.  Зробіть пожертву
                                сьогодні,щоб підтримати роботу <span class="font-weight-bold">ECOCONTROL!</span>
                            </div>
                        </div>
                        <div class="form-sum">
                            <div class="form-sum__title">
                                Виберіть суму благодійного внеску:
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
                                    <label for="sum-value">Інша сумма</label>
                                    <input type="number" class="form-control-sum" id="sum-value" placeholder="200" min="0" value="200">
                                </div>
                            </form>
                            <div class="form-sum-final">
                                <div class="form-sum-final-item form-sum-final-item--text">
                                    Сума вашого благодійного внеску:
                                </div>
                                <div class="form-sum-final-item">
                                    $ <span id="form-sum-final-value" class="value">200</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-body">
                            <form>
                                <div class="form-row">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="last-name" placeholder="Прізвисько">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="first-name" placeholder="Ім'я*" require>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="patronymic" placeholder="По батькові">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="birthday" placeholder="Дата народження">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="email" placeholder="E-mail">
                                    </div>
                                    <div class="form-group">
                                        <input type="tel" class="form-control" id="phone" placeholder="Телефон*" require>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="region" placeholder="Регіон">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="city" placeholder="Місто">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group form-group--small">
                                        <input type="text" class="form-control" id="index" placeholder="Індекс">
                                    </div>
                                    <div class="form-group form-group--big">
                                        <input type="text" class="form-control" id="outside" placeholder="Вулиця">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="house" placeholder="Дім">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="entrance" placeholder="Підїзд">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="apartment" placeholder="Квартира">
                                    </div>
                                </div>
                                <input type="hidden" value="help">
                                <button type="submit" class="btn btn-primary d-flex">Зробити внесок</button>
                                <div class="form-group-checkbox d-flex justify-content-center align-items-center">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="conditions">
                                        <label class="custom-control-label" for="conditions">Я приймаю умови <a href="#">Договору-оферти</a></label>
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