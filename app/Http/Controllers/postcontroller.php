<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\post;

class postcontroller extends Controller
{
 public function getallpost(){
     $post=DB::table('post')->get();
     return view('layouts/posts',compact('post'));

 } 

 public function addpost(Request $request){
     return view('layouts/addpost');
 }

 public function submitpost(Request $request){
   DB::table('post')->insert([
       'title'=>$request->title,
       'body'=>$request->body,
   ]);
   return back()->with('postcreate','post has been successfully created');
}

public function getpostbyid($id){
    $posts=DB::table('post')->where('Id',$id)->first();
    return view('layouts/single',compact('posts'));
}

public function deletebyid($id){
    $posts=DB::table('post')->where('Id',$id)->delete();
    return back()->with('postdeleted','post has been deleted');
}

public function editpost($id){
    $posts=DB::table('post')->where('Id',$id)->first();
    return view('layouts/edit',compact('posts'));
}
Public function updatepost(Request $request){
   DB::table('post')->where('Id',$request->id)->update([
        'title'=>$request->title,
       'body'=>$request->body,

    ]);
    return back()->with('upatepost','post has been updated');
}


public function innerjoin(){
    $request= DB::table('users')->join('post','users.id', '=','post.users_id')
    ->select('users.name','post.title','post.body')->
    get();
    return $request;
}
public function getpostmodel(){
    $posts=post::all();
    return $posts;
}
}
