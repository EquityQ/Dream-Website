var pic = document.getElementById('pic');
pic.addEventListener('mousemove',function(e){
    var x = e.clientX/5;
    var y = e.clientY/5;
    pic.style.backgroundPositionX = -x + 'px';
    pic.style.backgroundPositionY = -y + 'px';
});