<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index() {
        $news = $this->getNews();
        return view('news.index')->with('news', $news);
    }

    public function show($id) {
        $news = $this->getNewsById($id);
        return view('news.oneNews')->with('item', $news);
    }
}