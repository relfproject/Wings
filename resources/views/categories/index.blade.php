@extends('layouts.app')

@section('content')
    <div class="category-grid">
        @foreach($categories as $category)
            <a href="{{ route('categories.show', $category->slug) }}" class="category-card">
                <img src="{{ $category->image ? asset('storage/' . $category->image) : asset('images/default.png') }}"
                    class="card-img-top" alt="{{ $category->name }}">

                <h3>{{ $category->name }}</h3>
            </a>
        @endforeach
    </div>
@endsection