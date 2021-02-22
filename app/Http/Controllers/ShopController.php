<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $books = Book::get();

        return view('shop.index', compact('books'));
    }
}
