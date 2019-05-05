<?php

namespace App\Http\Controllers;
use App\Comment;
//use Illuminate\Http\Request;

use Request;
use App\Http\Requests\CreateCommentRequest;
use App\Post;
//use App\Comment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class CommentsController extends Controller
{
    /**
    *Metoda pokazująca komentarze dla id_post
    **/
    public function show($id_post){
    	$comments = Comment::find($id_post);
        
    	return view('posts.show', compact('posts', 'users'));
    }

    /**
    *Tworzenie komentarza
    **/
    public function create($id){
        $users = Auth::user();
        
        return view('posts.create_comment', compact('users', 'id'));
    }

    /**
    *Zapisywanie komentarza
    **/
    public function store(CreateCommentRequest $request){
        Comment::create($request->all());
        Auth::user();
        return redirect('/');
    }
}
