$(function () {
    let subBtn=$('.loginBottom>:submit');
    subBtn.on('click',function (e) {
        e.preventDefault();
        let username=$('input:text');
        let password=$('input:password');
        let reg=$('.regChar>input');
        $.ajax({
            url:'/flowerApp/index.php/manage/regLogin',
            data:{username:username.val(),password:password.val(),code:reg.val().toLowerCase()},
            type:'post',
            success:function (data) {
                if(data=='ok'){
                    alert("登陆成功");
                    location.href='/flowerApp/index.php/manage/view';
                }else if (data=='psderror'){
                    alert('密码错误');
                }else if(data=='usererror'){
                    alert('用户名错误');
                }else  if(data=='regerror'){
                    alert("验证码错误");
                }
            }
        });
    });
});