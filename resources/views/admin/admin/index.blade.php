<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>约见管理-有点</title>
<link rel="stylesheet" type="text/css" href="css/css.css" />
<script type="text/javascript" src="js/jquery.min.js"></script>
<!-- <script type="text/javascript" src="js/page.js" ></script> -->
</head>

<body>
<h3 align="center">管理员列表</h3><a href="{{url('create.blade.php')}}"></a>
<table class="table table-hover">
    <thead>
    <tr>
        <th>管理员ID</th>
        <th>管理员账号</th>
        <th>密码</th>
       <!--  <th>头像</th> -->
        <th>操作</th>
    </tr>
    </thead>
    <tbody>
    @if($data)
     @foreach($data as $v)
    <tr>
        <td>{{$v->id}}</td>x
        <td>{{$v->account}}</td>
        <td>{{$v->pwd}}</td>
        <!-- <td><img src="{{env('UPLOAD_URL')}}{{$v->photo}}" width="100px"></td> -->
        <td>
            <a href="{{url('admin/edit/'.$v->id)}}" class="btn btn-info">编辑</a>
            <a href="{{url('admin/destroy/'.$v->id)}}" class="btn btn-danger">删除</a>
        </td>
        @endforeach
        @endif
    </tr>
        <tr>
            <td colspan="4">{{$data->links()}}</td>
        </tr>
    </tbody>
</body>
<script type="text/javascript">
// 广告弹出框
$(".delban").click(function(){
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