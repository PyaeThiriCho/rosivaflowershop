@extends('frontend.layout')

@section('content')


<div class="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <center>
            <img src="{{asset('frontend_assets/images/one.jpg')}}" height="50%" width="100%" class="d-none d-sm-block">
            </center>
        </div>

        <div class="carousel_text ">
            <h1 class="font_h1">Fluap Flower Shop</h1>
                <p class="d-none d-md-block">
                    "Every bouquet we deliver is a story of love, care, and connection
                        — sent from your heart to their doorstep."
                </p>
                <a href="product.html" style="text-decoration: none;"><button class="btn btn-outline-secondary d-none d-md-block">Shop Now</button></a>
        </div>
        
    </div>
</div>

<div class="container my-5">
    <div class="row">
        <div class="col-12 col-md-6 col-lg-4 ">
            <div class="card py-4 px-4">
                
                <div class="row">
                    
                    <div class="col-4">
                        <i class="fa-solid fa-truck fa-2x ms-4 mt-4"></i>
                    </div>

                    <div class="col-7">
                        <h6 class="fw-bolder">Free Shipping</h6>
                        <hr class="divided pt-0">
                        <small>
                            <p class="mt-0">Product are free shipping</p>
                        </small>

                    </div>

                </div>
            </div>
        </div>


        <div class="col-12 col-md-6 col-lg-4 ">
            <div class="card py-4 px-4">
                
                <div class="row">
                    
                    <div class="col-4">
                        <i class="fa-solid fa-user fa-2x ms-4 mt-4"></i> 
                    </div>

                    <div class="col-7">
                        <h6 class="fw-bolder">Customer Support</h6>
                        <hr class="divided pt-0">
                        <small>
                            <p class="mt-0">24x7 Customer Support </p>
                        </small>

                    </div>

                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4 ">
            <div class="card py-4 px-4">
                
                <div class="row">
                    
                    <div class="col-4">
                        <i class="fa-regular fa-credit-card  fa-2x ms-4 mt-4"></i>
                    </div>

                    <div class="col-7">
                        <h6 class="fw-bolder">Secure Payment</h6>
                        <hr class="divided pt-0">
                        <small>
                            <p class="mt-0">Most secure payment</p>
                        </small>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


<!--About us-->
<div class="container py-5">
    <div class="row align-items-center">
        <div class="col-md-6 d-flex justify-content-center">
            <div class="image-stack">
                <img src="images/p1.webp" width="250" class="img-fluid" alt="">
                <img src="images/p5.jpg" class="img-fluid" alt="">
            </div>
        </div>

        <div class="col-md-6 text-center text-md-start mt-md-0">
            <h5 class="font_h1">Fluap Flower Shop welcomes you!</h5>
            <p>Here you will find detailed information <br>about the history of the company,the <br>specifies of the delivery service and<br> our advantages.</p>
            <a href="#" class="btn btn-outline-secondary">Learn More</a>

        </div>
    </div>
</div>


