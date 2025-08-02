@extends('frontend.layout')

@section('content')
<!-- Cart section-->
<section class="py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="row">
            <div class="col-12">
                <h1 class="display-5 fw-bolder mb-4">Shopping Cart</h1>

                <!-- Cart Items Container -->
                <div id="cartItemsContainer">
                    <!-- Cart items will be dynamically loaded here -->
                </div>

                <!-- Empty Cart Message -->
                <div id="emptyCartMessage" class="text-center py-5" style="display: none;">
                    <i class="fas fa-shopping-cart fa-3x text-muted mb-3"></i>
                    <h3 class="text-muted">Your cart is empty</h3>
                    <p class="text-muted">Add some beautiful flowers to your cart!</p>
                    <a href="{{ route('homepage') }}" class="btn btn-primary">
                        <i class="fas fa-home me-2"></i>Continue Shopping
                    </a>
                </div>

                <!-- Cart Summary -->
                <div id="cartSummary" class="mt-4" style="display: none;">
                    <div class="row">
                        <div class="col-md-6 offset-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Cart Summary</h5>
                                    <div class="d-flex justify-content-between mb-2">
                                        <span>Subtotal:</span>
                                        <span id="cartSubtotal">0 MMK</span>
                                    </div>
                                    <div class="d-flex justify-content-between mb-2">
                                        <span>Tax (5%):</span>
                                        <span id="cartTax">0 MMK</span>
                                    </div>
                                    <hr>
                                    <div class="d-flex justify-content-between mb-3">
                                        <strong>Total:</strong>
                                        <strong id="cartTotal">0 MMK</strong>
                                    </div>
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-primary" id="checkoutBtn">
                                            <i class="fas fa-credit-card me-2"></i>Proceed to Checkout
                                        </button>
                                        <button class="btn btn-outline-secondary" onclick="cart.clearCart()">
                                            <i class="fas fa-trash me-2"></i>Clear Cart
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Related Products Section -->
<section class="py-5 bg-light">
    <div class="container px-4 px-lg-5">
        <h2 class="fw-bolder mb-4">You might also like</h2>
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            @if(isset($categories) && $categories->count() > 0)
                @foreach($categories->take(4) as $category)
                    @if($category->flowers->count() > 0)
                        @foreach($category->flowers->take(1) as $flower)
                            <div class="col mb-5">
                                <div class="card h-100 product-card">
                                    <!-- Product image-->
                                    @if($flower->image)
                                        <img class="card-img-top" src="{{ asset($flower->image) }}" alt="{{ $flower->name }}" />
                                    @else
                                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="{{ $flower->name }}" />
                                    @endif
                                    <!-- Product details-->
                                    <div class="card-body p-4">
                                        <div class="text-center">
                                            <!-- Product name-->
                                            <h5 class="fw-bolder">{{ $flower->name }}</h5>
                                            <!-- Product price-->
                                            <span class="text-primary fw-bold">{{ number_format($flower->price) }} MMK</span>
                                        </div>
                                    </div>
                                    <!-- Product actions-->
                                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                        <div class="text-center">
                                            <button class="btn btn-outline-dark mt-auto add-to-cart-btn"
                                                    data-id="{{ $flower->id }}"
                                                    data-name="{{ $flower->name }}"
                                                    data-price="{{ $flower->price }}"
                                                    data-image="{{ $flower->image ? asset($flower->image) : 'https://dummyimage.com/450x300/dee2e6/6c757d.jpg' }}">
                                                <i class="fas fa-cart-plus me-2"></i>Add to cart
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                @endforeach
            @else
                <!-- Fallback products -->
                <div class="col mb-5">
                    <div class="card h-100 product-card">
                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="Beautiful Roses" />
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h5 class="fw-bolder">Beautiful Roses</h5>
                                <span class="text-primary fw-bold">25,000 MMK</span>
                            </div>
                        </div>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <button class="btn btn-outline-dark mt-auto add-to-cart-btn"
                                        data-id="fallback-1"
                                        data-name="Beautiful Roses"
                                        data-price="25000"
                                        data-image="https://dummyimage.com/450x300/dee2e6/6c757d.jpg">
                                    <i class="fas fa-cart-plus me-2"></i>Add to cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>

<script>
// Custom cart page functionality
document.addEventListener('DOMContentLoaded', function() {
    // Render cart items on page load
    if (typeof cart !== 'undefined') {
        renderCartPage();
    }

    function renderCartPage() {
        const cartItemsContainer = document.getElementById('cartItemsContainer');
        const emptyCartMessage = document.getElementById('emptyCartMessage');
        const cartSummary = document.getElementById('cartSummary');

        if (cart.items.length === 0) {
            cartItemsContainer.innerHTML = '';
            emptyCartMessage.style.display = 'block';
            cartSummary.style.display = 'none';
            return;
        }

        emptyCartMessage.style.display = 'none';
        cartSummary.style.display = 'block';

        let total = 0;
        const cartHTML = cart.items.map(item => {
            const itemTotal = item.price * item.quantity;
            total += itemTotal;

            return `
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-md-2">
                                <img src="${item.image}" alt="${item.name}" class="img-fluid rounded" style="width: 80px; height: 80px; object-fit: cover;" onerror="this.src='/frontend_assets/images/default-flower.jpg'">
                            </div>
                            <div class="col-md-4">
                                <h5 class="mb-1">${item.name}</h5>
                                <p class="text-muted mb-0">${item.price?.toFixed(0)} MMK each</p>
                            </div>
                            <div class="col-md-3">
                                <div class="input-group">
                                    <button class="btn btn-outline-secondary" type="button" onclick="cart.updateQuantity('${item.id}', ${item.quantity - 1})">-</button>
                                    <input type="number" class="form-control text-center" value="${item.quantity}" min="1"
                                           onchange="cart.updateQuantity('${item.id}', parseInt(this.value))">
                                    <button class="btn btn-outline-secondary" type="button" onclick="cart.updateQuantity('${item.id}', ${item.quantity + 1})">+</button>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <p class="mb-0 fw-bold">${itemTotal?.toFixed(0)} MMK</p>
                            </div>
                            <div class="col-md-1">
                                <button class="btn btn-sm btn-outline-danger" onclick="cart.removeFromCart('${item.id}')">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            `;
        }).join('');

        cartItemsContainer.innerHTML = cartHTML;

        // Update summary
        const subtotal = total;
        const tax = subtotal * 0.05;
        const grandTotal = subtotal + tax;

        document.getElementById('cartSubtotal').textContent = `${subtotal?.toFixed(0)} MMK`;
        document.getElementById('cartTax').textContent = `${tax?.toFixed(0)} MMK`;
        document.getElementById('cartTotal').textContent = `${grandTotal?.toFixed(0)} MMK`;
    }

    // Override cart render method for this page
    if (typeof cart !== 'undefined') {
        const originalRenderCart = cart.renderCart;
        cart.renderCart = function() {
            originalRenderCart.call(this);
            renderCartPage();
        };
    }
});
</script>

@endsection
