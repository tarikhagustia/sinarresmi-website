<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('news', [
            'news' => News::paginate(12)
        ]);
    }

    public function show($slug)
    {
        $news = News::where('slug', $slug)->firstOrFail();
        
        return view('news_detail', compact('news'));
    }
}
