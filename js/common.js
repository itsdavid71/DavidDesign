$(function(){
    $(document).pjax('.nav-menu-item, .mobile-menu-item, .link', '.pjax-container', {fragment: '.pjax-container'});
    $('.pjax-container').on('pjax:success', function() {
        $.pjax({
            url: window.location.href,
            container: '.nav-menu',
            fragment: '.nav-menu',
        });
    });

});