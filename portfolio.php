<?php require_once 'template/header.php'?>

                <header>
                    <div class="nav-menu">
                        <a href="index.php" class="nav-menu-item main-btn" id="">Главная</a>
                        <a href="services.php" class="nav-menu-item services-btn">Услуги</a>
                        <a href="portfolio.php" class="nav-menu-item portfolio-btn active">Портфолио</a>
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
                        <div class="portfolio">
                            <div class="socials">
                                <a href="https://vk.com/fake.design" target="_blank"><div class="social vk"></div></a> 
                                <a href="https://github.com/itsdavid71" target="_blank"><div class="social github"></div></a>
                                <a href="https://www.behance.net/daviduccio" target="_blank"><div class="social behance"></div></a>
                            </div>
                        </div>
                    </main>
                </div>
            </div>


    

    

    
<?php require_once 'template/footer.php'?>
