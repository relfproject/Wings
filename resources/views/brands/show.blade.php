@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">{{ $brand->name }}</h1>

        {{-- Tampilkan logo brand --}}
        @if($brand->logo_path)
            <img src="{{ asset('storage/' . $brand->logo_path) }}" alt="{{ $brand->name }}" class="rounded-circle" width="120" height="120" style="object-fit: cover;">
        @endif


        <h4>Daftar Produk:</h4>
        <div class="row">
            @forelse($products as $product)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        {{-- Tampilkan gambar produk --}}
                        @if($product->image)
                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="card-img-top"
                                style="height: 200px; object-fit: cover;">

                        @else
                            <img src="https://via.placeholder.com/300x200?text=No+Image" alt="No image" class="card-img-top"
                                style="height: 200px; object-fit: cover;">
                        @endif

                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ Str::limit($product->description, 100) }}</p>
                        </div>
                        <div class="card-footer text-end">
                            <a href="{{ route('products.show', $product->id) }}" class="btn btn-sm btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
            @empty
                <p>Tidak ada produk untuk brand ini.</p>
            @endforelse
        </div>

        <a href="{{ url()->previous() }}" class="btn btn-secondary mt-3">Kembali</a>
    </div>
@endsection