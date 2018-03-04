$(function () {
    let btn = $('.di');
    let ad_status='';
    btn.click(function (e) {
        e.preventDefault();
        let data = $('form').serialize();
        if ($('#div1').hasClass('open1')){
                ad_status='1';
        }else {
            ad_status='0';
        }
        data+="&ad_status="+ad_status;
        $.ajax({
            url: '/flowerAPP/index.php/adrAdd/add',
            data: data,
            type: 'post',
            success: function (data) {
                if (data=='ok'){
                    location.href='/flowerApp/index.php/address/index';
                }
            }
        })

    });
    $('#div1').on('click', function () {
        $(this).toggleClass('close1').toggleClass('open1');
        $('#div2').toggleClass('close2').toggleClass('open2');
    });
});