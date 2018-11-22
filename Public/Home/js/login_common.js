function login_popup(){
  $("#emailModal").modal("hide");
  $("#regModal").modal("hide");
  $("#loginModal").modal("show");
}
function reg_popup(){
  $("#emailModal").modal("hide");
  $("#loginModal").modal("hide");
  $("#regModal").modal("show");
}
function email_popup(){
  $("#loginModal").modal("hide");
  $("#regModal").modal("hide");
  $("#emailModal").modal("show");
}
$(".globalLoginBtn").on("click",login_popup);
$("#jumplogin").on("click",login_popup);
$("#jumplogins").on("click",login_popup);
$("#jumploginsa").on("click",login_popup);
$("#jumpreg").on("click",reg_popup);
$("#jump_reg").on("click",reg_popup);
$("#regbtns").on("click",email_popup);
$("#id_account_l").keyup(function(){
	if(isNull($(this).val())){
		$(".login_tip").show();
		$(".login_tip").html("登录账号不能为空或含有空格!");
	}else{
		$(".login_tip").html("");
		if(isNull($(this).val()) || isNull($("#id_password_l").val())){
			$("#loginbtns").css("background-color","#CED6E3");
			$("#loginbtns").css("color","#fff");
		}else{
			$("#loginbtns").css("background-color","#173045");
			$("#loginbtns").css("color","#18FFFF");
		}
	}
	
});
$("#id_password_l").keyup(function(){
	if(isNull($(this).val())){
		$(".login_p_tip").show();
		$(".login_p_tip").html("登录密码不能为空或含有空格!");
	}else{
		    $(".login_p_tip").html("");
		if(isNull($(this).val()) || isNull($("#id_account_l").val())){
			$("#loginbtns").css("background-color","#CED6E3");
			$("#loginbtns").css("color","#fff");
		}else{
			$("#loginbtns").css("background-color","#173045");
			$("#loginbtns").css("color","#18FFFF");
		}
	}
});
function isNull(str) {
  if ( str == "" ) {
    return true;
  }
  var regu = "^[ ]+$";
  var re = new RegExp(regu);
  return re.test(str);
}

$("#id_account_reg_l").keyup(function(){
	if(isNull($(this).val())){
		$(".reg_tip").show();
		$(".reg_tip").html("注册账号不能为空或含有空格!");
	}else{
		$(".reg_tip").html("");
		if(isNull($(this).val()) || isNull($("#id_password_reg_l").val())){
			$("#regbtns").css("background-color","#CED6E3");
			$("#regbtns").css("color","#fff");
		}else{
			$("#regbtns").css("background-color","#173045");
			$("#regbtns").css("color","#18FFFF");
		}
	}
	
});
$("#id_password_reg_l").keyup(function(){
	if(isNull($(this).val())){
		$(".reg_p_tip").show();
		$(".reg_p_tip").html("注册密码不能为空或含有空格!");
	}else{
		$(".reg_p_tip").html("");
		if(isNull($(this).val()) || isNull($("#id_account_reg_l").val())){
			$("#regbtns").css("background-color","#CED6E3");
			$("#regbtns").css("color","#fff");
		}else{
			$("#regbtns").css("background-color","#173045");
			$("#regbtns").css("color","#18FFFF");
		}
	}
});