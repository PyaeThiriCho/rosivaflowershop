  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg fixed-top">
      <div class="container">
          <a class="navbar-brand" href="#" aria-label="Fluap Flower Shop Home">
              <i class="fas fa-seedling me-2"></i>Rosiva
          </a>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                      <a class="nav-link" href="{{route('homepage')}}">Home</a>
                  </li>

                  {{-- occassion --}}
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="occasionsDropdown" role="button"
                          data-bs-toggle="dropdown" aria-expanded="false">
                          Occasions
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="occasionsDropdown">
                          @if(isset($occasions) && $occasions->count() > 0)
                              @foreach($occasions as $occasion)
                                  <li>
                                      <a class="dropdown-item" href="{{ route('occasion.detail', $occasion->id) }}">
                                          {{ $occasion->name }} - {{ number_format($occasion->price) }} MMK
                                      </a>
                                  </li>
                              @endforeach
                          @else
                              <li><div class="dropdown-item text-muted">No occasions available</div></li>
                          @endif
                      </ul>
                  </li>

                  {{-- categories --}}
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="categoriesDropdown" role="button"
                          data-bs-toggle="dropdown" aria-expanded="false">
                          Categories
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="categoriesDropdown">
                          {{-- @if(isset($categories) && $categories->count() > 0) --}}
                              @foreach($categories->take(10) as $category)
                                  <li>
                                      <a class="dropdown-item" href="{{ route('category.detail', $category->id) }}">
                                          {{ $category->name }}
                                      </a>
                                  </li>
                              @endforeach
                              {{-- <li><hr class="dropdown-divider"></li>
                              <li><a class="dropdown-item" href="{{ route('categories.all') }}">View All Categories</a></li>
                          @else
                              <li><div class="dropdown-item text-muted">No categories available</div></li>
                          @endif --}}
                      </ul>
                  </li>

                  {{-- Contact --}}
                  <li class="nav-item">
                      <a class="nav-link" href="{{route('contactpage')}}">Contact</a>
                  </li>

                  {{-- cart --}}
                  <li class="nav-item">
                      <a class="nav-link position-relative" href="#" id="cartIcon">
                          <i class="fas fa-shopping-cart"></i>
                          <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" id="cartCount">0</span>
                      </a>
                  </li>

                  {{-- Admin Login --}}
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('admin.login') }}" target="_blank">
                          <i class="fas fa-user-shield me-1"></i>Admin Login
                      </a>
                  </li>
              </ul>
          </div>
      </div>
  </nav>

  <!-- Cart Modal -->
  <div class="modal fade" id="cartModal" tabindex="-1" aria-labelledby="cartModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="cartModalLabel">
                      <i class="fas fa-shopping-cart me-2"></i>Shopping Cart
                  </h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <div id="cartItems">
                      <!-- Cart items will be dynamically added here -->
                  </div>
                  <div id="emptyCart" class="text-center py-4">
                      <i class="fas fa-shopping-cart fa-3x text-muted mb-3"></i>
                      <p class="text-muted">Your cart is empty</p>
                  </div>
              </div>
              <div class="modal-footer">
                  <div class="d-flex justify-content-between w-100">
                      <div>
                          <strong>Total: <span id="cartTotal">0 MMK</span></strong>
                      </div>
                      <div>
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Continue Shopping</button>
                          <button type="button" class="btn btn-primary" id="checkoutBtn">Checkout</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
