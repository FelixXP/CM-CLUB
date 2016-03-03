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
            '<b>创建公会</b>'+
            '<form action="http://localhost/CM-CLUB/index.php/Home/Club/creClub" method="post">'+
                '<table>'+
                    '<tr>'+
                        '<td><span>公会名称：</span></td>'+
                        '<td><input type="text" name="cluName" id="namText" /></td>'+
                     '</tr>'+
                     '<tr>'+
                        '<td><span>公会简介：</span></td>'+
                        '<td><textarea name="cluBrief" id="breText" maxlength="200"></textarea></td>'+
                    '</tr>'+
                '</table>'+
                '<input type="submit" value="创 建" id="creSubmit"/>'+
                '<a href="#" id="creClose" onclick="close">取消</a>'+
            '</form>'+
        '</div>'
    );
    }
});

$('#cluHome').click(function(){
    $('#creClubBox').remove();
    $('#searAct').show(200);
    $('#cluList').show(200);
});
