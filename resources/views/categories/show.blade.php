@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <h1 class="mb-4 text-center">Brand Kategori: {{ $category->name }}</h1>

        <div class="brand-grid d-flex flex-wrap justify-content-center gap-4">
            @foreach($category->brands as $brand)
                <div class="brand-item text-center">
                    <a href="{{ route('brands.show', $brand->slug) }}">
                        <img src="{{ $brand->logo_path ? asset('storage/' . $brand->logo_path) : asset('images/default.png') }}"
                            alt="{{ $brand->name }}" width="120" height="120" style="object-fit: cover;">

                        <p class="mt-2">{{ $brand->name }}</p>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection