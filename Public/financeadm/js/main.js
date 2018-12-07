var mainPlatform = {

	init: function(){this.bindEvent();
		//console.log(menu);
		//this.render(menu['home']);
	},

	bindEvent: function(){
		//var menu = new Object();
		//var menu = {"sys-manage":{"title":"栏目分类","menu":[{"title":"广告图片","href":"Advertmenu/index","icon":"","isCurrent":true},{"title":"文章图片","href":"Articlemenu/index","icon":"","isCurrent":false}]}};
		
		var self = this;
		// 顶部大菜单单击事件
		$(document).on('click', '.pf-nav-item', function() {
            $('.pf-nav-item').removeClass('current');
            $(this).addClass('current');

            // 渲染对应侧边菜单
            var m = $(this).data('menu');
			console.log(m);
           // self.render(menu[m]);
        });

        $(document).on('click', '.sider-nav li', function() {
            $('.sider-nav li').removeClass('current');
            $(this).addClass('current');
            $('iframe').attr('src', $(this).data('src'));
        });

        $(document).on('click', '.pf-logout', function() {
            layer.confirm('您确定要退出吗？', {
              icon: 4,
			  title: '确定退出' //按钮
			}, function(){
			  location.href= 'login.html'; 
			});
        });
        //左侧菜单收起
        $(document).on('click', '.toggle-icon', function() {
            $(this).closest("#pf-bd").toggleClass("toggle");
            setTimeout(function(){
            	$(window).resize();
            },300)
        });
		/*
        $(document).on('click', '.pf-modify-pwd', function() {
            $('#pf-page').find('iframe').eq(0).attr('src', 'backend/modify_pwd.html')
        });

        $(document).on('click', '.pf-notice-item', function() {
            $('#pf-page').find('iframe').eq(0).attr('src', 'backend/notice.html')
        });
		*/
	},

	render: function(menu){
		console.log(menu.title);
		var current,
		html = ['<h2 class="pf-model-name"><span class="pf-sider-icon"></span><span class="pf-name">'+ menu.title +'</span></h2>'];
		html.push('<ul class="sider-nav">');
		for(var i = 0, len = menu.menu.length; i < len; i++){
			if(menu.menu[i].isCurrent){
				current = menu.menu[i];
				html.push('<li class="current" title="'+ menu.menu[i].title +'" data-src="'+ menu.menu[i].href +'"><a href="javascript:;"><img src="'+ menu.menu[i].icon +'"><span class="sider-nav-title">'+ menu.menu[i].title +'</span><i class="iconfont"></i></a></li>');
			}else{
				html.push('<li data-src="'+ menu.menu[i].href +'" title="'+ menu.menu[i].title +'"><a href="javascript:;"><img src="'+ menu.menu[i].icon +'"><span class="sider-nav-title">'+ menu.menu[i].title +'</span><i class="iconfont"></i></a></li>');
			}
		}
		html.push('</ul>');
		$('iframe').attr('src', current.href);
		$('#pf-sider').html(html.join(''));
		
		/* 	
			var htmla = '<h2 class="pf-model-name"><span class="iconfont">&#xe64a;</span>'
			+'<span class="pf-name">组织管理</span><span class="toggle-icon"></span></h2>'
			+'<ul class="sider-nav">'
			+'<li class="current">'
			+'<a href="javascript:;">'
			+'<span class="iconfont sider-nav-icon">&#xe620;</span>'
			+'<span class="sider-nav-title">供应商组织</span>'
			+'<i class="iconfont">&#xe642;</i>'
			+'</a>'
			+'<ul class="sider-nav-s">'
			+' <li class="active"><a href="#">供应商组织1</a></li>'
			+' <li><a href="#">供应商组织2</a></li>'
			+' <li><a href="#">供应商组织3</a></li>'
			+' <li><a href="#">供应商组织4</a></li>'
			+'</ul></li></ul>'; 
		*/
		
	}

};
mainPlatform.init();