document.onkeydown = function(){

    if(window.event && window.event.keyCode == 123) {
        alert("F12被禁用");
        event.keyCode=0;
        event.returnValue=false;
    }
    if(window.event && window.event.keyCode == 8) {
        alert(str+"\n请使用Del键进行字符的删除操作！");
        window.event.returnValue=false;
    }

}