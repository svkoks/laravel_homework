<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function allCategories()
    {
        $categories = $this->getCategories();
        return view('news.categories')->with('categories', $categories);
    }

    /*public function oneNewsByCategories()
    {
        $categories = $this->getNewsByCategory();
        return view('news.oneCategory')->with('categories', $categories);
    }*/

    public function oneCategory($id)
    {
        $categories = $this->getCategoryById($id);
        return view('news.oneCategory')->with('item', $categories);
    }
}
