var internationalWords={};
var INKEY=1;
var INKEY0=sessionStorage.getItem('internationalWords');
INKEY0?INKEY=INKEY0:INKEY0=1;
if(INKEY==1){
    internationalWords=internationalWordsZH;
	document.getElementById("setlang").innerHTML = "中文&nbsp;&nbsp;<img id='imgarrow' src='../../../Public/Home/images/down_arrow.png'>";
}else{
    internationalWords=internationalWordsEN;
	document.getElementById("setlang").innerHTML = "English&nbsp;&nbsp;<img id='imgarrow'  src='../../../Public/Home/images/down_arrow.png'>";
}
function change(num){
    if(num==1){
        sessionStorage.setItem('internationalWords',1);
		$.post('http://test.eladevp.com/index.php/Home/Index/setlang',{lang:1},function(data){});
    }else{
        sessionStorage.setItem('internationalWords',2);
		$.post('http://test.eladevp.com/index.php/Home/Index/setlang',{lang:2},function(data){});
    }
    console.log(sessionStorage.getItem('internationalWords'));
    location.reload();
}
//INKEY==1?$('.dropdown-menu').css({'left':'-30px'}):$('.dropdown-menu').css({'left':'-60px'})
function guojihua(){
    //导航
    $('.nav-home').html(internationalWords.home);
    $('.nav-dapps').html(internationalWords.dapp);
    $('.nav-community').html(internationalWords.community);
    $('.nav-login').html(internationalWords.login);
    $('.nav-cn').html(internationalWords.langcn);
    $('.nav-en').html(internationalWords.langen);
    $('.nav_develop_subdoc').html(internationalWords.navdevlopdoc);
    $('.pcenter_myprofile').html(internationalWords.pcentersubprofile);
    $('.pcenter_gettoken').html(internationalWords.pcentergettoken);
    $('.pcenter_logout').html(internationalWords.logout);
}
guojihua();

$(".link_icon").find("svg").mouseover(function(){

	$(this).children("path").attr("fill","#fff");
	$(this).children(":first").attr("fill","#434E71");
})
$(".link_icon").find("svg").mouseout(function(){

	$(this).children("path").attr("fill","#173045");
	$(this).children(":first").attr("fill","#434E71");
})
$(function () { $('.tooltip-show').tooltip('show');});
 