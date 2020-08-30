$(function () {

    $.ajax({
        url:"http://localhost/shk/2006/server/mvc/admin.php/admin/content/getOption",
        dataType:"json",
        success:function (e) {
            // console.log(e)
            tree(e,0)
            $("#opts").html(str);
        }
    })
    str="<option value='0'>零级</option>";
    function tree(data,$i) {
        for (var i=0;i<data.length;i++){
            if(data[i].child){





                str+="<option value='"+data[i].cid+"'>"+str_repeat("&nbsp",$i)+data[i].cname+"</option>"




                tree(data[i].child,$i+1);
            }else {





                str+="<option value='"+data[i].cid+"'>"+str_repeat("&nbsp",$i)+data[i].cname+"</option>"




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

})