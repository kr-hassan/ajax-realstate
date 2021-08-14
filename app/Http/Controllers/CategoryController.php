<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories=Category::whereStatus(1)->get();
        return view('category.index', compact('categories'));

    }
}
