<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/static/admin/css/bootstrap.min.css">
    <script src="/static/admin/js/jquery.js"></script>
    <script src="/static/admin/js/bootstrap.min.js"></script>
</head>
<body>
<h3 align="center">管理员编辑</h3><a href="{{url('admin')}}">管理员列表</a>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form class="form-horizontal" role="form" method="post" action="{{url('admin/update/'.$data->id)}}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">管理员账号</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" value="{{$data->account}}" id="firstname"
                   name="account" placeholder="请输入账号">
            <b style="color:red">{{$errors->first('account')}}</b>
        </div>
    </div>

    <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">管理员秘密</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" value="{{$data->pwd}}" id="firstname"
                   name="pwd" placeholder="请输入账号">
            <b style="color:red">{{$errors->first('pwd')}}</b>
        </div>
    </div>
    
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">编辑</button>
        </div>
    </div>
</form>

</body>
</html>
