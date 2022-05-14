<?php

namespace App\Http\Controllers;
use app/models/post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = post::all();

        return view('admin.posts.viewindex',compact(posts));
    }
    
    //
}
