<?php require_once 'template/header.php'?>

                <header>
                    <div class="nav-menu">
                        <a href="index.php" class="nav-menu-item main-btn" id="">Главная</a>
                        <a href="services.php" class="nav-menu-item services-btn active">Услуги</a>
                        <a href="portfolio.php" class="nav-menu-item portfolio-btn">Портфолио</a>
                        <a href="guide.php" class="nav-menu-item guide-btn">Как заказать</a>
                        <a href="faq.php" class="nav-menu-item faq-btn">Частые вопросы</a>
                        <div class="nav-menu-line"></div>
                    </div>
                    <script>
                        $('.nav-menu-item').click(function(){
                            $('.nav-menu-item').removeClass("active");
                            $(this).addClass("active");
                        });
                        
                    </script>
                </header>
                <div class="pjax-container">
        <main>
            <div class="services">
                <h2>Выбери тип</h2>
                <div class="row justify-content-md-center">
                    <div class="col-md-4">
                        <div class="services-graphic">
                            <div class="button-white services-title services-title-graphic">Graphic.</div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="services-web">
                            <div class="button-white services-title services-title-web">Web Dev.</div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <table class="table table-borderless services-graphic-table">
                            <thead class="table-services-head">
                                <tr>
                                <th scope="col">Название</th>
                                <th scope="col">Цена</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td class="services-name">Оформление сообщества VK</td>
                                <td class="services-price">450 RUB.</td>
                                </tr>
                                <tr>
                                <td class="services-name">Баннер</td>
                                <td class="services-price">200 RUB</td>
                                </tr>
                                <tr>
                                <td class="services-name">Логотип</td>
                                <td class="services-price">800 RUB</td>
                                </tr>
                                <tr>
                                <td class="services-name">Превью YouTube</td>
                                <td class="services-price">200 RUB</td>
                                </tr>
                                <tr>
                                <td class="services-name">Оформление YouTube</td>
                                <td class="services-price">450 RUB</td>
                                </tr>
                                <tr>
                                <td class="services-name">Дизайн сайта</td>
                                <td class="services-price">Договорная</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-8">
                        <table class="table table-borderless services-web-table">
                            <thead class="table-services-head">
                                <tr>
                                <th scope="col">Название</th>
                                <th scope="col">Цена</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td class="services-name">Вёрстка PSD макета</td>
                                <td class="services-price">2000 RUB.</td>
                                </tr>
                                <tr>
                                <td class="services-name">Сайт под ключ</td>
                                <td class="services-price">5000 RUB</td>
                                </tr>        
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <script>
                // $('.services-title').click(function() {
                //     $('.services-title').removeClass("services-active");
                //     $(this).addClass("services-active");
                //     if ($(".services-graphic-table").is(":visible")) {
                //         $('.services-title-graphic').removeClass("services-active");
                //     }
                //     if ($(".services-web-table").is(":visible")) {
                //         $('.services-title-web').removeClass("services-active");
                //     }
                // });

                $('.services-graphic').click(function() {
                    $('.services-web-table').fadeOut(0);
                    $('.services-graphic-table').fadeIn(300);

                });

                $('.services-web').click(function() {
                    $('.services-web-table').fadeIn(300);
                    $('.services-graphic-table').fadeOut(0);
                });
                $('.button-white').click(function() {
                    $('.button-white').removeClass('button-before');
                    $(this).toggleClass('button-before');
                })
            </script>
        </main>
    </div>
</div>

<?php require_once 'template/footer.php'?>
