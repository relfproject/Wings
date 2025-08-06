@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $product->name }}</h1>
    <p><strong>Brand:</strong> {{ $product->brand->name }}</p>
    <p><strong>Deskripsi:</strong> {{ $product->description }}</p>

    <a href="{{ route('products.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
