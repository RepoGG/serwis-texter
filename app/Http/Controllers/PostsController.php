<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Requests\CreatePostRequest;
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

    /**
    * Tworzenie postu
    **/
    public function create(){
        return view('posts.create');
    }

    /**
    *Zapisywanie postu
    **/
    public function store(CreatePostRequest $request){
        Post::create($request->all());
        return redirect('/');
    }
}
