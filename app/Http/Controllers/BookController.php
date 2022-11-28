<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function bookindex(){
        $categories = Category::all();
        $books = Book::all();
        return view('book.book', compact('categories', 'books'));
    }

    public function bookdetail($id){
        $categories = Category::all();
        $book = Book::find($id);
        return view('book.bookdetail', compact('categories', 'book'));
    }

    public function contactindex(){
        $categories = Category::all();
        return view('contact.contact', compact('categories'));
    }
}
