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
}
