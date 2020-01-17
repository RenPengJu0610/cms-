<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>约见编辑-有点</title>
<link rel="stylesheet" type="text/css" href="/static/admin/css/css.css" />
<script type="text/javascript" src="/static/admin/js/jquery.min.js"></script>
</head>
<body>
    <form action="{{url('newclass/update/'.$data->newclass_id)}}" method="post">
        @csrf
    <div id="pageAll">
		<div class="pageTop">
			<div class="page">
				<img src="/static/admin/img/coin02.png" /><span><a href="#">首页</a>&nbsp;-&nbsp;<a
					href="#">新闻分类管理</a>&nbsp;-</span>&nbsp;新闻分类修改
			</div>
		</div>
		<div class="page ">
			<!-- 上传广告页面样式 -->
			<div class="banneradd bor">
				<div class="baTopNo">
					<span>分类修改</span>
				</div>
				<div class="baBody">
					<div class="bbD">
						新闻类型：&nbsp;&nbsp;&nbsp;
						<select name="pid" disabled>
                            <option value="0">--请选择--</option>
                            @foreach($arr as $v)
                                <option value="{{$v->newclass_id}}"@if($data->pid == $v->newclass_id) selected @endif>@php echo str_repeat("&nbsp;&nbsp;&nbsp;&nbsp;",$v->level)."|——"; @endphp {{$v->newclass_name}}</option>
                            @endforeach
						</select>
                    </div>
                    <div class="bbD">分类名称：&nbsp;&nbsp;&nbsp;<input type="text" name="newclass_name" value="{{$data->newclass_name}}"></div>
					<div class="bbD">
						<p class="bbDP">
							<button class="btn_ok btn_yes" href="#">提交</button>
							<a class="btn_ok btn_no" href="#">取消</a>
						</p>
					</div>
				</div>
			</div>

			<!-- 上传广告页面样式end -->
		</div>
    </div>
    </form>
</body>
</html>