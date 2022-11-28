<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categoryindex($id){
        $categories = Category::all();
        $category = Category::find($id);
        return view('category.category', compact('categories', 'category'));
    }
}
