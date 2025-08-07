@extends('layouts.app')

@section('content')
    <div class="container">

        {{-- Nama Brand --}}
        <div class="text-center my-4">
            <h2 class="fw-bold">{{ $brand->name }}</h2> {{-- Pastikan variabel $brand dikirim dari controller --}}
        </div>

        {{-- Daftar Produk --}}
        <div class="row">
            @forelse($products as $product)
                <div class="col-md-3 col-sm-6 mb-4"> {{-- 4 kolom di desktop, 2 di mobile --}}
                    <div class="card h-100 shadow-sm border-0 rounded-4 text-center">
                        {{-- Gambar produk --}}
                        @if($product->image)
                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                                 class="card-img-top p-3"
                                 style="height: 200px; object-fit: contain;">
                        @else
                            <img src="https://via.placeholder.com/200x200?text=No+Image"
                                 class="card-img-top p-3"
                                 style="height: 200px; object-fit: contain;">
                        @endif

                        <div class="card-body">
                            <h6 class="card-title mb-1 fw-bold">{{ $product->name }}</h6>
                            <p class="card-text text-muted small">{{ Str::limit($product->description, 80) }}</p>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-muted">Tidak ada produk untuk brand ini.</p>
            @endforelse
        </div>

        {{-- Tombol kembali --}}
        <div class="text-center mt-4">
            <a href="{{ url()->previous() }}" class="btn btn-outline-secondary">← Kembali</a>
        </div>

    </div>
@endsection
