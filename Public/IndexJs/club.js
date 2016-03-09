/**
 * Created by dell on 2016/3/3.
 */

//点击创建，隐藏底下内容，添加创建列表
$('#creClub').click(function(){
    $('#searAct').hide(400);
    $('#cluList').hide(400);
    //alert($('#creClubBox')[0]);
    if(!$('#creClubBox')[0]){
    $('#main').append(
        '<div id="creClubBox">'+
            '<b>创建班级</b>'+
            '<form method="post"  id="creForm" action="http://localhost/CM-CLUB/index.php/Home/Club/creClub">'+
                '<table>'+
                    '<tr>'+
                        '<td><span>班级名称：</span></td>'+
                        '<td><input type="text" name="cluName" id="namText" /></td>'+
                     '</tr>'+
                     '<tr>'+
                        '<td><span>班级简介：</span></td>'+
                        '<td><textarea name="cluBrief" id="briText" maxlength="200"></textarea></td>'+
                    '</tr>'+
                '</table>'+
                '<input type="submit" value="创 建" id="creSubmit"/>'+
                '<a href="#" id="creClose" >取消</a>'+
            '</form>'+
        '</div>'
    );

    }
});

//删除创建页面，显示班级首页
$('#cluHome').click(function(){
    $('#creClubBox').remove();
    $('#searAct').show(300);
    $('#cluList').show(300);
});

//取消创建，删除创建页面，显示班级首页（同上）
$('#main').on('click','#creClose',function(){
    $('#cluHome').click();
});

//点击创建，验证登录状态和填写信息
$('#main').on('submit','#creForm',function(){
    var name=$('#namText').val();
    var brief=$('#briText').val();
    if(!name||!brief){
        alert('请填写完整信息...');
        return false;
    }
    $.post('http://localhost/CM-CLUB/index.php/Home/User/check',function(data){
        if(data){
            return true;
        }else{
            alert('您尚未登录，请登录后重试。');
            return false;
        }
    });

});
