$(function () {
    let inputs=$('.con');
    inputs.on("blur",'input',function () {
        let val=$(this).val();
        let keys=$(this).attr('name');
        $.ajax({
            url:'/flowerApp/index.php/set/alter',
            data:{keys,val},
            success:function (data) {

            }
        });
    });
    $(inputs.find('.uimg')).on('click',function () {
        $('.mask').css({
            left:'0',
        });
    });
    $('.close').on('click',function () {
        $(this).closest('.mask').css({
            left:'100%',
        })
    });
    $('.exit').on('click',function () {
        let obj=$('option:selected');
        let val=obj.val();
        let keys=obj.closest('select').attr('name');
        console.log(val);
        $.ajax({
            url:'/flowerApp/index.php/set/alter',
            data:{keys,val},
            success:function (data) {
                console.log(data);
                if (data=="1"){
                    location.href='/flowerApp/index.php/set';
                }
            }
        });
    });
});