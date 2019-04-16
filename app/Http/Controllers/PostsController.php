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
        $users = Auth::user();
        return view('posts.create')->with('users', $users);
    }

    /**
    *Zapisywanie postu
    **/
    public function store(CreatePostRequest $request){
        Post::create($request->all());
        return redirect('/');
    }

    /**
    *Formularz edycji postów
    **/
    public function edit($id){
        $post = Post::findOrFail($id);
        $users = Auth::user();
        return view('posts.edit', compact('post', 'users'));
    }

    /**
    *Aktualizacja postu
    **/
    public function update($id, CreatePostRequest $request){
        $post = Post::findOrFail($id);
        $post->update($request->all());
        return redirect('posts');
    }

    
}
