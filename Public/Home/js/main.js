var internationalWords={};
var INKEY=1;

if(sessionStorage.getItem('internationalWords')!=null && sessionStorage.getItem('internationalWords')!=undefined){
	var INKEY0=sessionStorage.getItem('internationalWords');
}else{
	sessionStorage.setItem('internationalWords',1);
	var INKEY0 =1;
}
INKEY0?INKEY=INKEY0:INKEY0=1;
if(INKEY==1){
    internationalWords=internationalWordsZH;
	document.getElementById("setlang").innerHTML = "<img  src='../../../Public/Home/images/cn.png' style='width:30px;height:17.5px;'>&nbsp;简体中文&nbsp;&nbsp;<img id='imgarrow' src='../../../Public/Home/images/down_arrow.png'>";
	document.getElementById("setlangs").innerHTML = "<img  src='../../../Public/Home/images/cn.png' style='width:30px;height:17.5px;'>&nbsp;简体中文&nbsp;&nbsp;<img id='imgarrow' src='../../../Public/Home/images/down_arrow.png'>";
}else{
    internationalWords=internationalWordsEN;
	document.getElementById("setlang").innerHTML = "<img  src='../../../Public/Home/images/en.png' style='width:30px;height:17.5px;'>&nbsp;English&nbsp;&nbsp;<img id='imgarrow'  src='../../../Public/Home/images/down_arrow.png'>";
	document.getElementById("setlangs").innerHTML = "<img  src='../../../Public/Home/images/en.png' style='width:30px;height:17.5px;'>&nbsp;English&nbsp;&nbsp;<img id='imgarrow'  src='../../../Public/Home/images/down_arrow.png'>";
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
    $('.nav_voting').html(internationalWords.nav_voting);
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
    $('.commenttipscuf').html(internationalWords.docpagecommenttipscuf);
    $('.docpagehome').html(internationalWords.docpagehome);
    $('.seardevplop').html(internationalWords.docpagehome);
    $('.resultnumfound').html(internationalWords.resultnumfound);
    $('.searchdocs').html(internationalWords.docpagedevlopdoc);
    $('.emailconfirmation').html(internationalWords.signupconfirmtitle);
    $('.loginwechat').html(internationalWords.loginwechat);
    $('.commenttipc').html(internationalWords.docpagecommenttipc);
    $('.commenterror').html(internationalWords.docpagecommenterror);
    $('.loginscanqrcode').html(internationalWords.loginscanqrcode);
    $('.logouttipcuccful').html(internationalWords.logouttipsuccful);
    $('.logouttipfail').html(internationalWords.logouttipfail);
    $('#githubbinderror').html(internationalWords.githubbinderror);
    $('#bindsuc').html(internationalWords.bindsuc);
    $('.confirmunbind').html(internationalWords.confirmunbind);
    $('#removeuserbtnc').html(internationalWords.removeuserbtnc);
    $('#removeuserbtncan').html(internationalWords.removeuserbtncan);
    $('#removeuserbtncwechat').html(internationalWords.removeuserbtnc);
    $('#removeuserbtncanwechat').html(internationalWords.removeuserbtncan);
    $('#removeuserbtncdid').html(internationalWords.removeuserbtnc);
    $('#removeuserbtncandid').html(internationalWords.removeuserbtncan);
    $('#wechatbindedtip').html(internationalWords.wechatbindedtip);
    $('#didbindedtip').html(internationalWords.didbindedtip);
    $('#loadsubmorebtn').html(internationalWords.docpagecommentsubloadmore);
    $('.loadsubmorebtn').html(internationalWords.docpagecommentsubloadmore);
    $('#loadmorebtn').html(internationalWords.docpagecommentloadmore);
    $('#checkemailbtn').html(internationalWords.checkemailbtn);
    $('.resendtip').html(internationalWords.resendtip);
	$(".gettokensuf").html(internationalWords.applytokensuccfully);
	$(".applytokentips").html(internationalWords.applytokentips);
	$(".bindgittip").attr("title",internationalWords.bindgittip);
	$(".bindwechattip").attr("title",internationalWords.bindwechattip);
	$(".binddidtip").attr("title",internationalWords.binddidtip);
	$(".pcenter_admin_console").html(internationalWords.leftmengetadminconsole);
	$(".notications").html(internationalWords.notications);
	$(".noticeviews").html(internationalWords.noticeviews);
	$(".noticeposted").html(internationalWords.noticeposted);
	$(".addnotications").html(internationalWords.noticationss);
	$(".noticedel").html(internationalWords.noticedel);
	$(".noticedit").html(internationalWords.noticedit);
	$(".noticepublish").html(internationalWords.noticepublish);
	$(".noticelastedit").html(internationalWords.noticelastedit);
	$(".newnotications").html(internationalWords.newnotications);
	$(".noticecancel").html(internationalWords.noticecancel);
	$(".noticetitle").html(internationalWords.noticetitle);
	$(".noticedescription").html(internationalWords.noticedescription);
	$(".noticepushset").html(internationalWords.noticepushset);
	$(".noticesendmail").html(internationalWords.noticesendmail);
	$(".noticeinwebsite").html(internationalWords.noticeinwebsite);
	$(".noticewho").html(internationalWords.noticewho);
	$(".noticeallusers").html(internationalWords.noticeallusers);
	$(".noticeonlineonly").html(internationalWords.noticeonlineonly);
	$(".noticeshowinhome").html(internationalWords.noticeshowinhome);
	$(".noticepublishnow").html(internationalWords.noticepublishnow);
	$(".noticescheduledpush").html(internationalWords.noticescheduledpush);
	$("#ishomepage").attr("data-on-text",internationalWords.noticeshowhomeis);
	$("#ishomepage").attr("data-off-text",internationalWords.noticeshowhomeno);
	$("#isnewidea").attr("data-on-text",internationalWords.noticeshowhomeis);
	$("#isnewidea").attr("data-off-text",internationalWords.noticeshowhomeno);
	$("#notifytitle").attr("placeholder",internationalWords.noticetitleplaceholder);
	$("#notifytitleen").attr("placeholder",internationalWords.noticetitleplaceholder);
	$(".noticeview").html(internationalWords.noticeview);
	$(".newnotifytip").html(internationalWords.newnotifytip);
	$(".notifycenter").html(internationalWords.notifycenter);
	$(".delnotifysuccful").html(internationalWords.delnotifysuccful);
	$(".notifypublishtips").html(internationalWords.notifypublishtips);
	$(".notifytips").html(internationalWords.notifytips);
	$(".nav_forum").html(internationalWords.nav_forum);
	$(".addforumcls").html(internationalWords.addforumcls);
    $('#emailcode').attr("placeholder",internationalWords.emailcode);
	$(".loginscanqrcode_wechat").html(internationalWords.loginscanqrcode_wechat);
	$("#notify_year_tip").html(internationalWords.notify_year_tip);
	$("#notify_mon_tip").html(internationalWords.notify_mon_tip);
	$("#notify_day_tip").html(internationalWords.notify_day_tip);
	$("#notify_hour_tip").html(internationalWords.notify_hour_tip);
	$("#notify_minute_tip").html(internationalWords.notify_minute_tip);
	$("#pickdate").html(internationalWords.pickdate);
    $('.cancelbtnconfirm').html(internationalWords.removeuserbtncan);
    $('.confirm_push_time_tip').html(internationalWords.confirm_push_time_tip);
	$(".searchforum").attr("placeholder",internationalWords.searchtopic);
	$(".forum_data_added").html(internationalWords.forumdateadd);
	$(".forum_popularity").html(internationalWords.forumpopularity);
	$(".vlist_v_t_l").html(internationalWords.forummytopic);
	$(".vlist_v_t_r").html(internationalWords.forummyviewalltip);
	$(".forummyaddedtip").html(internationalWords.forummyaddedtip);
	$(".forummyfollowedtip").html(internationalWords.forummyfollowedtip);
	$(".forummycommentedtip").html(internationalWords.forummycommentedtip);
	$(".forumpostby").html(internationalWords.forumpostby);
	$(".forumpostat").html(internationalWords.forumpostat);
	$(".forumbackbtn").html(internationalWords.forumbackbtn);
	$(".forumviews").html(internationalWords.forumviews);
	$(".forum_cate").html(internationalWords.forum_cate);
	$(".forumall").html(internationalWords.forumall);
	$(".forumabuse").html(internationalWords.forumabuse);
	$(".my_forum_topics").html(internationalWords.my_forum_topics);
	$("#confirmdelnotice").html(internationalWords.confirmdelnotify);
	$("#removenoticebtnc").html(internationalWords.removeuserbtnc);
	$("#removenoticebtncan").html(internationalWords.removeuserbtncan);
	$(".deletetoptic").html(internationalWords.deletetoptic);
	$(".deletesubcomment").html(internationalWords.deletesubcomment);
	$(".add_forum_title").html(internationalWords.add_forum_title);
	$(".add_forum_desc").html(internationalWords.add_forum_desc);
	$(".add_forum_cate").html(internationalWords.add_forum_cate);
	$(".addforumcate").html(internationalWords.addforumcate);
	$(".number").html(internationalWords.forumcatenumber);
	$(".sort_title").html(internationalWords.forumcatesort);
	$(".operator_title").html(internationalWords.forumcatoperate);
	$(".savesortbtn").html(internationalWords.forumcatesave);
	$(".savebtn").html(internationalWords.forumcatesave);
	$(".cateshow").html(internationalWords.forumcateshow);
	$(".catehide").html(internationalWords.forumcatehide);
	$(".editbtn").html(internationalWords.forumcateedit);
	$(".forumcatetip").html(internationalWords.forumcatetip);
	$(".forumcatesufful").html(internationalWords.forumcatesufful);
	$(".forumlist_no_data").html(internationalWords.forumlist_no_data);
	$(".add_forum_tip").html(internationalWords.add_forum_tip);
	$(".cancelbtn").html(internationalWords.add_forum_cancel);
	$(".addforumtip").html(internationalWords.addforumtip);
	$(".addforumsuccful").html(internationalWords.addforumsuccfultip);
	$(".addforumerror").html(internationalWords.addforumerrortip);
	$(".sliderText").html(internationalWords.addforumslidtip);
	$(".profileeditnickname").html(internationalWords.profileeditnickname);
	$(".add_forum_new_idea").html(internationalWords.add_forum_new_idea);
	$(".new_idea_des").html(internationalWords.new_idea_des);
	$(".forum_moremenu_pin").html(internationalWords.forum_moremenu_pin);
	$(".forum_moremenu_del").html(internationalWords.forum_moremenu_del);
	$(".forum_moremenu_fllow").html(internationalWords.forum_moremenu_fllow);
	$(".forum_moremenu_report").html(internationalWords.forum_moremenu_report);
	$(".forum_moremenu_cancle_fllow").html(internationalWords.forum_moremenu_cancle_fllow);
	$(".forum_moremenu_cancle_report").html(internationalWords.forum_moremenu_cancle_report);
	$(".forum_moremenu_cancle_pin").html(internationalWords.forum_moremenu_cancle_pin);
	$("#tran_desc").html(internationalWords.tran_desc);
	$(".langs_t").html(internationalWords.tran_desc);
	//$("#trancn").html(internationalWords.trancn);
	$(".tranby").html(internationalWords.tranby);
	$(".delforumsuccful").html(internationalWords.delforumsuccfultip);
	$(".edittoptic").html(internationalWords.edittoptic);
	$(".edit_forum_tip").html(internationalWords.edit_forum_tip);
	$(".followsuccful").html(internationalWords.followsuccful);
	$(".canclefollowsuccful").html(internationalWords.canclefollowsuccful);
	$(".abusesuccful").html(internationalWords.abusesuccful);
	$(".cancleabusesuccful").html(internationalWords.cancleabusesuccful);
	$(".pinsuccful").html(internationalWords.pinsuccful);
	$(".unpinsuccful").html(internationalWords.unpinsuccful);
	$(".opforumerro").html(internationalWords.opforumerro);
	$(".followtrans").html(internationalWords.followtrans);
	$(".eqthree").html(internationalWords.eqthree);
	$(".albanian").html(internationalWords.albanian);
	$(".arabic").html(internationalWords.arabic);
	$(".amharic").html(internationalWords.amharic);
	$(".azerbaijani").html(internationalWords.azerbaijani);
	$(".irish").html(internationalWords.irish);
	$(".estonian").html(internationalWords.estonian);
	$(".basque").html(internationalWords.basque);
	$(".belarusian").html(internationalWords.belarusian);
	$(".bulgarian").html(internationalWords.bulgarian);
	$(".icelandic").html(internationalWords.icelandic);
	$(".polish").html(internationalWords.polish);
	$(".bosnian").html(internationalWords.bosnian);
	$(".persian").html(internationalWords.persian);
	$(".boolean_afrikaans").html(internationalWords.boolean_afrikaans);
	$(".danish").html(internationalWords.danish);
	$(".german").html(internationalWords.german);
	$(".russian").html(internationalWords.russian);
	$(".french").html(internationalWords.french);
	$(".filipino").html(internationalWords.filipino);
	$(".finnish").html(internationalWords.finnish);
	$(".frisian").html(internationalWords.frisian);
	$(".cambodian").html(internationalWords.cambodian);
	$(".georgian").html(internationalWords.georgian);
	$(".gujarati").html(internationalWords.gujarati);
	$(".kazakh").html(internationalWords.kazakh);
	$(".haitian_creole").html(internationalWords.haitian_creole);
	$(".korean").html(internationalWords.korean);
	$(".hausa").html(internationalWords.hausa);
	$(".dutch").html(internationalWords.dutch);
	$(".kyrgyz").html(internationalWords.kyrgyz);
	$(".galician").html(internationalWords.galician);
	$(".catalan").html(internationalWords.catalan);
	$(".czech").html(internationalWords.czech);
	$(".kannada").html(internationalWords.kannada);
	$(".corsican").html(internationalWords.corsican);
	$(".croatian").html(internationalWords.croatian);
	$(".kurdish").html(internationalWords.kurdish);
	$(".latin").html(internationalWords.latin);
	$(".latvian").html(internationalWords.latvian);
	$(".laotian").html(internationalWords.laotian);
	$(".lithuanian").html(internationalWords.lithuanian);
	$(".luxembourgish").html(internationalWords.luxembourgish);
	$(".romanian").html(internationalWords.romanian);
	$(".malagasy").html(internationalWords.malagasy);
	$(".maltese").html(internationalWords.maltese);
	$(".marathi").html(internationalWords.marathi);
	$(".malayalam").html(internationalWords.malayalam);
	$(".malay").html(internationalWords.malay);
	$(".macedonian").html(internationalWords.macedonian);
	$(".maori").html(internationalWords.maori);
	$(".mongolian").html(internationalWords.mongolian);
	$(".bengali").html(internationalWords.bengali);
	$(".burmese").html(internationalWords.burmese);
	$(".hmong").html(internationalWords.hmong);
	$(".south_african_xhosa").html(internationalWords.south_african_xhosa);
	$(".south_african_zulu").html(internationalWords.south_african_zulu);
	$(".nepali").html(internationalWords.nepali);
	$(".norwegian").html(internationalWords.norwegian);
	$(".punjabi").html(internationalWords.punjabi);
	$(".portuguese").html(internationalWords.portuguese);
	$(".pashto").html(internationalWords.pashto);
	$(".chichewa").html(internationalWords.chichewa);
	$(".japanese").html(internationalWords.japanese);
	$(".swedish").html(internationalWords.swedish);
	$(".samoan").html(internationalWords.samoan);
	$(".serbian").html(internationalWords.serbian);
	$(".sesotho").html(internationalWords.sesotho);
	$(".sinhalese").html(internationalWords.sinhalese);
	$(".esperanto").html(internationalWords.esperanto);
	$(".slovak").html(internationalWords.slovak);
	$(".slovenian").html(internationalWords.slovenian);
	$(".swahili").html(internationalWords.swahili);
	$(".scottish_gaelic").html(internationalWords.scottish_gaelic);
	$(".cebu_language").html(internationalWords.cebu_language);
	$(".somali").html(internationalWords.somali);
	$(".tajik").html(internationalWords.tajik);
	$(".telugu").html(internationalWords.telugu);
	$(".tamil").html(internationalWords.tamil);
	$(".thai").html(internationalWords.thai);
	$(".turkish").html(internationalWords.turkish);
	$(".welsh").html(internationalWords.welsh);
	$(".urdu").html(internationalWords.urdu);
	$(".ukrainian").html(internationalWords.ukrainian);
	$(".uzbek").html(internationalWords.uzbek);
	$(".spanish").html(internationalWords.spanish);
	$(".hebrew").html(internationalWords.hebrew);
	$(".greek").html(internationalWords.greek);
	$(".hawaiian").html(internationalWords.hawaiian);
	$(".sindhi").html(internationalWords.sindhi);
	$(".hungarian").html(internationalWords.hungarian);
	$(".shuna").html(internationalWords.shuna);
	$(".armenian").html(internationalWords.armenian);
	$(".igbo").html(internationalWords.igbo);
	$(".italian").html(internationalWords.italian);
	$(".yiddish").html(internationalWords.yiddish);
	$(".hindi").html(internationalWords.hindi);
	$(".indonesian_language").html(internationalWords.indonesian_language);
	$(".indonesian").html(internationalWords.indonesian);
	$(".indonesian_javanese").html(internationalWords.indonesian_javanese);
	$(".english").html(internationalWords.english);
	$(".yoruba").html(internationalWords.yoruba);
	$(".vietnamese").html(internationalWords.vietnamese);
	$(".traditional_cn").html(internationalWords.traditional_cn);
	$(".chinese_cn").html(internationalWords.chinese_cn);
	
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
 