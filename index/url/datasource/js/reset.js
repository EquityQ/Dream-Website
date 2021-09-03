function reset(){
    var settings = {
        "url": "http://47.98.117.207/search.php",
        "method": "GET",
        "timeout": 0,
      };
      
      $.ajax(settings).done(function (response) {
        z = response;
        document.getElementById(1).innerHTML = z.p1.user +"  "+z.p1.date+" : "+z.p1.msg;
        document.getElementById(2).innerHTML = z.p2.user +"  "+z.p2.date+" : "+z.p2.msg;
        document.getElementById(3).innerHTML = z.p3.user +"  "+z.p3.date+" : "+z.p3.msg;
        document.getElementById(4).innerHTML = z.p4.user +"  "+z.p4.date+" : "+z.p4.msg;
        document.getElementById(5).innerHTML = z.p5.user +"  "+z.p5.date+" : "+z.p5.msg;
        document.getElementById(6).innerHTML = z.p6.user +"  "+z.p6.date+" : "+z.p6.msg;
        document.getElementById(7).innerHTML = z.p7.user +"  "+z.p7.date+" : "+z.p7.msg;
        document.getElementById(8).innerHTML = z.p8.user +"  "+z.p8.date+" : "+z.p8.msg;
        document.getElementById(9).innerHTML = z.p9.user +"  "+z.p9.date+" : "+z.p9.msg;
        document.getElementById(10).innerHTML = z.p10.user +"  "+z.p10.date+" : "+z.p10.msg;
        document.getElementById(11).innerHTML = z.p11.user +"  "+z.p11.date+" : "+z.p11.msg;
        document.getElementById(12).innerHTML = z.p12.user +"  "+z.p12.date+" : "+z.p12.msg;
        document.getElementById(13).innerHTML = z.p13.user +"  "+z.p13.date+" : "+z.p13.msg;
        document.getElementById(14).innerHTML = z.p14.user +"  "+z.p14.date+" : "+z.p14.msg;
        document.getElementById(15).innerHTML = z.p15.user +"  "+z.p15.date+" : "+z.p15.msg;
        document.getElementById(16).innerHTML = z.p16.user +"  "+z.p16.date+" : "+z.p16.msg;
      });
}
setInterval('reset()',3000);
reset()