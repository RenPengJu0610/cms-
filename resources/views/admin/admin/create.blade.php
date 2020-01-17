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
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<h3 align="center">管理员添加</h3><a href="{{url('admin')}}">管理员列表</a>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form class="form-horizontal" role="form" method="post" action="{{url('admin/store')}}" enctype="multipart/form-data" id="myform">
    @csrf
    <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">管理员账号</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="account"
                   name="account" placeholder="请输入账号">
            <b style="color:red">{{$errors->first('account')}}</b>
        </div>
    </div>
    <div class="form-group">
        <label for="lastname" class="col-sm-2 control-label">管理员密码</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="lastname"
                   placeholder="请输入密码" name="pwd">
            <b style="color:red">{{$errors->first('pwd')}}</b>
        </div>
    </div>
  <!--   <div class="form-group">
        <label for="lastname" class="col-sm-2 control-label">管理员头像</label>
        <div class="col-sm-10">
            <input type="file" class="form-control" id="lastname"name="photo">
        </div>
    </div> -->
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">添加</button>
        </div>
    </div>
</form>

</body>
</html>
<script src="/static/jquery.js"></script>
<script>
    $(document).ready(function(){
        $(document).on('click','#myform',function(){
            var account=$("#account").val();
            var reg=/^[a-z_]\w{2,}$/;
            if(account==''){
                alert('账号必填');
                return false;
            }else if(!reg.test(account)){
                alert('账号允许字母下划线数字组成 非数字开头至少2位');
                return false;
            }else{
                var flag=false;
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    method:"post",
                    url:"{{url('admin/checkAccount')}}",
                    data:{account:account},
                    async:false
                }).done(function(res){
                    if(res=='no'){
                        alert('账号已存在');
                        flag=false;
                    }else{
                        flag=true;
                    }
                })
                return flag;
            }
            return true;
        })
    })
</script>
