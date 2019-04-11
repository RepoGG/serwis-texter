<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
	/**
	*Pobieramy listę postów
	**/
    public function index(){
    	$posts = Post::latest()->get();
        $users = Auth::user();
    	return view('posts.index', compact('posts', 'users'));
    }

    /**
    *Metoda pokazująca jeden post
    **/
    public function show($id){
    	$posts = Post::find($id);
        $users = Auth::user();
    	return view('posts.show', compact('posts', 'users'));
    }
}
