<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $blogs = new Blog;
        $blogs = $blogs->latest()->get();

        return view('welcome', compact('blogs'));
    }
}