<!--Product-->
<div class="container my-5  justify-content-center">
    <h1 class="text-center text-secondary mb-3 my-0 font_h1">Latest Product</h1>
    <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4">
        <div class="col-12  mb-3">
            <div class="card shadow-sm">
                <div class="image">
                    <img src="images/p6.jpg" class="card-img-top">
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center">Flower 1</h5>
                    <p class="card-text text-center">23000MMK</p>
                    <a class="btn btn-dark d-block mx-auto text-center" style="width:fit-content;">Add to Cart</a>
                </div>

                
            </div>
        </div>

        <div class="col mb-3">
            <div class="card shadow-sm">

                <div class="image">
                    <img src="images/th.jpg" class="card-img-top" style="height: 240px;">
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center">Flower 2</h5>
                    <p class="card-text text-center">40000MMK</p>
                    <a class="btn btn-dark d-block mx-auto text-center" style="width:fit-content;">Add to Cart</a>
                </div>

                
            </div>
        </div>


        <div class="col mb-3">
            <div class="card shadow-sm">
                <div class="image">
                    <img src="images/p7.jpg" class="card-img-top" style="height: 240px;">
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center">Flower 3</h5>
                    <p class="card-text text-center">55000MMK</p>
                    <a class="btn btn-dark d-block mx-auto text-center" style="width:fit-content;">Add to Cart</a>
                </div>

                
            </div>
        </div>

        
        <div class="col mb-3">
            <div class="card shadow-sm">
                <div class="image">
                    <img src="images/th (2).jpg" class="card-img-top" style="height: 240px;">
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center">Flower 4</h5>
                    <p class="card-text text-center">75000MMK</p>
                    <a class="btn btn-dark d-block mx-auto text-center" style="width:fit-content;">Add to Cart</a>
                </div>

                
            </div>
        </div>


        <div class="col mb-3">
            <div class="card shadow-sm">
                <div class="image">
                    <img src="images/50G_2022-1-1000x1000.jpg" class="card-img-top" style="height: 240px;">
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center">Flower 5</h5>
                    <p class="card-text text-center">30000MMK</p>
                    <a class="btn btn-dark d-block mx-auto text-center" style="width:fit-content;">Add to Cart</a>
                </div>

                
            </div>
        </div>


        <div class="col mb-3">
            <div class="card shadow-sm">
                <div class="image">
                    <img src="images/1.avif" class="card-img-top" style="height: 240px;">
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center">Flower 6</h5>
                    <p class="card-text text-center">25000MMK</p>
                    <a class="btn btn-dark d-block mx-auto text-center" style="width:fit-content;">Add to Cart</a>
                </div>

                
            </div>
        </div>


        <div class="col mb-3">
            <div class="card shadow-sm">
                <div class="image">
                    <img src="images/p8.jpg" class="card-img-top" style="height: 240px;">
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center">Flower 7</h5>
                    <p class="card-text text-center">45000MMK</p>
                    <a class="btn btn-dark d-block mx-auto text-center" style="width:fit-content;">Add to Cart</a>
                </div>

                
            </div>
        </div>

        <div class="col mb-3">
            <div class="card shadow-sm">
                <div class="image">
                    <img src="images/p1.webp" class="card-img-top" style="height: 240px;">
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center">Flower 8</h5>
                    <p class="card-text text-center">59000MMK</p>
                    <a class="btn btn-dark d-block mx-auto text-center" style="width:fit-content;">Add to Cart</a>
                </div>

                
            </div>
        </div>

        <div class="col mb-3">
            <div class="card shadow-sm">
                <div class="image">
                    <img src="images/th3.jpg" class="card-img-top" style="height: 240px;">
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center">Flower 9</h5>
                    <p class="card-text text-center">99000MMK</p>
                    <a class="btn btn-dark d-block mx-auto text-center" style="width:fit-content;">Add to Cart</a>
                </div>

                
            </div>
        </div>

        <div class="col mb-3">
            <div class="card shadow-sm">
                <div class="image">
                    <img src="images/th5.jpeg" class="card-img-top" style="height: 240px;">
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center">Flower 10</h5>
                    <p class="card-text text-center">33000MMK</p>
                    <a class="btn btn-dark d-block mx-auto text-center" style="width:fit-content;">Add to Cart</a>
                </div>

                
            </div>
        </div>

        <div class="col mb-3">
            <div class="card shadow-sm">
                <div class="image">
                    <img src="images/p4.webp" class="card-img-top" style="height: 240px;">
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center">Flower 11</h5>
                    <p class="card-text text-center">75000MMK</p>
                    <a class="btn btn-dark d-block mx-auto text-center" style="width:fit-content;">Add to Cart</a>
                </div>

                
            </div>
        </div>

        <div class="col mb-3">
            <div class="card shadow-sm">
                <div class="image">
                    <img src="images/p5.jpg" class="card-img-top" style="height: 240px;">
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center">Flower 12</h5>
                    <p class="card-text text-center">56000MMK</p>
                    <a class="btn btn-dark d-block mx-auto text-center" style="width:fit-content;">Add to Cart</a>
                </div>

                
            </div>
        </div>
    </div>
