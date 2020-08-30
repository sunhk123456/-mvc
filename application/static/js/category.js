$(function () {

    $("table").on('click','.add',function () {
        var cid=$(this).attr("attr");

        $(".cid").val(cid);
        console.log(cid)
        $(".add1").css("display","block");

    })
    $(".close").click(function () {
        $(".add1").css("display","none");
    })
    var cid;
$(".edit").click(function () {
        cid=$(this).attr("attr");
    var pid=$(this).attr("pid");
    $(".edit1").css("display","block");
    $(".edit1").on("click",".close",function () {
        $(".edit1").css("display","none");
    })
     $.ajax(
         {
             url:"http://localhost/shk/2006/server/mvc/admin.php/admin/category/show",
             dataType: "json",
             data:{cid},
             success:function (e) {
               $(":input[name=cname]").val(e["cname"])
             }
         }
     )
    $.ajax(
        {
            url:"http://localhost/shk/2006/server/mvc/admin.php/admin/category/getOption",
            dataType:"json",
            success:function (e) {

              tree(e,0,cid,pid);
                  $("#opts").html(str);
                str="<option value='0'>零级</option>";
            }
        }

    )

})
    var   str="<option value='0'>零级</option>";
function tree(data,$i,cid,pid) {
    console.log(pid)
    for (var i=0;i<data.length;i++){
        if(data[i].child){

            if(data[i].cid!=cid){
                if(parseInt(data[i].cid)==pid){
                    console.log("yes")
                    str+="<option value='"+data[i].cid+"' selected>"+str_repeat("&nbsp",$i)+data[i].cname+"</option>"
                }else {
                    console.log(parseInt(data[i].cid))
                    console.log("no")
                    str+="<option value='"+data[i].cid+"'>"+str_repeat("&nbsp",$i)+data[i].cname+"</option>"
                }


            }
            tree(data[i].child,$i+1,cid,pid);
        }else {
            if(data[i].cid!=cid) {
                // if(data[i].cid==pid){
                //     console.log("data[i].cname")
                // }
                // str += "<option value='" + data[i].cid + "'>" + str_repeat("&nbsp", $i) + data[i].cname + "</option>"
                if(data[i].cid!=cid){
                    if(parseInt(data[i].cid)==pid){
                        console.log("yes")
                        str+="<option value='"+data[i].cid+"' selected>"+str_repeat("&nbsp",$i)+data[i].cname+"</option>"
                    }else {
                        console.log(parseInt(data[i].cid))
                        console.log("no")
                        str+="<option value='"+data[i].cid+"'>"+str_repeat("&nbsp",$i)+data[i].cname+"</option>"
                    }


                }
            }
        }
        }
    return str;

}
function str_repeat(str, num) {
    var result="";
    for (var i=0;i<num;i++){
        result+=str;
    }
    return result;
}
//修改内容
    $(".edit1 input[type=button]").click(
        function () {

          var data=($(".edit1 form").serialize()+"&cid="+cid)

            $.ajax({
                url:"http://localhost/shk/2006/server/mvc/admin.php/admin/category/editcon",
               data:data,
                success:function (e){

                    if(e=='ok')
                    {
                        location.reload();
                    }
                }

            });

        }
    )


})