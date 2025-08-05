@extends('frontend.layout')

@section('content')
    <!-- Hero Carousel -->
    <section id="home" class="hero-carousel">
        <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('frontend_assets/images/carosels/carosel_1.jpeg')}}"
                        alt="Beautiful flower arrangement" class="carousel-bg">
                    <div class="carousel-overlay"></div>
                    <div class="particles">
                        <div class="particle" style="left: 10%; top: 20%; width: 4px; height: 4px; animation-delay: 0s;">
                        </div>
                        <div class="particle" style="left: 20%; top: 80%; width: 6px; height: 6px; animation-delay: 1s;">
                        </div>
                        <div class="particle" style="left: 80%; top: 30%; width: 3px; height: 3px; animation-delay: 2s;">
                        </div>
                        <div class="particle" style="left: 70%; top: 70%; width: 5px; height: 5px; animation-delay: 3s;">
                        </div>
                    </div>
                    <div class="hero-content">
                        <h1 class="hero-title">Fluap Flower Shop</h1>
                        <p class="hero-subtitle">
                            Every bouquet we deliver is a story of love, care, and connection — sent from your heart to
                            their doorstep.
                        </p>
                        <a href="#products" class="hero-btn">
                            <i class="fas fa-shopping-bag me-2"></i>Shop Now
                        </a>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="{{asset('frontend_assets/images/carosels/carosel_2.jpeg')}}"
                        alt="Fresh roses collection" class="carousel-bg">
                    <div class="carousel-overlay"></div>
                    <div class="hero-content">
                        <h1 class="hero-title">Fresh & Beautiful</h1>
                        <p class="hero-subtitle">
                            Handpicked flowers delivered fresh to your door. Experience the magic of nature's finest
                            creations.
                        </p>
                        <a href="#products" class="hero-btn">
                            <i class="fas fa-leaf me-2"></i>Explore Collection
                        </a>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="{{asset('frontend_assets/images/carosels/carosel_3.jpeg')}}"
                        alt="Wedding bouquet arrangements" class="carousel-bg">
                    <div class="carousel-overlay"></div>
                    <div class="hero-content">
                        <h1 class="hero-title">Special Occasions</h1>
                        <p class="hero-subtitle">
                            Perfect arrangements for weddings, anniversaries, and life's most precious moments.
                        </p>
                        <a href="#products" class="hero-btn">
                            <i class="fas fa-heart me-2"></i>Special Orders
                        </a>
                    </div>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev"
                aria-label="Previous slide">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next"
                aria-label="Next slide">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </button>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card fade-in-up">
                        <div class="feature-icon">
                            <i class="fas fa-truck" aria-hidden="true"></i>
                        </div>
                        <h5 class="feature-title">Free Shipping</h5>
                        <p>Enjoy complimentary delivery on all our beautiful flower arrangements, bringing joy directly to
                            your doorstep.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="feature-card fade-in-up">
                        <div class="feature-icon">
                            <i class="fas fa-headset" aria-hidden="true"></i>
                        </div>
                        <h5 class="feature-title">24/7 Support</h5>
                        <p>Our dedicated customer service team is available around the clock to assist you with any
                            questions or concerns.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="feature-card fade-in-up">
                        <div class="feature-icon">
                            <i class="fas fa-shield-alt" aria-hidden="true"></i>
                        </div>
                        <h5 class="feature-title">Secure Payment</h5>
                        <p>Shop with confidence using our encrypted payment system that protects your personal and financial
                            information.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="about-images">
                        <img src="{{asset('frontend_assets/images/carosels/carosel_1.jpeg')}}"
                            alt="Florist arranging flowers" class="img-fluid about-img-main">
                        <img src="https://images.unsplash.com/photo-1563241527-3004b7be0ffd?w=300&h=400&fit=crop"
                            alt="Beautiful rose bouquet" class="img-fluid about-img-secondary">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="about-content">
                        <h2>Fluap Flower Shop Welcomes You!</h2>
                        <p class="mb-4">
                            With over a decade of experience in floral artistry, we take pride in creating stunning
                            arrangements
                            that capture the essence of every special moment. Our expert florists carefully select each
                            bloom to
                            ensure freshness, beauty, and longevity.
                        </p>
                        <p class="mb-4">
                            From intimate bouquets to grand event displays, we bring your floral visions to life with
                            passion,
                            creativity, and attention to detail that makes every arrangement uniquely yours.
                        </p>
                        <a href="#" class="about-btn">
                            <i class="fas fa-info-circle me-2"></i>Learn More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Products Section -->
    <section id="products" class="products-section">
        <div class="container">
            <h2 class="section-title">Featured Flowers</h2>

            @if(isset($featuredFlowers) && $featuredFlowers->count() > 0)
                <div class="row g-4">
                    @foreach($featuredFlowers as $flower)
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="product-card">
                                <div class="product-image">
                                    @if($flower->image)
                                        <img src="{{ asset($flower->image) }}" alt="{{ $flower->name }}" class="img-fluid">
                                    @else
                                        <img src="https://images.unsplash.com/photo-1563241527-3004b7be0ffd?w=300&h=250&fit=crop" alt="{{ $flower->name }}" class="img-fluid">
                                    @endif
                                    <div class="product-overlay">
                                        <button class="quick-view-btn" onclick="showFlowerDetails({{ $flower->id }})" aria-label="Quick view of {{ $flower->name }}">
                                            <i class="fas fa-eye me-2"></i>Quick View
                                        </button>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h5 class="product-title">{{ $flower->name }}</h5>
                                    <p class="product-price">{{ number_format($flower->price) }} MMK</p>
                                    @if($flower->category)
                                        <small class="text-muted">{{ $flower->category->name }}</small>
                                    @endif
                                    <button class="add-to-cart-btn"
                                            aria-label="Add {{ $flower->name }} to cart"
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

                <div class="text-center mt-5">
                    <a href="{{ route('flowers.all') }}" class="hero-btn">
                        <i class="fas fa-th me-2"></i>View All Products
                    </a>
                </div>
            @else
                <!-- Empty State for Featured Products -->
                <div class="text-center py-5">
                    <i class="fas fa-seedling fa-3x text-muted mb-3"></i>
                    <h3 class="text-muted">No Featured Flowers Available</h3>
                    <p class="text-muted">We're currently preparing our beautiful flower collection. Please check back soon!</p>
                    <a href="{{ route('admin.login') }}" class="btn btn-primary" target="_blank">
                        <i class="fas fa-user-shield me-2"></i>Admin Login
                    </a>
                </div>
            @endif
        </div>
    </section>

    <!-- Flowers by Categories Section -->
    {{-- @if(isset($categories) && $categories->count() > 0)
        <section id="flowers-by-categories" class="flowers-categories-section py-5" style="background: var(--light-bg);">
            <div class="container">
                <h2 class="section-title text-center mb-5">Flowers by Categories</h2>

                @php $hasFlowers = false; @endphp
                @foreach($categories->take(6) as $category)
                    @if($category->flowers->count() > 0)
                        @php $hasFlowers = true; @endphp
                        <div class="category-section mb-5">
                            <h3 class="category-title text-center mb-4">{{ $category->name }}</h3>
                            <div class="row g-4">
                                @foreach($category->flowers->take(4) as $flower)
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
                        </div>
                    @endif
                @endforeach

                @if(!$hasFlowers)
                    <!-- Empty State for Categories -->
                    <div class="text-center py-5">
                        <i class="fas fa-tags fa-3x text-muted mb-3"></i>
                        <h3 class="text-muted">No Flowers in Categories</h3>
                        <p class="text-muted">Categories are set up but no flowers have been added yet.</p>
                        <a href="{{ route('admin.login') }}" class="btn btn-primary" target="_blank">
                            <i class="fas fa-user-shield me-2"></i>Add Flowers
                        </a>
                    </div>
                @endif
            </div>
        </section>
    @else
        <!-- Empty State for Categories -->
        <section class="py-5" style="background: var(--light-bg);">
            <div class="container">
                <div class="text-center py-5">
                    <i class="fas fa-tags fa-3x text-muted mb-3"></i>
                    <h3 class="text-muted">No Categories Available</h3>
                    <p class="text-muted">No flower categories have been created yet.</p>
                    <a href="{{ route('admin.login') }}" class="btn btn-primary" target="_blank">
                        <i class="fas fa-user-shield me-2"></i>Create Categories
                    </a>
                </div>
            </div>
        </section>
    @endif --}}

    <!-- Reviews Section -->
    <section id="reviews" class="reviews-section">
        <div class="container">
            <h2 class="section-title">What Our Customers Say</h2>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="review-card">
                        <div class="stars">
                            <i class="fas fa-star star" aria-hidden="true"></i>
                            <i class="fas fa-star star" aria-hidden="true"></i>
                            <i class="fas fa-star star" aria-hidden="true"></i>
                            <i class="fas fa-star star" aria-hidden="true"></i>
                            <i class="fas fa-star star" aria-hidden="true"></i>
                            <span class="sr-only">5 out of 5 stars</span>
                        </div>

                        <p class="mb-4">
                            "Fluap Flower Shop exceeded my expectations! The bouquet was fresh, beautifully arranged,
                            and delivered right on time. The attention to detail and customer service were outstanding.
                            Highly recommended!"
                        </p>

                        <div class="reviewer-info">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=60&h=60&fit=crop&crop=face"
                                alt="Charles Deco" class="reviewer-avatar">
                            <div>
                                <div class="reviewer-name">Charles Deco</div>
                                <div class="reviewer-title">Happy Customer</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="review-card">
                        <div class="stars">
                            <i class="fas fa-star star" aria-hidden="true"></i>
                            <i class="fas fa-star star" aria-hidden="true"></i>
                            <i class="fas fa-star star" aria-hidden="true"></i>
                            <i class="fas fa-star star" aria-hidden="true"></i>
                            <i class="fas fa-star star" aria-hidden="true"></i>
                            <span class="sr-only">5 out of 5 stars</span>
                        </div>

                        <p class="mb-4">
                            "I loved the flowers I received from Fluap Flower Shop! They were fresh, colorful, and smelled
                            amazing.
                            The packaging was elegant and added a special touch. Will definitely order again for future
                            occasions."
                        </p>

                        <div class="reviewer-info">
                            <img src="https://images.unsplash.com/photo-1494790108755-2616b612b639?w=60&h=60&fit=crop&crop=face"
                                alt="Sharon Michel" class="reviewer-avatar">
                            <div>
                                <div class="reviewer-name">Sharon Michel</div>
                                <div class="reviewer-title">Happy Customer</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="review-card">
                        <div class="stars">
                            <i class="fas fa-star star" aria-hidden="true"></i>
                            <i class="fas fa-star star" aria-hidden="true"></i>
                            <i class="fas fa-star star" aria-hidden="true"></i>
                            <i class="fas fa-star star" aria-hidden="true"></i>
                            <i class="fas fa-star star" aria-hidden="true"></i>
                            <span class="sr-only">5 out of 5 stars</span>
                        </div>

                        <p class="mb-4">
                            "Beautiful flowers and exceptional attention to detail. The bouquet looked even better in person
                            than online.
                            Professional service and timely delivery made this a wonderful experience overall!"
                        </p>

                        <div class="reviewer-info">
                            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=60&h=60&fit=crop&crop=face"
                                alt="Michael Johnson" class="reviewer-avatar">
                            <div>
                                <div class="reviewer-name">Michael Johnson</div>
                                <div class="reviewer-title">Happy Customer</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-5" style="background: var(--light-bg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center mb-5">
                        <h2 class="section-title">Get In Touch</h2>
                        <p class="lead">Have questions about our flowers or need help with a special order? We'd love to
                            hear from you!</p>
                    </div>

                    <div class="card shadow-lg border-0" style="border-radius: 20px;">
                        <div class="card-header text-center py-4"
                            style="background: var(--gradient-primary); border-radius: 20px 20px 0 0;">
                            <h4 class="text-white mb-0">
                                <i class="fas fa-envelope me-2"></i>Contact Us
                            </h4>
                        </div>
                        <div class="card-body p-5">
                            <form>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="name" class="form-label fw-semibold">Your Name</label>
                                        <input type="text" class="form-control form-control-lg" id="name"
                                            name="name" style="border-radius: 15px;" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email" class="form-label fw-semibold">Your Email</label>
                                        <input type="email" class="form-control form-control-lg" id="email"
                                            name="email" style="border-radius: 15px;" required>
                                    </div>
                                    <div class="col-12">
                                        <label for="subject" class="form-label fw-semibold">Subject</label>
                                        <input type="text" class="form-control form-control-lg" id="subject"
                                            name="subject" style="border-radius: 15px;" required>
                                    </div>
                                    <div class="col-12">
                                        <label for="message" class="form-label fw-semibold">Your Message</label>
                                        <textarea class="form-control" id="message" name="message" rows="5" style="border-radius: 15px;" required></textarea>
                                    </div>
                                    <div class="col-12 text-center">
                                        <button type="submit" class="hero-btn">
                                            <i class="fas fa-paper-plane me-2"></i>Send Message
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
