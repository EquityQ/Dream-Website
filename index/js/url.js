time = 0
function randomString(len) {
    　　len = len || 32;
    　　var $chars = 'ABCDEFGHJKMNPQRSTWXYZabcdefhijkmnprstwxyz2345678';
    　　var maxPos = $chars.length;
     　　var pwd = '';
     　　for (i = 0; i < len; i++) {
     　　　　pwd += $chars.charAt(Math.floor(Math.random() * maxPos));
 　　}
    　　return pwd;
   }
var system ={}; 
function timedd(){
    time = time + 1;
    if (time == 5) {
        var p = navigator.platform;       
        system.win = p.indexOf("Win") == 0;  
        system.mac = p.indexOf("Mac") == 0;  
        system.x11 = (p == "X11") || (p.indexOf("Linux") == 0);     
        if(system.win||system.mac||system.xll){//如果是电脑跳转到
                window.location.href="/url";  
        }else{  //如果是手机,跳转到
              window.location.href="/wap";  
       }
    }
}
window.setInterval('timedd()',1000)
$.cookie('cdn_ddos_defender', randomString(18), { expires: 7 });