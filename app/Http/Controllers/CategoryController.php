<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function allCategories()
    {
        $model= new Category();
        $categories = $model->getCategories();
        
        return view('news.categories')->with('categories', $categories);
    }

    public function oneNewsByCategories()
    {
        $model= new Category();
        $categories = $model->getNewsByCategory();

        return view('news.oneCategory')->with('categories', $categories);
    }

    public function oneCategory($id)
    {
        $model= new Category();
        $categories = $model->getCategoryById($id);

        return view('news.oneCategory')->with('category', $categories);
    }
}
