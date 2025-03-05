<?php

use App\Models\Pengaturan;
use App\Models\Post;


function get_pengaturan_value($key){
    $data = pengaturan::where('key',$key)->first();
    if(isset($data->value)) {
        return $data->value;
    } else {
        return 'empty';
    }
}

function get_post(){
    return Post::published()->get();
}



