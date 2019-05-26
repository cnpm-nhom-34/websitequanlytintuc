<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post_model;
use Illuminate\Support\Facades\Redirect;
class HomeController extends Controller
{
    public function index(){
        return view('home');
    }
    public function blog(){
        $posts= post_model::select('id', 'title','created_at')->orderBy('id', 'desc')->paginate(2);
      
        return view('blog',['posts' => $posts]);
    }
    public function chitietbaiviet($id){
        $post   = post_model::find($id);
        $allTag = explode("#",$post->tag);
        $Time   = date_format($post->created_at, ' l jS F Y');
        return view('chi-tiet-bai-viet',['post' => $post, 'allTag' => $allTag,'Time' => $Time ]);
    }
}
