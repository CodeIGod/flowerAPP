var swiper = new Swiper('.swiper-container', {
    pagination: {
        el: '.swiper-pagination',
    },
});
let len = ($('nav a').length);
for(let i =0;i < len;i++){
    $('nav a').eq(i).click(function(){
        $('.nav_frist').css({transform:`translateX(${i*$(this).width()}px)`});
        $(this).closest('li').siblings().children('a').children('span').removeClass('write');
        $(this).children('span').addClass('write');

    })
}