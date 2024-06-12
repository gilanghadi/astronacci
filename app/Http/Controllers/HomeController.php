<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Video;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = [
            'articles' => '',
            'videos' => ''
        ];
        switch (auth()->user()->membership_type) {
            case 'A':
                $data['articles'] = Article::limit(3)->get();
                $data['videos'] = Video::limit(3)->get();
                break;
            case 'B':
                $data['articles'] = Article::limit(10)->get();
                $data['videos'] = Video::limit(10)->get();
                break;
            case 'C':
                $data['articles'] = Article::all();
                $data['videos'] = Video::all();
                break;
        }
        return view('home', $data);
    }
}
