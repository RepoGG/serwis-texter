<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TexterSearch extends Controller
{
    function search(){
    	return view('posts.texter_search');
    }
}
