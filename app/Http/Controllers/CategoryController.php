<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    // CategoryController.php
    public function index()
    {
        $categories = Category::with('brands')->get();
        return view('categories.index', compact('categories')); // untuk semua kategori
    }

    public function show($slug)
    {
        $category = Category::where('slug', $slug)->with('brands')->firstOrFail();
        $brands = $category->brands;
        return view('categories.show', compact('category', 'brands'));
    }


}
