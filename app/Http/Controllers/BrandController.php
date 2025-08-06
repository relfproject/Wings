<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Brand; // ✅ Tambahkan ini

class BrandController extends Controller
{
    public function index()
    {
        $categories = Category::with('brands')->get();
        return view('brands.index', compact('categories'));
    }

    public function showByCategory($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $brands = $category->brands;

        return view('brands.by-category', compact('category', 'brands'));
    }

    public function show($slug)
    {
        $brand = Brand::where('slug', $slug)->firstOrFail();
        $products = $brand->products()->latest()->get();

        return view('brands.show', compact('brand', 'products'));
    }

}
