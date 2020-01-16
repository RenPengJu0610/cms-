<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>行家添加-有点</title>
<link rel="stylesheet" type="text/css" href="/static/admin/css/css.css" />
<script type="text/javascript" src="/static/admin/js/jquery.min.js"></script>
</head>
<body>
    <form action="{{url('news/update/'.$res->new_id)}}" method="post">
        @csrf
	<div id="pageAll">
		<div class="pageTop">
			<div class="page">
				<img src="/static/admin/img/coin02.png" /><span><a href="#">首页</a>&nbsp;-&nbsp;<a
					href="#">新闻管理</a>&nbsp;-</span>&nbsp;新闻添加
			</div>
		</div>
		<div class="page ">
			<!-- 上传广告页面样式 -->
			<div class="banneradd bor">
				<div class="baTopNo">
					<span>新闻添加</span>
				</div>
				<div class="baBody">

					<div class="bbD">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;新闻名称：<input type="text" name="new_name" class="input3" value="{{$res->new_name}}"/>
					</div>
					<div class="bbD">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;新闻作者：<input type="text" name="new_author" class="input3"  value="{{$res->new_author}}"/>
					</div>
					<div class="bbD">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;新闻分类：
                        <select name="newclass_id" id="" class="input3" >
                            <option value="">--请选择--</option>
                            @foreach($arr as $v)
                                <option value="{{$v->newclass_id}}"@if($res->newclass_id == $v->newclass_id)selected @endif>{{$v->newclass_name}}</option>
                            @endforeach
                        </select>
					</div>
					<div class="bbD">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;新闻内容：
						<div class="btext2">
							<textarea class="text2" name="new_desc" >{{$res->new_desc}}</textarea>
						</div>
					</div>
					<div class="bbD">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;审核状态：
                        @if($res->status == 1)
                        <label><input type="radio" name="status" checked value="1" />&nbsp;未审核</label>
                        <label><input type="radio" name="status" value="2" />&nbsp;已通过</label> 
                        <label class="lar"><input type="radio" name="status" value="3" />&nbsp;不通过</label>
                        @elseif($res->status == 2)
                        <label><input type="radio" name="status"  value="1" />&nbsp;未审核</label>
                        <label><input type="radio" name="status" checked value="2" />&nbsp;已通过</label> 
                        <label class="lar"><input type="radio" name="status" value="3" />&nbsp;不通过</label>
                        @elseif($res->status == 3)
                        <label><input type="radio" name="status"  value="1" />&nbsp;未审核</label>
                        <label><input type="radio" name="status" value="2" />&nbsp;已通过</label> 
                        <label class="lar"><input type="radio" checked name="status" value="3" />&nbsp;不通过</label>
                        @endif
					</div>
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