@extends('layouts.app')

@section('title', 'Engagement - Breman Chambers')

@section('content')
    <!-- Hero Section -->
    <section class="main-slider-one" style="width: 100%; position: relative;">
        <div class="main-slider-one__item" style="padding-top: 200px; padding-bottom: 120px; width: 100%; display: flex; align-items: center; min-height: 400px;">
            <div class="main-slider-one__bg" style="background-image: url({{ asset('assets/images/medium-shot-woman-working-as-lawyer.jpg') }}); width: 100%;"></div>
            <div class="main-slider-one__overlay-one"></div>
            <div class="main-slider-one__overlay-two"></div>
            <div class="container" style="width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 15px;">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-slider-one__content" style="display: block; width: 100%; text-align: center; margin: 0 auto; position: relative; z-index: 10;">
                            <h2 class="main-slider-one__title" style="font-size: 48px; line-height: 1.2; text-align: center; margin: 0 auto 20px auto; display: block; width: 100%; transform: translateX(0) !important; opacity: 1 !important; overflow: visible; position: relative; z-index: 11; color: #fff !important; font-weight: 700;">Engagement</h2>
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
                                    <li style="color: #fff; font-weight: 600;">Engagement</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Form Section -->
    <section id="consultation-form" style="padding: 120px 0; background: #f8f9fa;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div style="background: #fff; padding: 60px; box-shadow: 0 20px 60px rgba(0,0,0,0.1);">
                        <form class="contact-form-validated form-one" action="https://bracketweb.com/procounsel-html/inc/sendemail.php">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <label style="display: block; color: #19223a; font-weight: 600; margin-bottom: 10px;">Full Name *</label>
                                    <input type="text" name="name" placeholder="John Doe" required style="width: 100%; padding: 15px 20px; border: 2px solid #e0e0e0; font-size: 16px; transition: all 0.3s;" onfocus="this.style.borderColor='#19223a'" onblur="this.style.borderColor='#e0e0e0'">
                                </div>
                                <div class="col-md-6">
                                    <label style="display: block; color: #19223a; font-weight: 600; margin-bottom: 10px;">Email Address *</label>
                                    <input type="email" name="email" placeholder="john@example.com" required style="width: 100%; padding: 15px 20px; border: 2px solid #e0e0e0; font-size: 16px; transition: all 0.3s;" onfocus="this.style.borderColor='#19223a'" onblur="this.style.borderColor='#e0e0e0'">
                                </div>
                                <div class="col-md-6">
                                    <label style="display: block; color: #19223a; font-weight: 600; margin-bottom: 10px;">Phone Number *</label>
                                    <input type="text" name="phone" placeholder="+233 XX XXX XXXX" required style="width: 100%; padding: 15px 20px; border: 2px solid #e0e0e0; font-size: 16px; transition: all 0.3s;" onfocus="this.style.borderColor='#19223a'" onblur="this.style.borderColor='#e0e0e0'">
                                </div>
                                <div class="col-md-6">
                                    <label style="display: block; color: #19223a; font-weight: 600; margin-bottom: 10px;">Service Area *</label>
                                    <select name="service" required style="width: 100%; padding: 15px 20px; border: 2px solid #e0e0e0; font-size: 16px; transition: all 0.3s; background: #fff;" onfocus="this.style.borderColor='#19223a'" onblur="this.style.borderColor='#e0e0e0'">
                                        <option value="">Select a service area</option>
                                        <option value="transactions">Transactions & Financing</option>
                                        <option value="governance">Governance & Compliance</option>
                                        <option value="disputes">Dispute Resolution</option>
                                        <option value="advisory">Advisory & Risk</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label style="display: block; color: #19223a; font-weight: 600; margin-bottom: 10px;">Tell us about your legal needs *</label>
                                    <textarea name="message" placeholder="Please provide details about your situation..." rows="6" required style="width: 100%; padding: 15px 20px; border: 2px solid #e0e0e0; font-size: 16px; resize: vertical; transition: all 0.3s;" onfocus="this.style.borderColor='#19223a'" onblur="this.style.borderColor='#e0e0e0'"></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="procounsel-btn" style="width: 100%; padding: 18px;">
                                        <i>Submit Request</i>
                                        <span>Submit Request</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Section -->
    <section style="padding: 120px 0; background: #fff;">
        <div class="container">
            <div class="text-center" style="margin-bottom: 80px;">
                <span style="color: #19223a; font-size: 14px; letter-spacing: 2px; text-transform: uppercase; font-weight: 600;">Why Choose Us</span>
                <h2 style="font-size: 48px; font-weight: 700; color: #19223a; margin-top: 20px;">What Sets Us Apart</h2>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div style="text-align: center; padding: 40px;">
                        <div style="width: 80px; height: 80px; background: linear-gradient(135deg, #19223a 0%, #2a3a5a 100%); display: flex; align-items: center; justify-content: center; margin: 0 auto 30px;">
                            <i class="fa fa-clock" style="color: #fff; font-size: 36px;"></i>
                        </div>
                        <h4 style="font-size: 22px; font-weight: 700; color: #19223a; margin-bottom: 15px;">Rapid Response</h4>
                        <p style="color: #666; line-height: 1.8; margin: 0;">We respond to all inquiries within 24 hours, ensuring you get the attention you deserve.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div style="text-align: center; padding: 40px;">
                        <div style="width: 80px; height: 80px; background: linear-gradient(135deg, #19223a 0%, #2a3a5a 100%); display: flex; align-items: center; justify-content: center; margin: 0 auto 30px;">
                            <i class="fa fa-shield-alt" style="color: #fff; font-size: 36px;"></i>
                        </div>
                        <h4 style="font-size: 22px; font-weight: 700; color: #19223a; margin-bottom: 15px;">Confidentiality</h4>
                        <p style="color: #666; line-height: 1.8; margin: 0;">Your information is protected with the highest standards of confidentiality and discretion.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div style="text-align: center; padding: 40px;">
                        <div style="width: 80px; height: 80px; background: linear-gradient(135deg, #19223a 0%, #2a3a5a 100%); display: flex; align-items: center; justify-content: center; margin: 0 auto 30px;">
                            <i class="fa fa-users" style="color: #fff; font-size: 36px;"></i>
                        </div>
                        <h4 style="font-size: 22px; font-weight: 700; color: #19223a; margin-bottom: 15px;">Expert Team</h4>
                        <p style="color: #666; line-height: 1.8; margin: 0;">Our experienced attorneys bring decades of combined expertise to every case.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Info Section -->
    <section style="padding: 80px 0; background: linear-gradient(135deg, #19223a 0%, #2a3a5a 100%);">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div style="color: #fff;">
                        <i class="fa fa-phone" style="font-size: 36px; margin-bottom: 20px; display: block;"></i>
                        <h4 style="font-size: 20px; font-weight: 600; margin-bottom: 10px;">Call Us</h4>
                        <a href="tel:+2332443766010" style="color: rgba(255,255,255,0.9); text-decoration: none; font-size: 18px;">+233 244 376 6010</a>
                    </div>
                </div>
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div style="color: #fff;">
                        <i class="fa fa-envelope" style="font-size: 36px; margin-bottom: 20px; display: block;"></i>
                        <h4 style="font-size: 20px; font-weight: 600; margin-bottom: 10px;">Email Us</h4>
                        <a href="mailto:hello@bremanchambers.com" style="color: rgba(255,255,255,0.9); text-decoration: none; font-size: 18px;">hello@bremanchambers.com</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div style="color: #fff;">
                        <i class="fa fa-map-marker-alt" style="font-size: 36px; margin-bottom: 20px; display: block;"></i>
                        <h4 style="font-size: 20px; font-weight: 600; margin-bottom: 10px;">Visit Us</h4>
                        <p style="color: rgba(255,255,255,0.9); font-size: 18px; margin: 0;">Accra, Ghana</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
