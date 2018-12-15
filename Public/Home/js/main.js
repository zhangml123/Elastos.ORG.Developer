var internationalWords={};
var INKEY=1;
var INKEY0=sessionStorage.getItem('internationalWords');
INKEY0?INKEY=INKEY0:INKEY0=1;
if(INKEY==1){
    internationalWords=internationalWordsZH;
	document.getElementById("setlang").innerHTML = "简体中文&nbsp;&nbsp;<img id='imgarrow' src='../../../Public/Home/images/down_arrow.png'>";
}else{
    internationalWords=internationalWordsEN;
	document.getElementById("setlang").innerHTML = "English&nbsp;&nbsp;<img id='imgarrow'  src='../../../Public/Home/images/down_arrow.png'>";
}
function change(num){
    if(num==1){
        sessionStorage.setItem('internationalWords',1);
		$.post(internationalWords.hosturl+'index.php/Home/Index/setlang',{lang:1},function(data){ location.reload();});
    }else{
        sessionStorage.setItem('internationalWords',2);
		$.post(internationalWords.hosturl+'index.php/Home/Index/setlang',{lang:2},function(data){ location.reload();});
    }
    console.log(sessionStorage.getItem('internationalWords'));
   
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
    $('.oneparttitle').html(internationalWords.oneparttitle);
    $('.onepartsummary').html(internationalWords.onepartsummary);
    $('.onepartdocbtn').html(internationalWords.onepartdocbtn);
    $('.onepartvideobtn').html(internationalWords.onepartvideobtn);
    $('.towpartsubbtn').html(internationalWords.towpartsubbtn);
    $('.towparttitle').html(internationalWords.towparttitle);
    $('.towpartsubonetitle').html(internationalWords.towpartsubonetitle);
    $('.towpartsubonesummary').html(internationalWords.towpartsubonesummary);
    $('.towpartsubtowtitle').html(internationalWords.towpartsubtowtitle);
    $('.towpartsubtowsummary').html(internationalWords.towpartsubtowsummary);
    $('.towpartsubthreetitle').html(internationalWords.towpartsubthreetitle);
    $('.towpartsubthreesummary').html(internationalWords.towpartsubthreesummary);
    $('.towpartsubfourtitle').html(internationalWords.towpartsubfourtitle);
    $('.towpartsubfoursummary').html(internationalWords.towpartsubfoursummary);
    $('.threeparttitle').html(internationalWords.threeparttitle);
    $('.threepartone').html(internationalWords.threepartone);
    $('.threeparttow').html(internationalWords.threeparttow);
    $('.threepartthree').html(internationalWords.threepartthree);
    $('.threepartfour').html(internationalWords.threepartfour);
    $('.threepartfive').html(internationalWords.threepartfive);
    $('.fourpartcontents').html(internationalWords.fourpartcontents);
    $('.fourparttitle').html(internationalWords.fourparttitle);
    $('.fourpartbtn').html(internationalWords.fourpartbtn);
    $('.logintitle').html(internationalWords.logintitle);
    $('.logintitletip').html(internationalWords.logintitletip);
    $('.loginemail').attr("placeholder",internationalWords.loginemail);
    //$('.loginemailtip').html(internationalWords.loginemailtip);
    $('.loginepassword').attr("placeholder",internationalWords.loginepassword);
    //$('.loginepasswordtip').html(internationalWords.loginepasswordtip);
    $('.logineforgetpwd').html(internationalWords.logineforgetpwd);
    $('.loginenoaccount').html(internationalWords.loginenoaccount);
    $('.logincreatone').html(internationalWords.logincreatone);
    $('.logincontinue').html(internationalWords.logincontinue);
    $('.forgetpwd').html(internationalWords.forgetpwd);
    $('.forgetpwdtip').html(internationalWords.forgetpwdtip);
    $('.forgetpwdemail').attr("placeholder",internationalWords.forgetpwdemail);
    $('.forgetpwdesendmailbtn').html(internationalWords.forgetpwdesendmailbtn);
    $('.forgetpwdcode').html(internationalWords.forgetpwdcode);
    $('.forgetpwdresedncode').html(internationalWords.forgetpwdresedncode);
    $('.forgetpwdcodec').attr("placeholder",internationalWords.forgetpwdcodec);
    $('.resetpwd').html(internationalWords.resetpwd);
    $('.resetpwdnewpwd').attr("placeholder",internationalWords.resetpwdnewpwd);
    $('.resetpwdconfirmpwd').attr("placeholder",internationalWords.resetpwdconfirmpwd);
    $('.resetpwdbtn').html(internationalWords.resetpwdbtn);
    $('.signtitle').html(internationalWords.signuptitle);
    $('.signupemail').attr("placeholder",internationalWords.signemail);
    $('.signupepwd').attr("placeholder",internationalWords.signpwd);
    $('.signhavaaaccount').html(internationalWords.signhavaaaccount);
    $('.signupconfirmtitle').html(internationalWords.signupconfirmtitle);
    $('.signupconfirmsendmail').html(internationalWords.signupconfirmsendmail);
    $('.signupconfirmnorececode').html(internationalWords.signupconfirmnorececode);
    $('.signupconfirmcode').attr("placeholder",internationalWords.signupconfirmcode);
    $('.leftmenmyprofile').html(internationalWords.leftmenmyprofile);
    $('.leftmengettesttoken').html(internationalWords.leftmengettesttoken);
    $('.profileedit').html(internationalWords.profileedit);
    $('.profilebottomtip').html(internationalWords.profilebottomtip);
    $('.applytokentip').html(internationalWords.applytokentip);
    $('.applytokencreatbtn').html(internationalWords.applytokencreatbtn);
    $('.applytokenapplybtn').html(internationalWords.applytokenapplybtn);
    $('.applytokenlisttip').html(internationalWords.applytokenlisttip);
    $('.applytokenlisttitleone').html(internationalWords.applytokenlisttitleone);
    $('.applytokenlisttitletow').html(internationalWords.applytokenlisttitletow);
    $('.applytokenlisttitlethree').html(internationalWords.applytokenlisttitlethree);
    $('.profileedittitle').html(internationalWords.profileedittitle);
    $('.profileeditgeneral').html(internationalWords.profileeditgeneral);
    $('.profileeditemail').html(internationalWords.profileeditemail);
    $('.profileeditfirstname').html(internationalWords.profileeditfirstname);
    $('.profileeditlastname').html(internationalWords.profileeditlastname);
    $('.profileeditlocation').html(internationalWords.profileeditlocation);
    $('.profileeditbio').html(internationalWords.profileeditbio);
    $('.profileediturl').html(internationalWords.profileediturl);
    $('.profileeditcompany').html(internationalWords.profileeditcompany);
    $('.profileeditsave').html(internationalWords.profileeditsave);
    $('.planned').attr("title",internationalWords.planned);
    $('.docpagecomments').html(internationalWords.docpagecomments);
    $('.docpagecommentstip').attr("placeholder",internationalWords.docpagecommentstip);
    $('.docpagesendbtn').html(internationalWords.docpagesendbtn);
    $('.docpageresendbtn').html(internationalWords.docpageresendbtn);
    $('.docpagerecancelbtn').html(internationalWords.docpagerecancelbtn);
    $('.docpagerehowlike').html(internationalWords.docpagerehowlike);
    $('.docpageresearch').attr("placeholder",internationalWords.docpageresearch);
    $('.docpagedevlopdoc').html(internationalWords.docpagedevlopdoc);
    $('.docpagehome').html(internationalWords.docpagehome);
    $('.emailconfirmation').html(internationalWords.signupconfirmtitle);
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
$(function () { $("[data-toggle='tooltip']").tooltip();});
 