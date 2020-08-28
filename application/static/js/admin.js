$(function () {
    $(".yanzheng").validate({
        rules:{
            uname:{
                required:true,
    minlength:5,
}
,
            upassword:{
                required:true,
                minlength:5,
            }
},
    messages:{
            uname:{
                required:"这是必填项",
                minlength:"你写的太少了",
            },
            upassword:{
                required:"密码必须填",
                minlength:"密码不符合规则",
            }
        }
    })
$(".reg").validate({
    rules: {
        uname: {
            required: true,
            minlength: 5,
            // remote: {
            //     url: "/shk/2006/server/mvc/admin.php/admin/reg/checkName",
            //     type: "post",
            //     data: {
            //         uname: function () {
            //             return $("input[name=uname]").val();
            //         }
            //
            //     }
            // }
        },
        upassword:{
            required:true,
            minlength:5,
        }
    },
        messages:{
            uname:{
                required:"这是必填项",
                minlength:"你写的太少了",
                // remote: "bux"
            },
            upassword:{
                required:"密码必须填",
                minlength:"密码不123符合规则",
            }
        }

})
})