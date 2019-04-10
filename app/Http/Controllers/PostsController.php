<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;


class PostsController extends Controller
{
	/**
	*Pobieramy listę postów
	**/
    public function index(){
    	$posts = Post::latest()->get();
    	return view('posts.index')->with('posts', $posts);
    }

    /**
    *Metoda pokazująca jeden post
    **/
    public function show($id){
    	$post = Post::find($id);
    	return view('posts.show')->with('posts', $post);
    }
}
