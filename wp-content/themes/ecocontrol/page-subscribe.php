<?php
/*
* Template name: Присоединиться
* Template type: page
*/


get_header('light');

?>

    <nav class="site-navigations site-navigations--mt">
        <div class="container">
            <div class="row">
                <div class="col-12 pl-4">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Library</a></li>
                        <li class="breadcrumb-item">Data</li>
                    </ol>
                </div>
            </div>
        </div>
    </nav>

    <!-- News -->
    <section id="subscribe">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 col-lg-10 mx-auto d-flex align-items-center justify-content-center">
                    <div class="content content-form">
                        <div class="form-header">
                            <h3 class="form-header__title">
                                Разом ми сильніші
                            </h3>
                            <div class="form-header__subtitle">
                                Стань волонтером ECOCONTROL, допожи Україні
                            </div>
                        </div>
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
                            <input type="hidden" value="subscibe">
                            <button type="submit" class="btn btn-primary d-flex">Стати волонтером</button>
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
    </section>

<?php
get_footer('simple');