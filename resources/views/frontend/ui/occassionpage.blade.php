@extends('frontend.layout')

@section('content')
    <!-- Products Section -->
    <section id="products" class="products-section">
        <div class="container">
            <h2 class="section-title">Occasions</h2>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="https://images.unsplash.com/photo-1563241527-3004b7be0ffd?w=300&h=250&fit=crop"
                                alt="Red Roses Bouquet">
                            <div class="product-overlay">
                                <button class="quick-view-btn" aria-label="Quick view of Red Roses Bouquet">
                                    <i class="fas fa-eye me-2"></i>Quick View
                                </button>
                            </div>
                        </div>
                        <div class="product-info">
                            <h5 class="product-title">Classic Red Roses</h5>
                            <p class="product-price">$45.00</p>
                            <button class="add-to-cart-btn" aria-label="Add Classic Red Roses to cart" data-id="1"
                                data-name="Classic Red Roses" data-price="45.00"
                                data-image="https://images.unsplash.com/photo-1563241527-3004b7be0ffd?w=300&h=250&fit=crop">
                                <i class="fas fa-shopping-cart me-2"></i>Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="https://images.unsplash.com/photo-1578662996442-48f60103fc96?w=300&h=250&fit=crop"
                                alt="Mixed Spring Flowers">
                            <div class="product-overlay">
                                <button class="quick-view-btn" aria-label="Quick view of Spring Mix Bouquet">
                                    <i class="fas fa-eye me-2"></i>Quick View
                                </button>
                            </div>
                        </div>
                        <div class="product-info">
                            <h5 class="product-title">Spring Mix Bouquet</h5>
                            <p class="product-price">$62.00</p>
                            <button class="add-to-cart-btn" aria-label="Add Spring Mix Bouquet to cart" data-id="2"
                                data-name="Spring Mix Bouquet" data-price="62.00"
                                data-image="https://images.unsplash.com/photo-1578662996442-48f60103fc96?w=300&h=250&fit=crop">
                                <i class="fas fa-shopping-cart me-2"></i>Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="https://images.unsplash.com/photo-1487070183336-b863922373d4?w=300&h=250&fit=crop"
                                alt="Elegant White Lilies">
                            <div class="product-overlay">
                                <button class="quick-view-btn" aria-label="Quick view of White Lilies">
                                    <i class="fas fa-eye me-2"></i>Quick View
                                </button>
                            </div>
                        </div>
                        <div class="product-info">
                            <h5 class="product-title">Elegant White Lilies</h5>
                            <p class="product-price">$78.00</p>
                            <button class="add-to-cart-btn" aria-label="Add Elegant White Lilies to cart" data-id="3"
                                data-name="Elegant White Lilies" data-price="78.00"
                                data-image="https://images.unsplash.com/photo-1487070183336-b863922373d4?w=300&h=250&fit=crop">
                                <i class="fas fa-shopping-cart me-2"></i>Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="https://images.unsplash.com/photo-1556181044-3de1b28e5e4f?w=300&h=250&fit=crop"
                                alt="Tropical Paradise Arrangement">
                            <div class="product-overlay">
                                <button class="quick-view-btn" aria-label="Quick view of Tropical Paradise">
                                    <i class="fas fa-eye me-2"></i>Quick View
                                </button>
                            </div>
                        </div>
                        <div class="product-info">
                            <h5 class="product-title">Tropical Paradise</h5>
                            <p class="product-price">$95.00</p>
                            <button class="add-to-cart-btn" aria-label="Add Tropical Paradise to cart" data-id="4"
                                data-name="Tropical Paradise" data-price="95.00"
                                data-image="https://images.unsplash.com/photo-1556181044-3de1b28e5e4f?w=300&h=250&fit=crop">
                                <i class="fas fa-shopping-cart me-2"></i>Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="https://images.unsplash.com/photo-1558618047-eff7b5d2c3e3?w=300&h=250&fit=crop"
                                alt="Sunflower Delight">
                            <div class="product-overlay">
                                <button class="quick-view-btn" aria-label="Quick view of Sunflower Delight">
                                    <i class="fas fa-eye me-2"></i>Quick View
                                </button>
                            </div>
                        </div>
                        <div class="product-info">
                            <h5 class="product-title">Sunflower Delight</h5>
                            <p class="product-price">$38.00</p>
                            <button class="add-to-cart-btn" aria-label="Add Sunflower Delight to cart" data-id="5"
                                data-name="Sunflower Delight" data-price="38.00"
                                data-image="https://images.unsplash.com/photo-1558618047-eff7b5d2c3e3?w=300&h=250&fit=crop">
                                <i class="fas fa-shopping-cart me-2"></i>Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="https://images.unsplash.com/photo-1561181286-d3fee7d55364?w=300&h=250&fit=crop"
                                alt="Purple Lavender Bouquet">
                            <div class="product-overlay">
                                <button class="quick-view-btn" aria-label="Quick view of Purple Lavender">
                                    <i class="fas fa-eye me-2"></i>Quick View
                                </button>
                            </div>
                        </div>
                        <div class="product-info">
                            <h5 class="product-title">Purple Lavender</h5>
                            <p class="product-price">$52.00</p>
                            <button class="add-to-cart-btn" aria-label="Add Purple Lavender to cart" data-id="6"
                                data-name="Purple Lavender" data-price="52.00"
                                data-image="https://images.unsplash.com/photo-1561181286-d3fee7d55364?w=300&h=250&fit=crop">
                                <i class="fas fa-shopping-cart me-2"></i>Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="https://images.unsplash.com/photo-1520763185298-1b434c919102?w=300&h=250&fit=crop"
                                alt="Pink Peony Arrangement">
                            <div class="product-overlay">
                                <button class="quick-view-btn" aria-label="Quick view of Pink Peonies">
                                    <i class="fas fa-eye me-2"></i>Quick View
                                </button>
                            </div>
                        </div>
                        <div class="product-info">
                            <h5 class="product-title">Pink Peonies</h5>
                            <p class="product-price">$68.00</p>
                            <button class="add-to-cart-btn" aria-label="Add Pink Peonies to cart" data-id="7"
                                data-name="Pink Peonies" data-price="68.00"
                                data-image="https://images.unsplash.com/photo-1520763185298-1b434c919102?w=300&h=250&fit=crop">
                                <i class="fas fa-shopping-cart me-2"></i>Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="https://images.unsplash.com/photo-1594736797933-d0401ba2fe65?w=300&h=250&fit=crop"
                                alt="Orange Marigold Collection">
                            <div class="product-overlay">
                                <button class="quick-view-btn" aria-label="Quick view of Orange Marigolds">
                                    <i class="fas fa-eye me-2"></i>Quick View
                                </button>
                            </div>
                        </div>
                        <div class="product-info">
                            <h5 class="product-title">Orange Marigolds</h5>
                            <p class="product-price">$42.00</p>
                            <button class="add-to-cart-btn" aria-label="Add Orange Marigolds to cart" data-id="8"
                                data-name="Orange Marigolds" data-price="42.00"
                                data-image="https://images.unsplash.com/photo-1594736797933-d0401ba2fe65?w=300&h=250&fit=crop">
                                <i class="fas fa-shopping-cart me-2"></i>Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5">
                <a href="#" class="hero-btn">
                    <i class="fas fa-th me-2"></i>View All Products
                </a>
            </div>
        </div>
    </section>
@endsection
