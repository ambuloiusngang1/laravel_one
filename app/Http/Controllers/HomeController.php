<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;


class HomeController extends Controller
{
    public function index() {

        $categories = Category::all();
        $posts = Post::when(request('category_id'), function ($param) {

           $param->where('category_id', request('category_id'));

        })->latest()->get();

        return view('index', compact('categories', 'posts'));
    }
}
