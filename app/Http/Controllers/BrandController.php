<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Brand;

class BrandController extends Controller
{
    // Tampilkan semua kategori beserta brand-nya
    public function index()
    {
        $categories = Category::with('brands')->get();
        return view('brands.index', compact('categories'));
    }

    // Tampilkan semua brand berdasarkan kategori (digunakan pada halaman kategori)
    public function showByCategory($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $brands = $category->brands;

        return view('brands.by-category', compact('category', 'brands'));
    }

    // Tampilkan detail brand dan produk-produknya
    public function show($slug)
    {
        $brand = Brand::where('slug', $slug)->firstOrFail();
        $products = $brand->products()->latest()->get();

        return view('brands.show', compact('brand', 'products'));
    }
}
