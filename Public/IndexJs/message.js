/**
 * Created by dell on 2016/1/30.
 */
function getMessage(){
    var url='http://localhost/CM-CLUB/index.php/Home/Message/getMessage';
    $.post(url,'',function(row){
        var i=0;
        while(row[i]){
            $('#mesBox').append(
                "<div class='mes'>"+
                "<div class='boxImg'><img src='http://localhost/CM-CLUB/Public/IndexImg/men.png'></div>"+
                "<span class='box'>"+
                "<p class='boxTop'>"+
                "<span class='boxName'><a href='#'>"+row[i].username+"</a></span>"+
                "&nbsp;<span>"+row[i].time+"</span>"+
                "</p>"+
                "<div class='boxText'>"+
                row[i].content+
                "</div>"+
                "<p class='boxReply'><a href='#'>评论</a>&nbsp;&nbsp;<a href='#'>查看评论</a></p>"+
                "</span>"+
                "</div>"
            );
            i++;
        }
    },'json');
}


//提交留言前检测
function checkLength(){
    var length=$('#textEditor').val().length;
    if(length==0){
        $('#mention').text("请输入内容");
        return false;
    }
    else if(length>250){
        $('#mention').text("超出字数限制，请重新编辑");
        return false;
    }
    else return true;
}

$('.wangEditor-container').focusin(function(){
    $('#mention').empty();
});

//页面加载完成后调用函数
$(document).ready(getMessage());