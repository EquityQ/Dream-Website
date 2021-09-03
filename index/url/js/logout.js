var a = $.cookie('equ_id')
document.getElementById('op').innerHTML='Welcome Back,'+a;
document.getElementById('aa').innerHTML= a;
function onc(){
    $.cookie('equ_id','');
    $.cookie('equ_pwd','');
    window.location.href ="http://47.98.117.207";
}