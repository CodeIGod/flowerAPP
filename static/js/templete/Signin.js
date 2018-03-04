$(function(){
    $.validator.setDefaults({
        submitHandler: function() {
        }
    });
    $().ready(function() {
        $("#commentForm").validate({
            rules:{
                username: {
                    required: true,
                    rangelength:[6,14]
                },
                password: {
                    required: true,
                    minlength: 6
                }
            },
            messages: {
                username: {
                    required: "请输入用户名",
                },
                password: {
                    required: "请输入密码",
                    minlength: "密码长度不能小于 6 个字母"
                },
            }
        });
    });
    $('.liji').on('click',function (e) {
        e.preventDefault();
        let formData=$('form').serialize();
        console.log(formData);
        $.ajax({
            url:'/flowerApp/index.php/Signin/login',
            data:formData,
            type:'post',
            success:function (data) {
                if (data=='usererror'){
                    alert('用户名错误，请再想一想哦！');
                }else if (data=='psderror'){
                    alert('密码输入有误，如若忘记密码，请选择忘记密码进行修改密码！');
                }else if (data=='success'){
                    location.href='/flowerApp/index.php/person';
                }
            }
        });
    });
});