<?php require_once 'template/header.php'?>
                <header>
                    <div class="nav-menu">
                        <a href="index.php" class="nav-menu-item active main-btn" id="">Главная</a>
                        <a href="services.php" class="nav-menu-item services-btn">Услуги</a>
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
                        // $(document).ready(function() {
                        //     function logo() {
                        //     if ($('.loading-page').css('display','none')) {
                        //     $('.main-logo').fadeIn(500);
                        //     }  
                        // }
                        // function logoPos() {
                        //     $('.main-logo').animate({
                        //     left: 0
                        //     }, 500);
                        // }
                        // function textPos() {
                        //     $('.welcome').animate({
                        //     right: 0,
                        //     opacity: 1
                        //     }, 500);

                        // } function textPos_2() {
                        //     $('.welcome_2').animate({
                        //     right: 0,
                        //     opacity: 1
                        //     }, 500);
                        // }
                        // setTimeout(logo, 1000);
                        // setTimeout(logoPos, 2000);
                        // setTimeout(textPos, 2000);
                        // setTimeout(textPos_2, 2000);
                        // });
                        // $('.main-logo').css('display', 'block');
                        
                    </script>
                </header>
                <div class="pjax-container">
                <main>

                    <div class="main">
                        <!-- <h1>Main</h1> -->
                        <div class="row justify-content-md-center">
                            <div class="col-md-2">
                                <div class="main-logo"></div>
                            </div>
                            <div class="col-md-3">
                                <div class="main-text">
                                    <div class="welcome">Welcome
                                        <p class="welcome_2">to my Studio</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-md-center">
                            <a href="services.php" class="link"><div class="button-white-sm">Мои услуги</div></a>
                        </div>
                    </div>
                </main>
            </div>
        </div>
<?php require_once 'template/footer.php'?>
