@extends('frontend.layout')

@section('content')
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