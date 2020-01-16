<?php

namespace App\Http\Controllers;
use App\NewClass;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data   =   NewClass::get();
        $arr    =   contentNew($data);
        // dd($arr);
        return view('admin/newclass/index',['data'=>$arr]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $res    =   NewClass::get();
        // dd($res);
        $arr    =   contentNew($res);
        return view('admin/newclass/create',['arr'=>$arr]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = $request->except('_token');
        $res  = Newclass::insert($post);
        if($res){
            return redirect('newclass/index');
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
        $data   =   NewClass::find($id);
        $res    =   NewClass::get();
        $arr    =   contentNew($res);
        // dd($arr);
        return view('admin/newclass/edit',['arr'=>$arr,'data'=>$data]);
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
        $post   =   $request->except('_token');
        $res    =   NewClass::where('newclass_id','=',$id)->update($post);
        if($res !=false){
            return redirect('newclass/index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $count    =   NewClass::where('pid','=',$id)->count();
        if($count){
            echo json_encode(['code'=>1,'msg'=>'不能删除']);die;
        }
        $res    =   NewClass::destroy($id);
        if($res){
            echo json_encode(['code'=>200,'msg'=>'删除成功']);
        }else{
            echo json_encode(['code'=>2,'msg'=>'删除失败']);
        }
    }
}
