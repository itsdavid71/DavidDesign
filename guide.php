<?php require_once 'template/header.php'?>

                <header>
                    <div class="nav-menu">
                        <a href="index.php" class="nav-menu-item main-btn" id="">Главная</a>
                        <a href="services.php" class="nav-menu-item services-btn">Услуги</a>
                        <a href="portfolio.php" class="nav-menu-item portfolio-btn">Портфолио</a>
                        <a href="guide.php" class="nav-menu-item guide-btn active">Как заказать</a>
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
                        <div class="guide">
                            <div class="steps">
                                <h3 class="mt">Для оформления заказа напиши мне Вконтакте</h3>
                                <a href="https://vk.cc/92feIx" class="link">
                                    <div class="button-white-sm steps-link">
                                        Написать
                                    </div>
                                </a>
                            </div>
                            
                        </div>
                    </main>
                </div>
            </div>
    

    

    

    
<?php require_once 'template/footer.php'?>
