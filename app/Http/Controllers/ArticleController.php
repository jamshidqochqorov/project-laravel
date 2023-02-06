<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Tag;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
        $tags = Tag::all()->take(6);
        $articles = Article::paginate(9);
        return view('app.article.index',compact('articles','tags'));
    }
}
