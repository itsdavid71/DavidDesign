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
                        <h2>Graphic Examples</h2>
                            <div class="socials">
                                <a href="https://vk.com/fake.design" target="_blank"><div class="social vk"></div></a> 
                                <a href="https://www.behance.net/daviduccio" target="_blank"><div class="social behance"></div></a>
                            </div>
                            <h2>Web Examples</h2>
                            <div class="">
                                <a href="https://github.com/itsdavid71" target="_blank"><div class="social github"></div></a>
                            </div>
                            <div class="projects">
                                <a href="https://travel.itsdavid.ru" class="link" target="_blank">
                                    <div class="button-white-sm project">
                                        Example 1
                                    </div>
                                </a>
                                <a href="https://moscow.itsdavid.ru" class="link" target="_blank">
                                    <div class="button-white-sm project">
                                        Example 2
                                    </div>
                                </a>
                                <a href="https://faststart.itsdavid.ru" class="link" target="_blank">
                                    <div class="button-white-sm project">
                                        Example 3
                                    </div>
                                </a>           
                            </div>
                        </div>
                    </main>
                </div>
            </div>


    

    

    
<?php require_once 'template/footer.php'?>
