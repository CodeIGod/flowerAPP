$(function () {
    $('.adr-list-wrap ul').on('click','li',function () {
        let ad_id=$(this).data("ad_id");
        $.ajax({
            url:'/flowerApp/index.php/address/select',
            data:{ad_id},
            type:'post',
            success:function (data) {
                if (data==='ok'){
                    location.href='/flowerApp/index.php/pay/index';
                }
            }
        });
    });
});