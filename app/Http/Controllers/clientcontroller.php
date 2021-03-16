<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class clientcontroller extends Controller
{
    public function getallpost(){
        $response=Http::get('https://jsonplaceholder.typicode.com/posts');
        return $response->json();
    }
    
    public function getpostid($id){
        $post=Http::get('https://jsonplaceholder.typicode.com/posts/'.$id);
        return $post->json();
    }

    public function addpost(){
        $posts= Http::post('https://jsonplaceholder.typicode.com/posts',[
            'id'=> 1,
            'title'=>'blog',
            'body'=>'welcome to http'
        ]);
        return $posts->json();
    }

    Public function updatepost(){
        $posts= Http::put('https://jsonplaceholder.typicode.com/posts/1',[
            
            'title'=>'Update blog',
            'body'=>'Update welcome to http'
        ]);
        return $posts->json();
    }
}
