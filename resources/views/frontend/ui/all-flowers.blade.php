@extends('frontend.layout')

@section('content')
    <!-- Flowers Header -->
    <section class="flowers-header py-5" style="background: var(--gradient-primary);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1 class="text-white mb-3">All Flowers</h1>
                    <p class="text-white-50 mb-0">Browse our complete collection of beautiful flowers</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="{{ route('homepage') }}" class="btn btn-light">
                        <i class="fas fa-arrow-left me-2"></i>Back to Home
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Flowers Grid -->
    <section class="flowers-grid py-5">
        <div class="container">
            @if(isset($flowers) && $flowers->count() > 0)
                <div class="row g-4">
                    @foreach($flowers as $flower)
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="flower-card">
                                <div class="flower-image">
                                    @if($flower->image)
                                        <img src="{{ asset($flower->image) }}" alt="{{ $flower->name }}" class="img-fluid">
                                    @else
                                        <img src="https://images.unsplash.com/photo-1563241527-3004b7be0ffd?w=300&h=250&fit=crop" alt="{{ $flower->name }}" class="img-fluid">
                                    @endif
                                    <div class="flower-overlay">
                                        <button class="flower-view-btn" onclick="showFlowerDetails({{ $flower->id }})">
                                            <i class="fas fa-eye me-2"></i>View Details
                                        </button>
                                    </div>
                                </div>
                                <div class="flower-info">
                                    <h5 class="flower-title">{{ $flower->name }}</h5>
                                    <p class="flower-category text-muted">{{ $flower->category->name ?? 'N/A' }}</p>
                                    <p class="flower-price">{{ number_format($flower->price) }} MMK</p>
                                    <button class="add-to-cart-btn"
                                            data-id="{{ $flower->id }}"
                                            data-name="{{ $flower->name }}"
                                            data-price="{{ $flower->price }}"
                                            data-image="{{ $flower->image ? asset($flower->image) : 'https://images.unsplash.com/photo-1563241527-3004b7be0ffd?w=300&h=250&fit=crop' }}">
                                        <i class="fas fa-shopping-cart me-2"></i>Add to Cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Pagination or Load More -->
                <div class="text-center mt-5">
                    <p class="text-muted">Showing {{ $flowers->count() }} flowers</p>
                </div>
            @else
                <!-- Empty State -->
                <div class="text-center py-5">
                    <i class="fas fa-seedling fa-3x text-muted mb-3"></i>
                    <h3 class="text-muted">No Flowers Available</h3>
                    <p class="text-muted">We're currently preparing our beautiful flower collection. Please check back soon!</p>
                    <div class="mt-4">
                        <a href="{{ route('homepage') }}" class="btn btn-primary me-3">
                            <i class="fas fa-home me-2"></i>Back to Home
                        </a>
                        <a href="{{ route('admin.login') }}" class="btn btn-outline-primary" target="_blank">
                            <i class="fas fa-user-shield me-2"></i>Admin Login
                        </a>
                    </div>
                </div>
            @endif
        </div>
    </section>

    <!-- Flower Detail Modal -->
    <div class="modal fade" id="flowerModal" tabindex="-1" aria-labelledby="flowerModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="flowerModalLabel">
                        <i class="fas fa-seedling me-2"></i>Flower Details
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="flowerModalBody">
                    <!-- Flower details will be dynamically added here -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="addToCartBtn">Add to Cart</button>
                </div>
            </div>
        </div>
    </div>

    <script>
    function showFlowerDetails(flowerId) {
        // Get flower data from the page
        const flowerCards = document.querySelectorAll('.flower-card');
        let flowerData = null;

        flowerCards.forEach(card => {
            const addToCartBtn = card.querySelector('.add-to-cart-btn');
            if (addToCartBtn && addToCartBtn.getAttribute('data-id') == flowerId) {
                const title = card.querySelector('.flower-title').textContent;
                const category = card.querySelector('.flower-category').textContent;
                const price = card.querySelector('.flower-price').textContent;
                const image = card.querySelector('.flower-image img').src;
                const dataId = addToCartBtn.getAttribute('data-id');
                const dataName = addToCartBtn.getAttribute('data-name');
                const dataPrice = addToCartBtn.getAttribute('data-price');
                const dataImage = addToCartBtn.getAttribute('data-image');

                flowerData = {
                    id: dataId,
                    name: dataName,
                    category: category,
                    price: dataPrice,
                    image: dataImage
                };
            }
        });

        if (flowerData) {
            const modalBody = document.getElementById('flowerModalBody');
            modalBody.innerHTML = `
                <div class="row">
                    <div class="col-md-6">
                        <img src="${flowerData.image}" class="img-fluid rounded" alt="${flowerData.name}" style="max-height: 300px; object-fit: cover;">
                    </div>
                    <div class="col-md-6">
                        <h4>${flowerData.name}</h4>
                        <p class="text-muted">Category: ${flowerData.category}</p>
                        <p class="h5 text-primary">${parseInt(flowerData.price).toLocaleString()} MMK</p>
                        <p>Beautiful flower arrangement perfect for any occasion. This stunning flower will brighten up any room and make a perfect gift for your loved ones.</p>
                        <div class="mt-3">
                            <small class="text-muted">
                                <i class="fas fa-info-circle me-1"></i>
                                Fresh flowers, carefully arranged and delivered with care.
                            </small>
                        </div>
                    </div>
                </div>
            `;

            // Store flower data for add to cart functionality
            window.currentFlower = flowerData;

            // Show the modal
            const modal = new bootstrap.Modal(document.getElementById('flowerModal'));
            modal.show();
        }
    }

    // Add to cart functionality for modal
    document.addEventListener('DOMContentLoaded', function() {
        const addToCartBtn = document.getElementById('addToCartBtn');
        if (addToCartBtn) {
            addToCartBtn.addEventListener('click', function() {
                if (window.currentFlower) {
                    // Trigger the cart add functionality
                    const cartBtn = document.querySelector(`[data-id="${window.currentFlower.id}"]`);
                    if (cartBtn) {
                        cartBtn.click();
                    }
                    const modal = bootstrap.Modal.getInstance(document.getElementById('flowerModal'));
                    modal.hide();
                }
            });
        }
    });
    </script>
@endsection
