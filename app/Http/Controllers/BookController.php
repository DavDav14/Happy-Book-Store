<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index(){
        return view('home',[
            'title' => 'Home',
            'books' => Book::all()
        ]);
    }
}
