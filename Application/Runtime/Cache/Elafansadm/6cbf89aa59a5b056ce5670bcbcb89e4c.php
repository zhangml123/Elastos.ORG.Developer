<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <title>亦来云技术指南-后台管理系统</title> 
	<link href="<?php echo (PUBLIC_F); ?>Elafansadm/css/base.css" rel="stylesheet">
	<link href="<?php echo (PUBLIC_F); ?>Elafansadm/css/platform.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo (PUBLIC_F); ?>Elafansadm/custom/uimaker/easyui.css">
</head> 
<body>
    <div class="container">
        <div id="pf-hd">
            <div class="pf-logo" style="width:190px;">
                <img src="<?php echo (PUBLIC_F); ?>Elafansadm/images/main/main_logo.png" alt="logo">
            </div>
            <div class="pf-nav-wrap">
              <div class="pf-nav-ww" style="width:810px;">
                <ul class="pf-nav">
				  <?php if(is_array($menulist)): $k = 0; $__LIST__ = $menulist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vob): $mod = ($k % 2 );++$k; if(($k) == "1"): ?><li class="pf-nav-item home current" data-menu="sys-manage">
							  <a href="javascript:jump(<?php echo ($k-1); ?>,'<?php echo ($vob["columnname"]); ?>');">
								  <span class="iconfont"><?php echo ($vob["icon"]); ?></span>
								  <span class="pf-nav-title"><?php echo ($vob["columnname"]); ?></span>
							  </a>
						  </li><?php endif; ?>
					   <?php if(($k) != "1"): ?><li class="pf-nav-item home" data-menu="sys-manage">
							  <a href="javascript:jump(<?php echo ($k-1); ?>,'<?php echo ($vob["columnname"]); ?>');">
								  <span class="iconfont"><?php echo ($vob["icon"]); ?></span>
								  <span class="pf-nav-title"><?php echo ($vob["columnname"]); ?></span>
							  </a>
						  </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
					<!--
                  <li class="pf-nav-item home" data-menu="sys-manage">
                      <a href="javascript:jump(1,'栏目分类');">
                          <span class="iconfont">&#xe63f;</span>
                          <span class="pf-nav-title">栏目分类</span>
                      </a>
                  </li>
                  <li class="pf-nav-item project" data-menu="org-manage">
                      <a href="javascript:jump(2,'媒体管理');">
                          <span class="iconfont">&#xe60d;</span>
                          <span class="pf-nav-title">媒体管理</span>
                      </a>
                  </li>
                  <li class="pf-nav-item static" data-menu="main-data">
                      <a href="javascript:jump(3,'广告管理');">
                          <span class="iconfont">&#xe61e;</span>
                          <span class="pf-nav-title">广告管理</span>
                      </a>
                  </li>
                  <li class="pf-nav-item manger" data-menu="supplier-mange">
                      <a href="javascript:jump(4,'文章管理');">
                          <span class="iconfont">&#xe620;</span>
                          <span class="pf-nav-title">文章管理</span>
                      </a>
                  </li>

                  <li class="pf-nav-item manger" data-menu="supplier-dev">
                      <a href="javascript:jump(5,'评论管理');">
                          <span class="iconfont">&#xe625;</span>
                          <span class="pf-nav-title">评论管理</span>
                      </a>
                  </li>

                  <li class="pf-nav-item manger" data-menu="pur-source">
                      <a href="javascript:jump(6,'信箱管理');">
                          <span class="iconfont">&#xe64b;</span>
                          <span class="pf-nav-title">信箱管理</span>
                      </a>
                  </li>
                  <li class="pf-nav-item manger" data-menu="contract-mange">
                      <a href="javascript:jump(7,'投票管理');">
                          <span class="iconfont">&#xe64c;</span>
                          <span class="pf-nav-title">投票管理</span>
                      </a>
                  </li>
                  <li class="pf-nav-item manger" data-menu="contract-mange">
                      <a href="javascript:jump(8,'问卷调查');">
                          <span class="iconfont">&#xe64c;</span>
                          <span class="pf-nav-title">问卷调查</span>
                      </a>
                  </li>


                  <li class="pf-nav-item manger" data-menu="pur-source">
                      <a href="javascript:jump(9,'角色权限');">
                          <span class="iconfont">&#xe623;</span>
                          <span class="pf-nav-title">角色权限</span>
                      </a>
                  </li>

                  <li class="pf-nav-item manger" data-menu="contract-mange">
                      <a href="javascript:jump(10,'用户管理');">
                          <span class="iconfont">&#xe646;</span>
                          <span class="pf-nav-title">用户管理</span>
                      </a>
                  </li>
                  <li class="pf-nav-item manger" data-menu="pur-source">
                      <a href="javascript:jump(11,'系统设置');">
                          <span class="iconfont">&#xe623;</span>
                          <span class="pf-nav-title">系统设置</span>
                      </a>
                  </li>
                  <li class="pf-nav-item manger" data-menu="contract-mange">
                      <a href="javascript:javascript:jump(12,'日志管理');">
                          <span class="iconfont">&#xe646;</span>
                          <span class="pf-nav-title">日志管理</span>
                      </a>
                  </li>
				-->
				<!--
                  <li class="pf-nav-item manger" data-menu="pur-source">
                      <a href="javascript:;">
                          <span class="iconfont">&#xe623;</span>
                          <span class="pf-nav-title">示例示例</span>
                      </a>
                  </li>

                  <li class="pf-nav-item manger" data-menu="contract-mange">
                      <a href="javascript:;">
                          <span class="iconfont">&#xe646;</span>
                          <span class="pf-nav-title">示例示例示例示例示例示例</span>
                      </a>
                  </li>

                  <li class="pf-nav-item manger" data-menu="pur-source">
                      <a href="javascript:;">
                          <span class="iconfont">&#xe623;</span>
                          <span class="pf-nav-title">采购寻源</span>
                      </a>
                  </li>

                  <li class="pf-nav-item manger" data-menu="contract-mange">
                      <a href="javascript:;">
                          <span class="iconfont">&#xe646;</span>
                          <span class="pf-nav-title">合同管理</span>
                      </a>
                  </li>
				  -->
                </ul>
              </div>
			  <!--
              <a href="javascript:;" class="pf-nav-prev disabled iconfont">&#xe606;</a>
              <a href="javascript:;" class="pf-nav-next iconfont">&#xe607;</a>
			  -->
            </div>
            <div class="pf-user">
                <div class="pf-user-photo">
                    <img src="<?php echo (PUBLIC_F); ?>Elafansadm/images/main/user.png" alt="">
                </div>
                <h4 class="pf-user-name ellipsis"><?php echo ($curusername); ?></h4>
                <i class="iconfont xiala">&#xe607;</i>

                <div class="pf-user-panel">
                    <ul class="pf-user-opt">
						<!--
                        <li>
                            <a href="javascript:;">
                                <i class="iconfont">&#xe60d;</i>
                                <span class="pf-opt-name">用户信息</span>
                            </a>
                        </li>
						-->
                        <li class="pf-modify-pwd">
                            <a href="javascript:void(0);" id="setpwdbtn">
                                <i class="iconfont">&#xe634;</i>
                                <span class="pf-opt-name">修改密码</span>
                            </a>
                        </li>
                        <li class="pf-logout">
                            <a href="<?php echo ($curhost); ?>/financeadm.php/Index/logout">
                                <i class="iconfont">&#xe60e;</i>
                                <span class="pf-opt-name">退出</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>

        <div id="pf-bd">
			<!-- 左侧菜单开始 -->
            <div id="pf-sider">
                
            </div>
            <!-- 左侧菜单结束 -->
			<div id="pf-page">
                <div id="tabsa" class="easyui-tabs" style="width:100%;height:100%;">
                  <div title="首页" style="padding:10px 5px 5px 10px;">
                    <iframe class="page-iframe" src="Main/workbench" frameborder="no"   border="no" height="100%" width="100%" scrolling="auto"></iframe>
                  </div>
                </div>
            </div>
        </div>
        <div id="pf-ft">
            <div class="system-name">
              <i class="iconfont">&#xe6fe;</i>
              <span>后台管理系统&nbsp;v1.0</span>
            </div>
            <div class="copyright-name">
              <span>CopyRight&nbsp;2017&nbsp;&nbsp;gzjrw.com.cn&nbsp;版权所有</span>
              <i class="iconfont" >&#xe6ff;</i>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="<?php echo (PUBLIC_F); ?>Elafansadm/custom/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo (PUBLIC_F); ?>Elafansadm/custom/jquery.easyui.min.js"></script>
    <!-- <script type="text/javascript" src="js/menu.js"></script> -->
    <script type="text/javascript" src="<?php echo (PUBLIC_F); ?>Elafansadm/js/main.js"></script>
    <!--[if IE 7]>
      <script type="text/javascript">
        $(window).resize(function(){
          $('#pf-bd').height($(window).height()-76);
        }).resize();
        
      </script>
    <![endif]-->  

    
    <script type="text/javascript">
