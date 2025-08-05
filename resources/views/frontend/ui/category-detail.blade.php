@extends('frontend.layout')

@section('content')
    <!-- Category Header -->
    <section class="category-header py-5" style="background: var(--gradient-primary);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1 class="text-white mb-3">{{ $category->name }}</h1>
                    <p class="text-white-50 mb-0">Discover our beautiful collection of {{ $category->name }}</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="{{ route('categories.all') }}" class="btn btn-light">
                        <i class="fas fa-arrow-left me-2"></i>Back to Categories
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Flowers Section -->
<section class="flowers-section py-5">
    <div class="container">
        @if($flowers->count() > 0)
            <div class="row g-4">
                @foreach($flowers as $flower)
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="flower-card shadow-sm border rounded p-2 h-100">
                            <div class="flower-image position-relative text-center">
                                @if($flower->image)
                                    <img src="{{ asset($flower->image) }}" 
                                            alt="{{ $flower->name }}" 
                                            class="img-fluid rounded"
                                            style="width: 220px; height: 220px; object-fit: cover;">
                                @else
                                    <img src="https://images.unsplash.com/photo-1563241527-3004b7be0ffd?w=300&h=250&fit=crop" 
                                            alt="{{ $flower->name }}" 
                                            class="img-fluid rounded"
                                            style="width: 220px; height: 220px; object-fit: cover;">
                                @endif
                                <div class="flower-overlay position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center" style="background: rgba(0, 0, 0, 0.4); opacity: 0; transition: 0.3s;">
                                    <button class="flower-view-btn btn btn-light" onclick="showFlowerDetails({{ $flower->id }})">
                                        <i class="fas fa-eye me-2"></i>View Details
                                    </button>
                                </div>
                            </div>
                            <div class="flower-info text-center mt-3">
                                <h5 class="flower-title">{{ $flower->name }}</h5>
                                <p class="flower-price text-primary fw-bold">{{ number_format($flower->price) }} MMK</p>
                                <button class="add-to-cart-btn btn btn-outline-primary mt-2"
                                        onclick="addToCart({{ $flower->id }}, '{{ $flower->name }}', {{ $flower->price }}, '{{ $flower->image }}')">
                                    <i class="fas fa-shopping-cart me-2"></i>Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="text-center py-5">
                <i class="fas fa-flower fa-3x text-muted mb-3"></i>
                <h3 class="text-muted">No flowers found in this category</h3>
                <p class="text-muted">We're working on adding more flowers to this category.</p>
                <a href="{{ route('categories.all') }}" class="btn btn-primary">
                    <i class="fas fa-arrow-left me-2"></i>Browse Other Categories
                </a>
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
                        <i class="fas fa-flower me-2"></i>Flower Details
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
            if (addToCartBtn && addToCartBtn.getAttribute('onclick').includes(flowerId)) {
                const title = card.querySelector('.flower-title').textContent;
                const price = card.querySelector('.flower-price').textContent;
                const image = card.querySelector('.flower-image img').src;

                flowerData = {
                    id: flowerId,
                    name: title,
                    price: price,
                    image: image
                };
            }
        });

        if (flowerData) {
            const modalBody = document.getElementById('flowerModalBody');
            modalBody.innerHTML = `
                <div class="row">
                    <div class="col-md-6">
                        <img src="${flowerData.image}" class="img-fluid rounded" alt="${flowerData.name}">
                    </div>
                    <div class="col-md-6">
                        <h4>${flowerData.name}</h4>
                        <p class="h5 text-primary">${flowerData.price}</p>
                        <p>Beautiful flower arrangement perfect for any occasion.</p>
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

    function addToCart(id, name, price, image) {
        // Add to cart logic here
        alert(`Added ${name} to cart!`);
        // You can implement your cart functionality here
    }

    // Add to cart functionality for modal
    document.getElementById('addToCartBtn').addEventListener('click', function() {
        if (window.currentFlower) {
            addToCart(window.currentFlower.id, window.currentFlower.name, window.currentFlower.price, window.currentFlower.image);
            const modal = bootstrap.Modal.getInstance(document.getElementById('flowerModal'));
            modal.hide();
        }
    });
    </script>
@endsection
