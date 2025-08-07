@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <h1 class="mb-4 text-center">Brand Kategori: {{ $category->name }}</h1>

        <div class="brand-grid d-flex flex-wrap justify-content-center gap-4">
            @forelse($category->brands as $brand)
                <div class="brand-item text-center">
                    <a href="{{ route('brands.show', $brand->slug) }}">
                        <img src="{{ asset('storage/' . $brand->logo_path) }}" alt="{{ $brand->name }}" width="120" height="120"
                            style="object-fit: cover;">
                        <p class="mt-2">{{ $brand->name }}</p>
                    </a>
                </div>
            @empty
                <p class="text-center">Belum ada brand di kategori ini.</p>
            @endforelse
        </div>

        {{-- Tombol kembali --}}
        <div class="mt-5 text-center">
            <a href="{{ route('categories.index') }}" class="btn btn-secondary">← Kembali ke Semua Kategori</a>
        </div>
    </div>
@endsection