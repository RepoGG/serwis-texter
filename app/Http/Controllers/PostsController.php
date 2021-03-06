<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Requests\CreatePostRequest;
use App\Post;
use App\Comment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;


class PostsController extends Controller
{
    public function _construct(){
        $this->middleware('auth');
    }


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
        $comments = Comment::get()->all();
    	return view('posts.show', compact('posts', 'users', 'comments'));
    }

    /**
    * Tworzenie postu
    **/
    public function create(){
        if(Auth::user() !== null){
            $users = Auth::user();
        return view('posts.create')->with('users', $users);
    }else{
        return redirect('/login');
    }
        
    }

    /**
    *Zapisywanie postu
    **/
    public function store(CreatePostRequest $request){
        Post::create($request->all());
        Auth::user();
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

    /**
    * usuwanie posta
    **/
    public function destroy($id){
        //Post::delete($id);
        //DB::table('posts')->where('id', '===', $id)->delete();
        Post::destroy($id);
        return redirect('/posts');
    }

    /**
    * Szukanie postów
    **/
    public function search(){
       $q = Input::get('q');
        return view('posts.search');
    }

    public function searchaction(){
        $q = Input::get('q');
        if($q != ''){
            $posts = Post::where('title', 'LIKE', '%' .$q . '%')
                            ->orWhere('description', 'LIKE', '%' .$q . '%')
                            ->orWhere('author', 'LIKE', '%' .$q . '%')
                            ->get();
                if(count($posts) > 0)
                    return view('posts.search')->withDetails($posts)->withQuery($q);

        } 
    return view('posts.search')->withMessage('Nie znaleziono postów!');


    }

    /**
    *Tworzenie komentarza
    **/
    public function create_comment($id){
        $users = Auth::user();
        $posts = Post::findOrFail($id);
        return view('posts.create_comment', compact('users', 'posts'));
    }
}

