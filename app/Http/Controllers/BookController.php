<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        return 'All books are listed here';
    }

    public function show($title)
    {
        return 'The title of the book is ' . $title;
    }
}
