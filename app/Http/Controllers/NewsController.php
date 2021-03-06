<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\NewClass;
use App\News;
class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = News::select('news.*','newclass.newclass_name')->leftjoin('newclass','news.newclass_id','=','newclass.newclass_id')
                      ->paginate(3);
        return view('admin/news/index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/news/create');
    }
    public function head(){
        return view('admin/news/head');
    }
    public function left(){
        return view('admin/news/left');
    }
    public function main(){
        return view('admin/news/main');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function insert()
    {
        $data   =   NewClass::get();
        $arr    =   contentNew($data);
        return view('admin/news/insert',['arr'=>$arr]);
    }
    public function store(Request $request)
    {
        $post   =   $request->except('_token');
        // dd($post);
        $res    =   News::insert($post);
        if($res){
            return redirect('news/index');
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
        $data   =   NewClass::get();
        $arr    =   contentNew($data);
        $res    =   News::find($id);
        return view('admin/news/edit',['arr'=>$arr,'res'=>$res]);
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
        // dd($post);
        $res    =   News::where('new_id','=',$id)->update($post);
        if($res !=false){
            return redirect('news/index');
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
        $res    =   News::destroy($id);
        if($res){
            return redirect('news/index');
        }
    }
}
