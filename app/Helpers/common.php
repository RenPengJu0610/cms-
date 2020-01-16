<?php
function showMsg($status,$message = '',$data = array()){
    $result = array(
        'status'    =>  $status,
        'message'   =>  $message,
        'data'      =>  $data
    );
    exit(json_encode($result));
}
function contentNew($data,$pid=0,$level=0){
    static $arr = [];
    $level = $level+1;
    foreach($data as $v){
        if($v->pid == $pid){
            $v['level'] =   $level;
            $arr[]  =   $v;
            contentNew($data,$v->newclass_id,$level);
        }
    }
    return $arr;
}