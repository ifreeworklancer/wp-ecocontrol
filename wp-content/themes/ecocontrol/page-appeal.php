<?php

require_once('store.php');

require_once('header-light.php');

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

    <!-- page-appeal -->
    <section id="page-appeal">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content">
                        <div class="page-appeal-item">
                            <div class="page-appeal-item-content order-2 order-sm-1">
                                <div class="page-appeal-item-content-header">
                                    <h4 class="title">
                                        Звернення №324
                                    </h4>
                                </div>
                                <div class="page-appeal-item-content-body">
                                    <div class="item">
                                        <div class="item-title">Адреса:
                                            <span class="value">вулиця Зелена, 15, Пісочин, Харківська область, Україна, 62417</span>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-title">Координати сміттєзвалища:
                                            <span class="value">49.965657842203, 36.122227460146</span>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-title">Відповідальний:
                                            <span class="value">Харківська обласна державна адміністрація</span>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-title">Дата контролю:
                                            <span class="value">23 Листопада 2018</span>
                                        </div>
                                    </div>
                                    <div class="status">
                                        в роботі
                                    </div>
                                    <a href="#" class="send-appeal">
                                        Подати звернення
                                    </a>
                                </div>
                            </div>
                            <div id="appeal-map" class="map order-1 order-sm-2" style="background-image:url('images/content/secondary/page-appeal/page-appeal-map.jpg');"></div>
                        </div>
                        <div class="page-appeal-img mb-5">
                            <div class="page-appeal-img-item" style="background-image: url('images/content/secondary/page-appeal/page-appeal-item-1.jpg')"></div>
                            <div class="page-appeal-img-item" style="background-image: url('images/content/secondary/page-appeal/page-appeal-item-2.jpg')"></div>
                            <div class="page-appeal-img-item" style="background-image: url('images/content/secondary/page-appeal/page-appeal-item-1.jpg')"></div>
                            <div class="page-appeal-img-item" style="background-image: url('images/content/secondary/page-appeal/page-appeal-item-2.jpg')"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



<?php
require_once('footer.php');