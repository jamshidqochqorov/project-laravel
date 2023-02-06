<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Tag;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $articles = Article::orderBy('created_at','desc')->paginate(6);
        $tags = Tag::all()->take(6);
        return view('app.home',compact('articles','tags'));
    }
}
