$(function () {
    $('.exit').on('click',function () {
        $.ajax({
            url:'/flowerApp/index.php/set/exitLogin',
            success:function (data) {
                console.log(data);
                if (data=='ok'){
                    location.href='/flowerApp/index.php/index';
                }
            }
        });
    });
});