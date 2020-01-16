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
					href="#">新闻分类管理</a>&nbsp;-</span>&nbsp;新闻分类展示
			</div>
		</div>


				<!-- banner 表格 显示 -->
				<div class="conShow">
					<table width="100%" border="1" cellspacing="0" cellpadding="0">
						<tr>
							<td width="5%" class="tdColor">分类ID</td>
							<td width="15%" class="tdColor">新闻分类</td>
							<td width="10%" class="tdColor">操作</td>
                        </tr>
                        @foreach($data as $v)
						<tr>
							<td>{{$v->newclass_id}}</td>
							<td>{{$v->newclass_name}}</td>
                            <td><a href="{{url('newclass/edit/'.$v->newclass_id)}}">
                             <img class="operation" src="/static/admin/img/update.png"></a>
                             <img class="operation delban" del="{{$v->newclass_id}}" src="/static/admin/img/delete.png">
                            </td>
                        </tr>
                        @endforeach
					</table>
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
        <input class="hiddenid" type="hidden" name="id" value="">
		<p class="delP1">你确定要删除此条记录吗？</p>
        <p class="delP2">
            <a onclick="del()" href="javascript:void(0)" class="ok yes">确定</a>
            <a class="ok no">取消</a>
        </p>
		
	</div>
	<!-- 删除弹出框  end-->
</body>

<script type="text/javascript">
// 广告弹出框
$(".delban").click(function(){
  var   id  = $(this).attr('del');
    $('.hiddenid').val(id);
  $(".banDel").show();
});
function del(){
    var id= $('.hiddenid').val();
    // alert(id);
    $.get('/newclass/del/'+id,function(json_info){
       // alert(123);
       $(".banDel").hide();
        if(json_info.code == 1){
            alert(json_info.msg)
        }
        if(json_info.code==200){
                location.reload();
        }
    },'json')
}
$(".close").click(function(){
  $(".banDel").hide();
});
$(".no").click(function(){
  $(".banDel").hide();
});
// 广告弹出框 end
</script>
</html>