<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Video;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function index()
    {
        $data['article'] = Article::first();
        $data['video'] = Video::first();
        return view('welcome', $data);
    }

    public function detailArticle(Article $article)
    {
        return view('detail-article', ['article' => $article]);
    }
}
