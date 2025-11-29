@extends('layouts.app')

@section('title', 'Contact Us - Breman Chambers')

@section('content')
    <!-- Hero Section -->
    <section class="main-slider-one" style="width: 100%; position: relative;">
        <div class="main-slider-one__item" style="padding-top: 200px; padding-bottom: 120px; width: 100%; display: flex; align-items: center; min-height: 400px;">
            <div class="main-slider-one__bg" style="background-image: url({{ asset('assets/images/cheerful-afro-american-man-woman-standing-office-bottom-staircase.jpg') }}); width: 100%;"></div>
            <div class="main-slider-one__overlay-one"></div>
            <div class="main-slider-one__overlay-two"></div>
            <div class="container" style="width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 15px;">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-slider-one__content" style="display: block; width: 100%; text-align: center; margin: 0 auto; position: relative; z-index: 10;">
                            <h2 class="main-slider-one__title" style="font-size: 48px; line-height: 1.2; text-align: center; margin: 0 auto 20px auto; display: block; width: 100%; transform: translateX(0) !important; opacity: 1 !important; overflow: visible; position: relative; z-index: 11; color: #fff !important; font-weight: 700;">Contact Us</h2>
                            <style>
                                .main-slider-one__title::after {
                                    display: none !important;
                                    content: none !important;
                                }
                            </style>
                            <!-- Breadcrumbs -->
                            <nav aria-label="breadcrumb" style="display: flex; justify-content: center; align-items: center;">
                                <ol style="display: flex; list-style: none; padding: 0; margin: 0; align-items: center; gap: 10px; color: rgba(255,255,255,0.8); font-size: 14px; justify-content: center;">
                                    <li><a href="{{ url('/') }}" style="color: rgba(255,255,255,0.8); text-decoration: none;">Home</a></li>
                                    <li><i class="fa fa-chevron-right" style="font-size: 12px; opacity: 0.6;"></i></li>
                                    <li style="color: #fff; font-weight: 600;">Contact Us</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Contact Methods Grid -->
    <section style="padding: 120px 0; background: #f8f9fa;">
        <div class="container">
            <div class="row g-4 mb-5">
                <div class="col-lg-4 col-md-6">
                    <div style="background: #fff; padding: 50px; text-align: center; height: 100%; box-shadow: 0 10px 40px rgba(0,0,0,0.08); transition: all 0.3s;" onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 20px 60px rgba(0,0,0,0.15)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 40px rgba(0,0,0,0.08)'">
                        <div style="width: 100px; height: 100px; background: linear-gradient(135deg, #19223a 0%, #2a3a5a 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 30px;">
                            <i class="fa fa-phone" style="color: #fff; font-size: 40px;"></i>
                        </div>
                        <h3 style="font-size: 24px; font-weight: 700; color: #19223a; margin-bottom: 15px;">Phone</h3>
                        <p style="color: #666; margin-bottom: 20px; line-height: 1.8;">Call us during business hours</p>
                        <a href="tel:+2332443766010" style="color: #19223a; font-size: 20px; font-weight: 600; text-decoration: none; display: block;">+233 244 376 6010</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div style="background: #fff; padding: 50px; text-align: center; height: 100%; box-shadow: 0 10px 40px rgba(0,0,0,0.08); transition: all 0.3s;" onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 20px 60px rgba(0,0,0,0.15)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 40px rgba(0,0,0,0.08)'">
                        <div style="width: 100px; height: 100px; background: linear-gradient(135deg, #19223a 0%, #2a3a5a 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 30px;">
                            <i class="fa fa-envelope" style="color: #fff; font-size: 40px;"></i>
                        </div>
                        <h3 style="font-size: 24px; font-weight: 700; color: #19223a; margin-bottom: 15px;">Email</h3>
                        <p style="color: #666; margin-bottom: 20px; line-height: 1.8;">Send us an email anytime</p>
                        <a href="mailto:hello@bremanchambers.com" style="color: #19223a; font-size: 18px; font-weight: 600; text-decoration: none; word-break: break-word; display: block;">hello@bremanchambers.com</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div style="background: #fff; padding: 50px; text-align: center; height: 100%; box-shadow: 0 10px 40px rgba(0,0,0,0.08); transition: all 0.3s;" onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 20px 60px rgba(0,0,0,0.15)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 40px rgba(0,0,0,0.08)'">
                        <div style="width: 100px; height: 100px; background: linear-gradient(135deg, #19223a 0%, #2a3a5a 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 30px;">
                            <i class="fa fa-map-marker-alt" style="color: #fff; font-size: 40px;"></i>
                        </div>
                        <h3 style="font-size: 24px; font-weight: 700; color: #19223a; margin-bottom: 15px;">Location</h3>
                        <p style="color: #666; margin-bottom: 20px; line-height: 1.8;">Visit our office</p>
                        <p style="color: #19223a; font-size: 18px; font-weight: 600; margin: 0;">Accra, Ghana</p>
                        <a href="https://maps.google.com/?q=Accra,Ghana" target="_blank" style="color: #19223a; text-decoration: none; margin-top: 10px; display: inline-block;">View on Map <i class="fa fa-external-link-alt"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section id="contact-form" style="padding: 120px 0; background: #fff;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div style="padding-right: 40px;">
                        <span style="color: #19223a; font-size: 14px; letter-spacing: 2px; text-transform: uppercase; font-weight: 600; margin-bottom: 20px; display: block;">Send Us a Message</span>
                        <h2 style="font-size: 48px; font-weight: 700; color: #19223a; margin-bottom: 30px; line-height: 1.2;">Let's Start a Conversation</h2>
                        <p style="color: #666; font-size: 18px; line-height: 1.8; margin-bottom: 40px;">
                            Whether you have a question about our services, need legal advice, or want to discuss a potential matter, we're here to help. Fill out the form and we'll get back to you as soon as possible.
                        </p>
                        <div style="background: #f8f9fa; padding: 30px;">
                            <h4 style="font-size: 20px; font-weight: 700; color: #19223a; margin-bottom: 15px;">Office Hours</h4>
                            <p style="color: #666; margin: 0; line-height: 1.8;">
                                <strong>Monday - Friday:</strong> 8:00 AM - 6:00 PM<br>
                                <strong>Saturday:</strong> 9:00 AM - 1:00 PM<br>
                                <strong>Sunday:</strong> Closed
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div style="background: #f8f9fa; padding: 50px;">
                        <form class="contact-form-validated form-one" action="https://bracketweb.com/procounsel-html/inc/sendemail.php">
                            <div class="mb-4">
                                <input type="text" name="name" placeholder="Your Name" required style="width: 100%; padding: 18px 24px; border: 2px solid #e0e0e0; font-size: 16px; transition: all 0.3s; background: #fff;" onfocus="this.style.borderColor='#19223a'; this.style.boxShadow='0 0 0 3px rgba(25,34,58,0.1)'" onblur="this.style.borderColor='#e0e0e0'; this.style.boxShadow='none'">
                            </div>
                            <div class="mb-4">
                                <input type="email" name="email" placeholder="Your Email" required style="width: 100%; padding: 18px 24px; border: 2px solid #e0e0e0; font-size: 16px; transition: all 0.3s; background: #fff;" onfocus="this.style.borderColor='#19223a'; this.style.boxShadow='0 0 0 3px rgba(25,34,58,0.1)'" onblur="this.style.borderColor='#e0e0e0'; this.style.boxShadow='none'">
                            </div>
                            <div class="mb-4">
                                <input type="text" name="phone" placeholder="Phone Number" style="width: 100%; padding: 18px 24px; border: 2px solid #e0e0e0; font-size: 16px; transition: all 0.3s; background: #fff;" onfocus="this.style.borderColor='#19223a'; this.style.boxShadow='0 0 0 3px rgba(25,34,58,0.1)'" onblur="this.style.borderColor='#e0e0e0'; this.style.boxShadow='none'">
                            </div>
                            <div class="mb-4">
                                <input type="text" name="subject" placeholder="Subject" required style="width: 100%; padding: 18px 24px; border: 2px solid #e0e0e0; font-size: 16px; transition: all 0.3s; background: #fff;" onfocus="this.style.borderColor='#19223a'; this.style.boxShadow='0 0 0 3px rgba(25,34,58,0.1)'" onblur="this.style.borderColor='#e0e0e0'; this.style.boxShadow='none'">
                            </div>
                            <div class="mb-4">
                                <textarea name="message" placeholder="Your Message" rows="6" required style="width: 100%; padding: 18px 24px; border: 2px solid #e0e0e0; font-size: 16px; resize: vertical; transition: all 0.3s; background: #fff;" onfocus="this.style.borderColor='#19223a'; this.style.boxShadow='0 0 0 3px rgba(25,34,58,0.1)'" onblur="this.style.borderColor='#e0e0e0'; this.style.boxShadow='none'"></textarea>
                            </div>
                            <button type="submit" class="procounsel-btn" style="width: 100%; padding: 18px;">
                                <i>Send Message</i>
                                <span>Send Message</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
