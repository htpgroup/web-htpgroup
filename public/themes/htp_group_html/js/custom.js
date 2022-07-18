$(document).ready(function(){
    $('.icon-menu-mobile').click(function() {
        $('.nav-middle').toggleClass('active');
    });
    $('.nav-middle').after('<div class="overlay-menu"></div>');
    $('.overlay-menu').click(function() {
        $('.nav-middle').removeClass('active');
    });
    $('.close-menu-mobile').click(function() {
        $('.nav-middle').removeClass('active');
    });
});