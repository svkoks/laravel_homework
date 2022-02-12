<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index() 
    {
        $model= new News();
        $news = $model->getNews();
        
        return view('news.index')->with('newsList', $news);
    }

    public function show($id) 
    {
        $model= new News();
        $news = $model->getNewsById($id);
        
        return view('news.oneNews')
        ->with('news', $news);
    }
}