<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post_model;
use Illuminate\Support\Facades\Redirect;


class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin');
    }
    public function thembaiviet()
    {
        return view('them-bai-viet');
    }
    public function thembaivietPost(Request $request)
    {
        if ($request->input('submit')) {
            $post_model = new post_model();
            $post_model->title = $request->input('title');
            $post_model->content = $request->input('content');
            $post_model->description = $request->input('description');
            $post_model->tag = $request->input('tag');
            $post_model->author = $request->input('author');
            $post_model->save();
            return Redirect::back();
        }
    }
    public function danhsachbaiviet()
    {
        $posts = post_model::orderBy('id', 'desc')->paginate(5);
        return view('danh-sach-bai-viet', ['posts' => $posts]);
    }
    public function xoabaiviet($id)
    {
        post_model::where('id',$id)->delete();

        return Redirect::back();
    }
}
