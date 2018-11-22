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