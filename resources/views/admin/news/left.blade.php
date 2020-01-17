<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>首页左侧导航</title>
<link rel="stylesheet" type="text/css" href="/static/admin/css/public.css" />
<script type="text/javascript" src="/static/admin/js/jquery.min.js"></script>
<script type="text/javascript" src="/static/admin/js/public.js"></script>
<head></head>

<body id="bg">
	<!-- 左边节点 -->
	<div class="container">

		<div class="leftsidebar_box">
			<a href="#"><div class="line">
					<img src="/static/admin/img/coin01.png" />&nbsp;&nbsp;首页
				</div></a>
			<!-- <dl class="system_log">
			<dt><img class="icon1" src="/static/admin/img/coin01.png" /><img class="icon2"src="/static/admin/img/coin02.png" />
				首页<img class="icon3" src="/static/admin/img/coin19.png" /><img class="icon4" src="/static/admin/img/coin20.png" /></dt>
		</dl> -->
		<dl class="system_log">
				<dt>
					<img class="icon1" src="/static/admin/img/coin03.png" /><img class="icon2"
						src="/static/admin/img/coin04.png" /> 新闻分类管理<img class="icon3"
						src="/static/admin/img/coin19.png" /><img class="icon4"
						src="/static/admin/img/coin20.png" />
				</dt>
				<dd>
					<img class="coin11" src="/static/admin/img/coin111.png" />
					<img class="coin22" src="/static/admin/img/coin222.png" />
					<a class="cks" href="{{url('newclass/index')}}" target="main">新闻分类展示</a>
					<img class="icon5" src="/static/admin/img/coin21.png" />
				</dd>
				<dd>
					<img class="coin11" src="/static/admin/img/coin111.png" />
					<img class="coin22" src="/static/admin/img/coin222.png" />
					<a class="cks" href="{{url('newclass/create')}}" target="main">新闻分类添加</a>
					<img class="icon5" src="/static/admin/img/coin21.png" />
				</dd>
			</dl>
			<dl class="system_log">
				<dt>
					<img class="icon1" src="/static/admin/img/coin03.png" /><img class="icon2"
						src="/static/admin/img/coin04.png" /> 新闻管理<img class="icon3"
						src="/static/admin/img/coin19.png" /><img class="icon4"
						src="/static/admin/img/coin20.png" />
				</dt>
				
				<dd>
					<img class="coin11" src="/static/admin/img/coin111.png" />
					<img class="coin22" src="/static/admin/img/coin222.png" />
					<a class="cks" href="{{url('news/index')}}" target="main">新闻列表展示</a>
					<img class="icon5" src="/static/admin/img/coin21.png" />
				</dd>
				<dd>
					<img class="coin11" src="/static/admin/img/coin111.png" />
					<img class="coin22" src="/static/admin/img/coin222.png" />
					<a class="cks" href="{{url('news/insert')}}" target="main">新闻添加</a>
					<img class="icon5" src="/static/admin/img/coin21.png" />

				</dd>
				
			</dl>

		<dl class="system_log">
				<dt>
					<img class="icon1" src="/static/admin/img/coin03.png" /><img class="icon2"
						src="/static/admin/img/coin04.png" /> 管理员管理<img class="icon3"
						src="/static/admin/img/coin19.png" /><img class="icon4"
						src="/static/admin/img/coin20.png" />
				</dt>
				<dd>
					<img class="coin11" src="/static/admin/img/coin111.png" />
					<img class="coin22" src="/static/admin/img/coin222.png" />
					<a class="cks" href="{{url('admin')}}" target="main">管理员展示</a>
					<img class="icon5" src="/static/admin/img/coin21.png" />
				</dd>
				<dd>
					<img class="coin11" src="/static/admin/img/coin111.png" />
					<img class="coin22" src="/static/admin/img/coin222.png" />
					<a class="cks" href="{{url('admin/create')}}" target="main">管理员添加</a>
					<img class="icon5" src="/static/admin/img/coin21.png" />
				</dd>
			</dl>



		
			
			</dl>
			<dl class="system_log">
				<dt>
					<img class="icon1" src="/static/admin/img/coin05.png" /><img class="icon2"
						src="/static/admin/img/coin06.png" /> 友链<img class="icon3"
						src="/static/admin/img/coin19.png" /><img class="icon4"
						src="/static/admin/img/coin20.png" />
				</dt>
				<dd>
					<img class="coin11" src="/static/admin/img/coin111.png" /><img class="coin22"
						src="/static/admin/img/coin222.png" /><a class="cks" href="/static/admin/banner.html"
						target="main">友链添加</a><img class="icon5" src="/static/admin/img/coin21.png" />
				</dd>
				<dd>
					<img class="coin11" src="/static/admin/img/coin111.png" /><img class="coin22"
						src="/static/admin/img/coin222.png" /><a class="cks" href="/static/admin/opinion.html"
						target="main">友链展示</a><img class="icon5" src="/static/admin/img/coin21.png" />
				</dd>
			</dl>
			<dl class="system_log">
				<dt>
					<img class="icon1" src="/static/admin/img/coin07.png" /><img class="icon2"
						src="/static/admin/img/coin08.png" /> 会员管理<img class="icon3"
						src="/static/admin/img/coin19.png" /><img class="icon4"
						src="/static/admin/img/coin20.png" />
				</dt>
				<dd>
					<img class="coin11" src="/static/admin/img/coin111.png" /><img class="coin22"
						src="/static/admin/img/coin222.png" /><a href="/static/admin/vip.html" target="main"
						class="cks">会员管理</a><img class="icon5" src="/static/admin/img/coin21.png" />
				</dd>
			</dl>
			<dl class="system_log">
				<dt>
					<img class="icon1" src="/static/admin/img/coin10.png" /><img class="icon2"
						src="/static/admin/img/coin09.png" /> 行家管理<img class="icon3"
						src="/static/admin/img/coin19.png" /><img class="icon4"
						src="/static/admin/img/coin20.png" />
				</dt>
				<dd>
					<img class="coin11" src="/static/admin/img/coin111.png" /><img class="coin22"
						src="/static/admin/img/coin222.png" /><a href="/static/admin/connoisseur.html"
						target="main" class="cks">行家管理</a><img class="icon5"
						src="/static/admin/img/coin21.png" />
				</dd>
			</dl>
			<dl class="system_log">
				<dt>
					<img class="icon1" src="/static/admin/img/coin11.png" /><img class="icon2"
						src="/static/admin/img/coin12.png" /> 话题管理<img class="icon3"
						src="/static/admin/img/coin19.png" /><img class="icon4"
						src="/static/admin/img/coin20.png" />
				</dt>
				<dd>
					<img class="coin11" src="/static/admin/img/coin111.png" /><img class="coin22"
						src="/static/admin/img/coin222.png" /><a href="/static/admin/topic.html" target="main"
						class="cks">话题管理</a><img class="icon5" src="/static/admin/img/coin21.png" />
				</dd>
			</dl>
			<dl class="system_log">
				<dt>
					<img class="icon1" src="/static/admin/img/coin14.png" /><img class="icon2"
						src="/static/admin/img/coin13.png" /> 心愿管理<img class="icon3"
						src="/static/admin/img/coin19.png" /><img class="icon4"
						src="/static/admin/img/coin20.png" />
				</dt>
				<dd>
					<img class="coin11" src="/static/admin/img/coin111.png" /><img class="coin22"
						src="/static/admin/img/coin222.png" /><a href="/static/admin/wish.html" target="main"
						class="cks">心愿管理</a><img class="icon5" src="/static/admin/img/coin21.png" />
				</dd>
			</dl>
			<dl class="system_log">
				<dt>
					<img class="icon1" src="/static/admin/img/coin15.png" /><img class="icon2"
						src="/static/admin/img/coin16.png" /> 约见管理<img class="icon3"
						src="/static/admin/img/coin19.png" /><img class="icon4"
						src="/static/admin/img/coin20.png" />
				</dt>
				<dd>
					<img class="coin11" src="/static/admin/img/coin111.png" /><img class="coin22"
						src="/static/admin/img/coin222.png" /><a href="/static/admin/appointment.html"
						target="main" class="cks">约见管理</a><img class="icon5"
						src="/static/admin/img/coin21.png" />
				</dd>
			</dl>
			<dl class="system_log">
				<dt>
					<img class="icon1" src="/static/admin/img/coin17.png" /><img class="icon2"
						src="/static/admin/img/coin18.png" /> 收支管理<img class="icon3"
						src="/static/admin/img/coin19.png" /><img class="icon4"
						src="/static/admin/img/coin20.png" />
				</dt>
				<dd>
					<img class="coin11" src="/static/admin/img/coin111.png" /><img class="coin22"
						src="/static/admin/img/coin222.png" /><a href="/static/admin/balance.html"
						target="main" class="cks">收支管理</a><img class="icon5"
						src="/static/admin/img/coin21.png" />
				</dd>
			</dl>
			<dl class="system_log">
				<dt>
					<img class="icon1" src="/static/admin/img/coinL1.png" /><img class="icon2"
						src="/static/admin/img/coinL2.png" /> 系统管理<img class="icon3"
						src="/static/admin/img/coin19.png" /><img class="icon4"
						src="/static/admin/img/coin20.png" />
				</dt>
				<dd>
					<img class="coin11" src="/static/admin/img/coin111.png" /><img class="coin22"
						src="/static/admin/img/coin222.png" /><a href="/static/admin/changepwd.html"
						target="main" class="cks">修改密码</a><img class="icon5"
						src="/static/admin/img/coin21.png" />
				</dd>
				<dd>
					<img class="coin11" src="/static/admin/img/coin111.png" /><img class="coin22"
						src="/static/admin/img/coin222.png" /><a class="cks">退出</a><img
						class="icon5" src="/static/admin/img/coin21.png" />
				</dd>
			</dl>

		</div>

	</div>
</body>
</html>
