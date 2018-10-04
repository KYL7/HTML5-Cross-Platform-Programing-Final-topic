function Tabs(evt, tabId) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabs-panel");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
      tabcontent[i].className = tabcontent[i].className.replace(" animated bounceIn", "");
     }
     tablinks = document.getElementsByClassName("tab-menu");
     for (i = 0; i < tablinks.length; i++) {
       tablinks[i].className = tablinks[i].className.replace(" tabs-active", "");
     }
     var tab = document.getElementById(tabId);
         tab.className += " animated bounceIn";
         tab.style.display = "block";
     evt.currentTarget.className += " tabs-active";
}

function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_showHideLayers() { //v6.0
  var i,p,v,obj,args=MM_showHideLayers.arguments;
  for (i=0; i<(args.length-2); i+=3) if ((obj=MM_findObj(args[i]))!=null) { v=args[i+2];
    if (obj.style) { obj=obj.style; v=(v=='show')?'visible':(v=='hide')?'hidden':v; }
    obj.visibility=v; }
}
function computingBMI() {
    number = /[0-9]/;
    var flag = true;
    var objHeight = document.form1.height;
    var objWeight = document.form1.weight;
    var height = Number(objHeight.value)/100;
    var weight = Number(objWeight.value);
    if (objHeight==null || objHeight.value=="") {
        alert("請輸入您的身高");
        flag = false;
        return;
    }
    if (!number.test(height)) {
        alert("您輸入的身高格式錯誤");
        flag = false;
        return;
    }
    if (objWeight==null || objWeight.value=="") {
        alert("請輸入您的體重");
        flag = false;
    }
    if (!number.test(weight)) {
        alert("您輸入的體重格式錯誤");
        flag = false;
        return;
    }
    if (flag) {
        var bmi = weight/(height*height);
        document.form1.bmiValue.value = bmi.toString().substr(0,4);
    }
}