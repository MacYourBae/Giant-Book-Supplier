<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    public function publisherindex(){
        $categories = Category::all();
        $publishers = Publisher::all();
        return view('publisher.publisher', compact('categories', 'publishers'));
    }

    public function publisherdetail($id){
        $categories = Category::all();
        $publisher = Publisher::find($id);
        return view('publisher.publisherdetail', compact('categories', 'publisher'));
    }
}
