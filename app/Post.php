<?php

namespace App;
use App\Http\Controllers\Auth;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
    	'title',
    	'description',
    	'author',
    	'url' ,
    	'category'
    	
    ];
}