$('.easyui-tabs1').tabs({
			  tabHeight: 44,
			  onSelect:function(title,index){
				var currentTab = $('.easyui-tabs1').tabs("getSelected");
				if(currentTab.find("iframe") && currentTab.find("iframe").size()){
					currentTab.find("iframe").attr("src",currentTab.find("iframe").attr("src"));
				}
			  }
			})
    $(window).resize(function(){
          $('.tabs-panels').height($("#pf-page").height()-46);
          $('.panel-body').height($("#pf-page").height()-76)
    }).resize();

    var page = 0,
        pages = ($('.pf-nav').height() / 70) - 1;

    if(pages === 0){
      $('.pf-nav-prev,.pf-nav-next').hide();
    }
    $(document).on('click', '.pf-nav-prev,.pf-nav-next', function(){


      if($(this).hasClass('disabled')) return;
      if($(this).hasClass('pf-nav-next')){
        page++;
        $('.pf-nav').stop().animate({'margin-top': -70*page}, 200);
        if(page == pages){
          $(this).addClass('disabled');
          $('.pf-nav-prev').removeClass('disabled');
        }else{
          $('.pf-nav-prev').removeClass('disabled');
        }
        
      }else{
        page--;
        $('.pf-nav').stop().animate({'margin-top': -70*page}, 200);
        if(page == 0){
          $(this).addClass('disabled');
          $('.pf-nav-next').removeClass('disabled');
        }else{
          $('.pf-nav-next').removeClass('disabled');
        }
        
      }
    })
    // setTimeout(function(){
    //    $('.tabs-panels').height($("#pf-page").height()-46);
    //    $('.panel-body').height($("#pf-page").height()-76)
    // }, 200)
	jump(0,"综合管理");
	function jump(leftmenu,menuname){
		var menuarr = <?php echo ($menuarr); ?>;
		var menu = $.parseJSON(menuarr[leftmenu]);
		var htmla = '<h2 class="pf-model-name"><span class="iconfont">&#xe64a;</span>'
                    +'<span class="pf-name">'+ menuname +'</span><span class="toggle-icon"></span></h2>';
			htmla = htmla + '<ul class="sider-nav">';
			for(var i=0;i< menu.length;i++){
						if(i==0){
							htmla = htmla + '<li class="current">';
						}else{
							htmla = htmla + '<li class="">';
						}
						htmla = htmla + '<a href="javascript:;">'
						+'<span class="iconfont sider-nav-icon">&#xe620;</span>'
						+'<span class="sider-nav-title">'+ menu[i]['menuname'] +'</span>'
						+'<i class="iconfont">&#xe642;</i>'
						+'</a>'
						+'<ul class="sider-nav-s">';
						var subsubmenu =  menu[i]['submenu'];
						for(var k=0;k< subsubmenu.length;k++){
							if(k==0 && i==0){
								curhref = subsubmenu[k]['submenuurl'];
								title = subsubmenu[k]['submenuname'];
								htmla = htmla +' <li class="active" style="cursor:pointer;"><a _href="'+ subsubmenu[k]['submenuurl'] +'">'+ subsubmenu[k]['submenuname'] +'</a></li>';
							}else{
								htmla = htmla +' <li class="" style="cursor:pointer;"><a _href="'+ subsubmenu[k]['submenuurl'] +'">'+ subsubmenu[k]['submenuname'] +'</a></li>';
							}
						}	
						htmla = htmla +'</ul></li>';
						//$('iframe').attr('src',curhref);
						
			}
			$('#pf-sider').html(htmla+"</ul>");
			if(leftmenu!=0){
				var content = '<iframe class="page-iframe"  src="'+curhref+'" frameborder="no"   border="no" height="100%" width="100%" scrolling="auto"></iframe>';
				$('#tabsa').tabs('add',{
					title:title,
					content:content,
					closable:true 
				});			
			}

	}
	$(document).on("click",".sider-nav-s li",function(){
		$(this).siblings().attr("class","");
		$(this).attr("class","active");
		var title = $(this).find("a").html();
		if ($('#tabsa').tabs('exists', title)){
			$('#tabsa').tabs('select', title);
		} else {
			var content = '<iframe class="page-iframe"  src="'+$(this).find("a").attr("_href")+'" frameborder="no"   border="no" height="100%" width="100%" scrolling="auto"></iframe>';
			$('#tabsa').tabs('add',{
				title:title,
				content:content,
				closable:true 
			});
		}
	})
	$("#setpwdbtn").click(function(){
		var title="修改密码";
		var curhref = "Sys/setpwdshow";
		var content = '<iframe class="page-iframe"  src="'+curhref+'" frameborder="no"   border="no" height="100%" width="100%" scrolling="auto"></iframe>';
		$('#tabsa').tabs('add',{
			title:title,
			content:content,
			closable:true 
		});	
	});
    </script>
</body> 
</html>