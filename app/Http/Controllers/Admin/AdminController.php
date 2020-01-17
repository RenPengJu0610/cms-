<?php
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Admin;
use Validator;
use Illuminate\Validation\Rule;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pageSize=config('app.pageSize');
        $data=Admin::orderBy('id','desc')->paginate($pageSize);
        return view('admin.admin.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $data=$request->except('_token');
        $validator = Validator::make($data, [
            'account' => 'required|unique:admin|max:10',
            'pwd' => 'required',
        ],[
            'account.required'=>'账号必填',
            'account.unique'=>'账号已存在',
            'account.max'=>'账号长度最大10位',
            'pwd.required'=>'密码必填',
        ]);
        if ($validator->fails()) {
            return redirect('admin/create')
                ->withErrors($validator)
                ->withInput();
        }                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          

        $data['pwd']=md5($data['pwd']);
         //单图上传
        if($request->hasFile('photo')){
            $data['photo']=$this->photo('photo');
        }
         $data=Admin::insert($data);
         if($data){
             echo "<script>alert('添加成功');location.href='/admin';</script>";
         }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=Admin::find($id);
        return view('admin.admin.edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data=$request->except('_token');
        $validator = Validator::make($data, [
            'account' => [
                'required',
                Rule::unique('admin')->ignore($id,'id'),
                'max:10'
            ],
        ],[
            'account.required'=>'账号必填',
            'account.unique'=>'账号已存在',
            'account.max'=>'账号长度最大10位',
        ]);
        if ($validator->fails()) {
            return redirect('admin/edit/'.$id)
                ->withErrors($validator)
                ->withInput();
        }
        Admin::where('id',$id)->update($data);
        echo "<script>alert('编辑成功');location.href='/admin';</script>";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $res=Admin::destroy($id);
       if($res){
           echo "<script>alert('删除成功');location.href='/admin';</script>";
       }
    }

    //文件上传
    public function photo($photo){
        if(request()->file($photo)->isValid()){
            $photo = request()->file($photo);
            $store_result = $photo->store('photo');
            return $store_result;
        }
        exit('未获取到上传文件或上传过程出错');
    }

    //验证账号唯一性
    public function checkAccount(){
        $account=request()->account;
        $count=Admin::where('account',$account)->count();
        if($count>0){
            echo 'no';
        }else{
            echo 'ok';
        }
    }
}
