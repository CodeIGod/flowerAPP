$(function(){
    $.validator.setDefaults({
        submitHandler: function() {

        }
    });
    $().ready(function() {
        $("#commentForm").validate({
            rules:{
                cname: {
                    required: true,
                    rangelength:[5,10]
                },
                cpassword: {
                    required: true,
                    minlength: 6
                },
                confirm_password: {
                    required: true,
                    minlength: 5,
                    equalTo: "#cpassword"
                },
                tel:{
                    required: true,
                    digits:true,
                    maxlength:11,

                }
            },
            messages: {
                cname: {
                    required: "请输入用户名",
                },
                cpassword: {
                    required: "请输入密码",
                    minlength: "密码长度不能小于 6 个字母"
                },
                confirm_password: {
                    required: "请输入密码",
                    minlength: "密码长度不能小于 6 个字母",
                    equalTo: "两次密码输入不一致"
                },
            }
        });
    });
    let reg=new RegExp('');
    let flag=false;
    $('input[type=tel]').on('blur',function () {
        if (reg.test($('input[type=tel]').val())){
            flag=true;
        }else {
            $(this).val('');
            $(this).attr('placeholder','请输入正确的手机号')
        }
    });
    $('.liji').on('click',function (e) {
        e.preventDefault();
        let formData=$('form').serialize();
        $.ajax({
            url:'/flowerApp/index.php/register/reg',
            data:formData,
            type:'post',
            success:function (data) {
                if (data==='ok'){
                    location.href='/flowerApp/index.php/person';
                }
            }
        });
    });


});