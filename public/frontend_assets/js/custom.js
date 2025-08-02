// Shopping Cart System
class ShoppingCart {
    constructor() {
        this.items = JSON.parse(localStorage.getItem('cart')) || [];
        this.init();
    }

    init() {
        this.updateCartCount();
        this.bindEvents();
        this.renderCart();
    }

    bindEvents() {
        // Cart icon click - check if element exists
        const cartIcon = document.getElementById('cartIcon');
        if (cartIcon) {
            cartIcon.addEventListener('click', (e) => {
                e.preventDefault();
                this.openCartModal();
            });
        }

        // Add to cart buttons - use event delegation
        document.addEventListener('click', (e) => {
            if (e.target.classList.contains('add-to-cart-btn')) {
                this.addToCart(e.target);
            }
        });

        // Checkout button - check if element exists
        const checkoutBtn = document.getElementById('checkoutBtn');
        if (checkoutBtn) {
            checkoutBtn.addEventListener('click', () => {
                this.checkout();
            });
        }
    }

    addToCart(button) {
        const productId = button.getAttribute('data-id');
        const productName = button.getAttribute('data-name');
        const productPrice = parseFloat(button.getAttribute('data-price'));
        const productImage = button.getAttribute('data-image');

        // Validate required data
        if (!productId || !productName || !productPrice) {
            console.error('Missing required product data for cart');
            return;
        }

        // Check if item already exists in cart
        const existingItem = this.items.find(item => item.id === productId);

        if (existingItem) {
            existingItem.quantity += 1;
        } else {
            this.items.push({
                id: productId,
                name: productName,
                price: productPrice,
                image: productImage || '/frontend_assets/images/default-flower.jpg',
                quantity: 1
            });
        }

        // Save to localStorage
        localStorage.setItem('cart', JSON.stringify(this.items));

        // Update UI
        this.updateCartCount();
        this.renderCart();

        // Show success feedback
        this.showAddToCartFeedback(button);
    }

    showAddToCartFeedback(button) {
        const originalText = button.innerHTML;
        const originalClass = button.className;

        button.innerHTML = '<i class="fas fa-check me-2"></i>Added!';
        button.className = originalClass.replace('btn-dark', 'btn-success').replace('btn-primary', 'btn-success');

        setTimeout(() => {
            button.innerHTML = originalText;
            button.className = originalClass;
        }, 2000);
    }

    removeFromCart(productId) {
        this.items = this.items.filter(item => item.id !== productId);
        localStorage.setItem('cart', JSON.stringify(this.items));
        this.updateCartCount();
        this.renderCart();
    }

    updateQuantity(productId, newQuantity) {
        const item = this.items.find(item => item.id === productId);
        if (item) {
            if (newQuantity <= 0) {
                this.removeFromCart(productId);
            } else {
                item.quantity = newQuantity;
                localStorage.setItem('cart', JSON.stringify(this.items));
                this.updateCartCount();
                this.renderCart();
            }
        }
    }

    updateCartCount() {
        const cartCount = document.getElementById('cartCount');
        if (!cartCount) return;

        const totalItems = this.items.reduce((sum, item) => sum + item.quantity, 0);
        cartCount.textContent = totalItems;

        // Show/hide badge based on items
        if (totalItems > 0) {
            cartCount.style.display = 'block';
        } else {
            cartCount.style.display = 'none';
        }
    }

    renderCart() {
        const cartItems = document.getElementById('cartItems');
        const emptyCart = document.getElementById('emptyCart');
        const cartTotal = document.getElementById('cartTotal');

        if (!cartItems || !emptyCart || !cartTotal) return;

        if (this.items.length === 0) {
            cartItems.innerHTML = '';
            emptyCart.style.display = 'block';
            cartTotal.textContent = '0 MMK';
            return;
        }

        emptyCart.style.display = 'none';

        let total = 0;
        const cartHTML = this.items.map(item => {
            const itemTotal = item.price * item.quantity;
            total += itemTotal;

            return `
                <div class="cart-item mb-3 p-3 border rounded">
                    <div class="row align-items-center">
                        <div class="col-md-2">
                            <img src="${item.image}" alt="${item.name}" class="img-fluid rounded" style="width: 60px; height: 60px; object-fit: cover;" onerror="this.src='/frontend_assets/images/default-flower.jpg'">
                        </div>
                        <div class="col-md-4">
                            <h6 class="mb-1">${item.name}</h6>
                            <p class="text-muted mb-0">${item.price?.toFixed(0)} MMK</p>
                        </div>
                        <div class="col-md-3">
                            <div class="input-group input-group-sm">
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
            `;
        }).join('');

        cartItems.innerHTML = cartHTML;
        cartTotal.textContent = `${total?.toFixed(0)} MMK`;
    }

