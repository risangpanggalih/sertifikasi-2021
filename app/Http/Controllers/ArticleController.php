<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        return view('content',[
            "title" => "Content",
            "content_article" => Article::all()
        ]);
    }

    public function show(Article $article)
    {
        return view('article',[
            "title" => "Article",
            "article" => $article
        ]);
    }
}
