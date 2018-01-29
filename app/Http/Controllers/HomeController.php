<?php

namespace App\Http\Controllers;
use App\Post;
use App\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
    	$posts=Post::paginate(24);
    	return view('home.index',compact('posts'));
    }
    public function detail($slugUrl){
    	$post=Post::Where('slug',$slugUrl)->first();
    	if(!$post){
    		dd('not-found');
    	}
    	return view('home.detail',compact('post'));
    }
    public function cate($cateSlug){
        $cate=Category::Where('slug',$cateSlug)->first();
        $posts=Post::Where('cate_id',$cate->id)->paginate(24);
        if(!$cate){
            dd('not-found');
        }
        return view('home.cate-detail',compact('posts','cate'));
    }
}
