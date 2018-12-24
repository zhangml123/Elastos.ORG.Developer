$(document).ready(function(){
  var lwith = $("#doc_menu_out_l").css("width");
  $(window).scroll(function() {
	p = $(this).scrollTop(); 
	//if(t<p){
		/*
		if((document.getElementById("c_row").offsetTop-$(window).scrollTop())<-3){
			$("#doc_menu_out_l").css("position","fixed");
			$("#doc_menu_out_l").css("top","78px");
			$(".doc_menu_l_ul").removeClass("showopall");
			$(".doc_menu_l_ul").addClass("showophalf");
			$(".doc_menu_l_ul").css("width",lwith);
		}else if(($(window).scrollTop())>457 && ($(window).scrollTop())<458){
			$("#doc_menu_out_l").css("position","static");
			$("#doc_menu_out_l").css("top","220px");
			$(".doc_menu_l_ul").removeClass("showophalf");
			$(".doc_menu_l_ul").addClass("showopall");
		}
		*/
	//}
  });
  $(".doc_menu_l_ul").mouseover(function(){
		$(this).css("opacity","1");
		//$(".doc_menu_l_ul").removeClass("showopall");
		//$(".doc_menu_l_ul").addClass("showophalf");
		//console.log("2");
  });
 $('#comment').rating({
              min: 0,
              max: 5,
              step: 1,
              size: 'sx',
              showClear: false
   });
 $('#comments').rating({
              min: 0,
              max: 5,
              step: 1,
              size: 'sx',
              showClear: false
   });
  $(document).on("click",".showrepaly",function(){
	 $(this).parent(".comment_bottom_icon_r").parent(".comment_bottom_icon").next(".replay_comment").show();
  });
  $(document).on("click",".canclebtn",function(){
  //$(".canclebtn").click(function(){
	 $(this).parent(".replay_senddiv").parent(".replay_comment").hide();
  });
})
    function browserRedirect() {
      var sUserAgent = navigator.userAgent.toLowerCase();
      var bIsIpad = sUserAgent.match(/ipad/i) == "ipad";
      var bIsIphoneOs = sUserAgent.match(/iphone os/i) == "iphone os";
      var bIsMidp = sUserAgent.match(/midp/i) == "midp";
      var bIsUc7 = sUserAgent.match(/rv:1.2.3.4/i) == "rv:1.2.3.4";
      var bIsUc = sUserAgent.match(/ucweb/i) == "ucweb";
      var bIsAndroid = sUserAgent.match(/android/i) == "android";
      var bIsCE = sUserAgent.match(/windows ce/i) == "windows ce";
      var bIsWM = sUserAgent.match(/windows mobile/i) == "windows mobile";
      //document.writeln("您的浏览设备为：");
      if (bIsIpad || bIsIphoneOs || bIsMidp || bIsUc7 || bIsUc || bIsAndroid || bIsCE || bIsWM) {
		$(".commontlist").css("width","100%");
		$(".commontlist").css("margin-left","0%");
		$(".commontlist").css("background-color","#fff");
		
      } else {
      }
    }
 
    browserRedirect();