</div>

>
<!--Review-->
<div class="container my-5">
    <h1 class="font_h1 text-center text-secondary mb-3 my-0">Customer's Review</h1>
    <div class="row">

        <div class="col-12 col-md-4">
            <div class="card">
                <div class="stars py-3 px-2">
                    <i class="fas fa-star" style="color: red;"></i>
                    <i class="fas fa-star" style="color: red;"></i>
                    <i class="fas fa-star" style="color: red;"></i>
                    <i class="fas fa-star" style="color: red;"></i>
                    <i class="fas fa-star" style="color: red;"></i>
                </div>

                <p class="px-2">
                    Fluap Flower Shop exceeded my expectations! The bouquet was fresh, beautifully arranged, and delivered right on time. Great service and quality—highly recommended!
                </p>

                <div class="row ms-1">
                    <div class="col-md-3 py-3">
                        <div class="user">
                            <img src="images/rev1.jpg" height="50" width="50" class="rounded-circle">
                        </div>
                    </div>

                    <div class="col-md-9 py-3">
                        <h5 class="mb-0 px-0">Charles Deco</h5>
                        <small  style="color: gray;">Happy Customer</small>
                    </div>
                </div>

            </div>
        </div>


        <div class="col-12 col-md-4">
            <div class="card">
                <div class="stars py-3 px-2">
                    <i class="fas fa-star" style="color: red;"></i>
                    <i class="fas fa-star" style="color: red;"></i>
                    <i class="fas fa-star" style="color: red;"></i>
                    <i class="fas fa-star" style="color: red;"></i>
                    <i class="fas fa-star" style="color: red;"></i>
                </div>

                <p class="px-2">
                    I loved the flowers I received from Floral Flower Shop! They were fresh, colorful, and smelled amazing. Will definitely order again.The packaging was also neat and added a special touch.
                </p>

                <div class="row ms-1">
                    <div class="col-md-3 py-3">
                        <div class="user">
                            <img src="images/review4.jpg" height="50" width="50" class="rounded-circle">
                        </div>
                    </div>

                    <div class="col-md-9 py-3">
                        <h5 class="mb-0 px-0">Sharon Michel</h5>
                        <small  style="color: gray;">Happy Customer</small>
                    </div>
                </div>

            </div>
        </div>


        <div class="col-12 col-md-4">
            <div class="card">
                <div class="stars py-3 px-2">
                    <i class="fas fa-star" style="color: red;"></i>
                    <i class="fas fa-star" style="color: red;"></i>
                    <i class="fas fa-star" style="color: red;"></i>
                    <i class="fas fa-star" style="color: red;"></i>
                    <i class="fas fa-star" style="color: red;"></i>
                </div>

                <p class="px-2">
                    Beautiful flowers and great attention to detail. The bouquet looked even better in person than online. A lovely experience overall!I'll definitely be coming back for future orders.
                </p>

                <div class="row ms-1">
                    <div class="col-md-3 py-3">
                        <div class="user">
                            <img src="images/review6.jpg" height="50" width="50" class="rounded-circle">
                        </div>
                    </div>

                    <div class="col-md-9 py-3">
                        <h5 class="mb-0 px-0">Charles Deco</h5>
                        <small  style="color: gray;">Happy Customer</small>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<!--Contact Us-->
<div class="container mt-5">
    <div class="row justify-content-center">
    <div class="col-md-8 col-lg-6">
            <div class="card shadow">
            <div class="card-header bg-black text-white text-center">
                <h4>Contact Us</h4>
            </div>
            <div class="card-body">
                <form action="#" method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label">Your Name</label>
                        <input type="text" class="form-control" id="name" name="name" required />
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Your Email</label>
                        <input type="email" class="form-control" id="email" name="email" required />
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Your Message</label>
                        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                    </div>
                    <a href="contactus.html"><button type="submit" class="btn btn-black bg-black text-white text-center w-100">Send Message</button></a>
                </form>
            </div>
        </div>
    </div>
    </div>
</div>



@endsection
