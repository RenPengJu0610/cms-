<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>约见管理-有点</title>
<link rel="stylesheet" type="text/css" href="/static/admin/css/css.css" />
<script type="text/javascript" src="/static/admin/js/jquery.min.js"></script>
<!-- <script type="text/javascript" src="js/page.js" ></script> -->
</head>

<body>
	<div id="pageAll">
		<div class="pageTop">
			<div class="page">
				<img src="/static/admin/img/coin02.png" /><span><a href="#">首页</a>&nbsp;-&nbsp;<a
					href="#">新闻列表展示</a>&nbsp;-</span>&nbsp;新闻列表
			</div>
		</div>

		<div class="page">
			<!-- banner页面样式 -->
			<div class="connoisseur">
				<!-- banner 表格 显示 -->
				<div class="conShow">
					<table border="1" cellspacing="0" cellpadding="0">
						<tr>
							<td width="66px" class="tdColor tdC">编号</td>
							<td width="355px" class="tdColor">新闻名称</td>
							<td width="260px" class="tdColor">新闻作者</td>
							<td width="275px" class="tdColor">新闻内容</td>
							<td width="290px" class="tdColor">新闻状态</td>
							<td width="290px" class="tdColor">添加时间</td>
							<td width="130px" class="tdColor">新闻分类</td>
							<td width="130px" class="tdColor">操作</td>
                        </tr>
                        @foreach($data as $v)
						<tr>
							<td>{{$v->new_id}}</td>
							<td>{{$v->new_name}}</td>
							<td>{{$v->new_author}}</td>
							<td>{{$v->new_desc}}</td>
							<td>
                                @if($v->status == 1)
                                    未审核
                                @elseif($v->status == 2)
                                    通过
                                @elseif($v->status == 3)
                                    未通过
                                @endif
                            </td>
							<td>{{date("Y-m-d H:i:s",$v->utime)}}</td>
							<td>{{$v->newclass_name}}</td>
							<td><a href="{{url('/news/edit/'.$v->new_id)}}">
                                <img class="operation" src="/static/admin/img/update.png"></a>
                                <img class="operation delban" del="{{$v->new_id}}" src="/static/admin/img/delete.png">
                            </td>
                        </tr>
                        @endforeach
					</table>
					<div class="paging">{{$data->links()}}</div>
				</div>
				<!-- banner 表格 显示 end-->
			</div>
			<!-- banner页面样式end -->
		</div>

	</div>


	<!-- 删除弹出框 -->
	<div class="banDel">
		<div class="delete">
			<div class="close">
				<a><img src="/static/admin/img/shanchu.png" /></a>
			</div>
			<p class="delP1">你确定要删除此条记录吗？</p>
			<p class="delP2">
				<a href="#" id="fromdel" class="ok yes">确定</a><a class="ok no">取消</a>
			</p>
		</div>
	</div>
	<!-- 删除弹出框  end-->
</body>

<script type="text/javascript">
// 广告弹出框
$(".delban").click(function(){
    var id  =  $(this).attr('del');
    var url = $('#fromdel').prop('href',"{{url('/news/del')}}"+'/'+id);
    // console.log(url);
  $(".banDel").show();
});
$(".close").click(function(){
  $(".banDel").hide();
});
$(".no").click(function(){
  $(".banDel").hide();
});
// 广告弹出框 end
</script>
</html>