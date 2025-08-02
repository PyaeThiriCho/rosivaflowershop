@extends('frontend.layout')

@section('content')
    <!-- Categories Header -->
    <section class="categories-header py-5" style="background: var(--gradient-primary);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1 class="text-white mb-3">All Flower Categories</h1>
                    <p class="text-white-50 mb-0">Browse our complete collection of flower categories</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="{{ route('homepage') }}" class="btn btn-light">
                        <i class="fas fa-arrow-left me-2"></i>Back to Home
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories Grid -->
    <section class="categories-grid py-5">
        <div class="container">
            @if($categories->count() > 0)
                <div class="row g-4">
                    @foreach($categories as $category)
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="category-card">
                                <div class="category-header">
                                    <h3 class="category-title">{{ $category->name }}</h3>
                                    <p class="category-count">{{ $category->flowers->count() }} flowers</p>
                                </div>
                                <div class="category-flowers">
                                    @if($category->flowers->count() > 0)
                                        <div class="row g-2">
                                            @foreach($category->flowers->take(4) as $flower)
                                                <div class="col-6">
                                                    <div class="mini-flower-card">
                                                        @if($flower->image)
                                                           <img src="https://images.unsplash.com/photo-1563241527-3004b7be0ffd?w=150&h=100&fit=crop" alt="{{ $flower->name }}" class="img-fluid">
                                                            {{-- <img src="{{ asset($flower->image) }}" alt="{{ $flower->name }}" class="img-fluid"> --}}
                                                        @else
                                                            <img src="https://images.unsplash.com/photo-1563241527-3004b7be0ffd?w=150&h=100&fit=crop" alt="{{ $flower->name }}" class="img-fluid">
                                                        @endif
                                                        <div class="mini-flower-info">
                                                            <h6>{{ $flower->name }}</h6>
                                                            <p>{{ number_format($flower->price) }} MMK</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    @else
                                        <div class="no-flowers">
                                            <i class="fas fa-seedling text-muted"></i>
                                            <p class="text-muted">No flowers in this category yet</p>
                                        </div>
                                    @endif
                                </div>
                                <div class="category-footer">
                                    <a href="{{ route('category.detail', $category->id) }}" class="btn btn-primary">
                                        View All {{ $category->name }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="text-center py-5">
                    <i class="fas fa-flower fa-3x text-muted mb-3"></i>
                    <h3 class="text-muted">No categories found</h3>
                    <p class="text-muted">We're working on adding categories to our collection.</p>
                </div>
            @endif
        </div>
    </section>
@endsection
