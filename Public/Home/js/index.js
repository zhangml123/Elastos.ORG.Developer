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
        console.log("phone");
		document.getElementById("develops").style.textAlign="center";
		document.getElementById("onlineleran").style.textAlign="center";
		document.getElementById("online_leran_line").style.textAlign="center";
		document.getElementById("online_leran_line_span").style.backgroundColor="#18ffff";
		document.getElementById("online_leran_line_span").style.width="20%";
		document.getElementById("online_leran_line_span").style.marginLeft="40%";
		$(".navbar-collapse").css("background-color","#f6f9fd");
		$("#nav_ul li").css("background-color","#f6f9fd");
		$(".submenu").css("background-color","#fff");
		$(".submenu li").css("background-color","#fff");
		$("#allmenus").addClass("collapse navbar-collapse");
/* 				$(".navbar-right").children("li").css("text-align","center");
		$(".dropdown").css("height","260px");
		$(".dropdown").parent("ul").css("height","260px");
		$(".dropdown-toggle").attr("aria-expanded","true");
$(".globalLoginBtn").parent("div").css("text-align","center");
		$(".nav-dapps").parent("li").css("text-align","center");
		$(".nav-dapps").parent("li").css("text-align","center");
		$(".nav-community").parent("li").css("text-align","center");
		$(".nav-dapps").parent("div").css("text-align","center");
		$(".nav-dapps").parent("div").css("text-align","center");
		$(".nav-dapps").parent("div").css("text-align","center");
		$(".nav-dapps").parent("div").css("text-align","center"); */
		
      } else {
        console.log("pc");
		document.getElementById("develops").style.textAlign="left";
		document.getElementById("onlineleran").style.textAlign="left";
		document.getElementById("online_leran_line").style.textAlign="left";
		document.getElementById("online_leran_line_span").style.backgroundColor="#173045";
		document.getElementById("online_leran_line_span").style.width="60px";
		document.getElementById("online_leran_line_span").style.marginLeft="0px";
		$(".navbar-collapse").css("background-color","#fff");
		$("#nav_ul li").css("background-color","#fff");
		$(".submenu").css("background-color","#fff");
		$(".globalLoginBtn").parent("div").css("text-align","left");
      }
    }
 
    browserRedirect();