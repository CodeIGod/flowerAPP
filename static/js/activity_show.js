$(function () {
    $('tbody').on('blur', 'input', function () {
        let type = this.dataset.type;
        let val = $(this).val();
        let aid = $(this).closest('tr').data('id');
        $.ajax({
            url: '/flowerApp/index.php/activity/update',
            type: 'post',
            data: {aid, val, type},
            success: function (data) {
                if (data == 'success') {
                    alert('修改成功');
                } else if (data=='fail') {
                    alert('修改失败');
                }
            }
        });
    });
    $('button').on('click', function () {
        let aid = $(this).closest('tr').data('id');
        let that=$(this);
        $.ajax({
            url: '/flowerApp/index.php/activity/delete',
            type: 'post',
            data: {aid},
            success: function (data) {
                if (data == 'success') {
                    alert('数据时删除成功');
                    that.closest('tr').remove();
                } else if (data == 'error') {
                    alert('删除失败');
                }
            }
        });
    })
})