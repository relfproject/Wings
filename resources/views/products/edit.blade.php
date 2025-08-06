@extends('layouts.crud')

@section('content')
    <h1 class="mb-4">Edit Produk</h1>

    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Nama Produk</label>
            <input type="text" name="name" class="form-control" value="{{ $product->name }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <textarea name="description" class="form-control" rows="3">{{ $product->description }}</textarea>
        </div>

        <div class="mb-3">
            <label for="brand_id" class="form-label">Pilih Brand</label>
            <select name="brand_id" class="form-select" required>
                <option value="">-- Pilih Brand --</option>
                @foreach ($brands as $brand)
                    <option value="{{ $brand->id }}" {{ $brand->id == $product->brand_id ? 'selected' : '' }}>
                        {{ $brand->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Gambar Sekarang</label><br>
            @if ($product->image)
                <img src="{{ asset('storage/' . $product->image) }}" width="120" class="mb-2">
            @else
                <p class="text-muted">Tidak ada gambar</p>
            @endif
            <input type="file" name="image" class="form-control mt-2">
            <small class="text-muted">Biarkan kosong jika tidak ingin mengubah gambar.</small>
        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection
