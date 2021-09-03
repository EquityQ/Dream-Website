function onc(){
    if (td < 3){
        alert('请勿频繁操作');
    }
    else{
    td = 0;
    var a = document.getElementById('c').value;
    var b = document.getElementById('e').value;
    var settings = {
        "url": "http://47.98.117.207/auth/?user="+a+"&pwd="+b,
        "method": "POST",
        "timeout": 0,
      };
      
      $.ajax(settings).done(function (response) {
        json = response;
        if (json.success =="empty"){
            alert('必要输入项不能为空。');
        }
        else if(json.success =="error"){
            document.getElementById('c').value = "";
            document.getElementById('e').value = "";
            alert('密码或账号错误');
        }else if(json.success =="true"){
            document.getElementById('c').value = "";
            document.getElementById('e').value = "";
            $.cookie('equ_id', a, { expires: 15 });
            $.cookie('equ_pwd', b, { expires: 15 });
            window.location.href ="http://47.98.117.207";
        }
      });
    }
}
td = 0;
function ss(){
    td = td + 1;
}
setInterval('ss()',1000)