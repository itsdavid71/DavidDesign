<?php require_once 'template/header.php'?>

                <header>
                    <div class="nav-menu">
                        <a href="index.php" class="nav-menu-item main-btn" id="">Главная</a>
                        <a href="services.php" class="nav-menu-item services-btn">Услуги</a>
                        <a href="portfolio.php" class="nav-menu-item portfolio-btn">Портфолио</a>
                        <a href="guide.php" class="nav-menu-item guide-btn">Как заказать</a>
                        <a href="faq.php" class="nav-menu-item faq-btn active">Частые вопросы</a>
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
                        <div class="faq">
                            <h2>Частые вопросы</h2>
                            <div class="faq-field">
                                <div class="faq-section">
                                    <span class="question">Есть ли предоплата?</span><br>
                                    <span class="answer">Предоплата 50%</span>
                                </div>
                                <div class="faq-section">
                                    <span class="question">Можно ли получить PSD?</span><br>
                                    <span class="answer">PSD продаётся за двойную цену</span>
                                <div class="faq-section">
                                    <span class="question">Оплата?</span><br>
                                    <span class="answer">Qiwi / Банковская карта</span>
                                </div>
                                <div class="faq-section">
                                    <span class="question">Скидки?</span><br>
                                    <span class="answer">Постоянным покупателем делаю скидки до 20%</span>
                                </div>
                                <div class="faq-section">
                                    <span class="question">Сроки?</span><br>
                                    <span class="answer">Всё зависит от объема работы</span>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
<?php require_once 'template/footer.php'?>
