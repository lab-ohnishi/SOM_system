<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminPostController extends Controller
{
//  function create(){
//    return View::make('posts.create');
//  }
//  function store(){
//    DB::table('posts')->insert([
//        'title'=>Input::get('title'),
//        'body'=>Input::get('body')
//    ]);
//    return 'Successfully done!';
//  }
  function index(){
//    $posts = DB::table('users')->get();
//    return View::make('posts.index')->with('posts', $posts);
      return view('admin.post');
  }
//  function show($postid){
//    $post = DB::table('posts')->where('id',$postid)->first();
//    return View::make('posts.show')->with('post', $post);
//  }
}
