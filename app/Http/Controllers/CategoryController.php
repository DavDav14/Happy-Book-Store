<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function getCategory(Category $category){
        return view ('category',[
            'title' => $category->category,
            'books' => $category->book,
            'category' => $category->category
        ]);
    }
}