    openCartModal() {
        const modalElement = document.getElementById('cartModal');
        if (modalElement) {
            const modal = new bootstrap.Modal(modalElement);
            modal.show();
        }
    }

    checkout() {
        const checkoutBtn = document.getElementById('checkoutBtn');
        if (!checkoutBtn) return;

        // Show "Coming Soon" message
        const originalText = checkoutBtn.innerHTML;

        checkoutBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Processing...';
        checkoutBtn.disabled = true;

        setTimeout(() => {
            checkoutBtn.innerHTML = '<i class="fas fa-info-circle me-2"></i>Coming Soon!';
            checkoutBtn.className = 'btn btn-warning';

            setTimeout(() => {
                checkoutBtn.innerHTML = originalText;
                checkoutBtn.className = 'btn btn-primary';
                checkoutBtn.disabled = false;
            }, 3000);
        }, 1000);
    }

    clearCart() {
        this.items = [];
        localStorage.removeItem('cart');
        this.updateCartCount();
        this.renderCart();
    }
}

// Initialize cart when DOM is ready
let cart;
document.addEventListener('DOMContentLoaded', function() {
    cart = new ShoppingCart();
});

// Navbar scroll effect
window.addEventListener('scroll', function () {
    const navbar = document.querySelector('.navbar');
    if (navbar) {
        if (window.scrollY > 100) {
            navbar.style.background = 'rgba(255, 255, 255, 0.98)';
            navbar.style.boxShadow = '0 2px 20px rgba(0,0,0,0.1)';
        } else {
            navbar.style.background = 'rgba(255, 255, 255, 0.95)';
            navbar.style.boxShadow = '0 4px 20px rgba(0,0,0,0.1)';
        }
    }
});

// Smooth scrolling for navigation links
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
});

// Animation on scroll
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver(function (entries) {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
        }
    });
}, observerOptions);

// Observe all cards and sections for animation
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.product-card, .feature-card, .review-card').forEach(card => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(30px)';
        card.style.transition = 'all 0.6s ease-out';
        observer.observe(card);
    });
});

// Product card hover effects
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.product-card').forEach(card => {
        card.addEventListener('mouseenter', function () {
            this.style.transform = 'translateY(-15px) scale(1.02)';
        });

        card.addEventListener('mouseleave', function () {
            this.style.transform = 'translateY(0) scale(1)';
        });
    });
});

// Form submission
document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    if (form) {
        form.addEventListener('submit', function (e) {
            e.preventDefault();
            const submitBtn = this.querySelector('button[type="submit"]');
            if (submitBtn) {
                const originalText = submitBtn.innerHTML;

                submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Sending...';
                submitBtn.disabled = true;

                // Simulate form submission
                setTimeout(() => {
                    submitBtn.innerHTML = '<i class="fas fa-check me-2"></i>Message Sent!';
                    setTimeout(() => {
                        submitBtn.innerHTML = originalText;
                        submitBtn.disabled = false;
                        this.reset();
                    }, 2000);
                }, 1500);
            }
        });
    }
});

// Generate random particles
function createParticles() {
    const particles = document.querySelector('.particles');
    if (particles) {
        for (let i = 0; i < 8; i++) {
            const particle = document.createElement('div');
            particle.className = 'particle';
            particle.style.left = Math.random() * 100 + '%';
            particle.style.top = Math.random() * 100 + '%';
            particle.style.width = (Math.random() * 4 + 2) + 'px';
            particle.style.height = particle.style.width;
            particle.style.animationDelay = Math.random() * 6 + 's';
            particles.appendChild(particle);
        }
    }
}

// Initialize particles
document.addEventListener('DOMContentLoaded', function() {
    createParticles();
});

// Preload images for better performance
const imageUrls = [
    'https://images.unsplash.com/photo-1487070183336-b863922373d4?w=1920&h=1080&fit=crop',
    'https://images.unsplash.com/photo-1563241527-3004b7be0ffd?w=1920&h=1080&fit=crop',
    'https://images.unsplash.com/photo-1578662996442-48f60103fc96?w=1920&h=1080&fit=crop'
];

imageUrls.forEach(url => {
    const img = new Image();
    img.src = url;
});
