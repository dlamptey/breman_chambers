@extends('layouts.app')

@section('title', 'About Us - Breman Chambers')

@section('content')
    <!-- Hero Section -->
    <section class="main-slider-one" style="width: 100%; position: relative;">
        <div class="main-slider-one__item" style="padding-top: 200px; padding-bottom: 120px; width: 100%; display: flex; align-items: center; min-height: 400px;">
            <div class="main-slider-one__bg" style="background-image: url({{ asset('assets/images/business-colleagues-studying-reports.jpg') }}); width: 100%;"></div>
            <div class="main-slider-one__overlay-one"></div>
            <div class="main-slider-one__overlay-two"></div>
            <div class="container" style="width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 15px;">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-slider-one__content" style="display: block; width: 100%; text-align: center; margin: 0 auto; position: relative; z-index: 10;">
                            <h2 class="main-slider-one__title" style="font-size: 48px; line-height: 1.2; text-align: center; margin: 0 auto 20px auto; display: block; width: 100%; transform: translateX(0) !important; opacity: 1 !important; overflow: visible; position: relative; z-index: 11; color: #fff !important; font-weight: 700;">About Us</h2>
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
                                    <li style="color: #fff; font-weight: 600;">About Us</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Mission & Vision Section -->
    <section style="padding: 120px 0; background: #f8f9fa;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div style="background: #fff; padding: 60px; height: 100%; box-shadow: 0 10px 40px rgba(0,0,0,0.08);">
                        <div style="width: 60px; height: 60px; background: #19223a; display: flex; align-items: center; justify-content: center; margin-bottom: 30px;">
                            <i class="fa fa-bullseye" style="color: #fff; font-size: 28px;"></i>
                        </div>
                        <h3 style="font-size: 32px; font-weight: 700; color: #19223a; margin-bottom: 20px;">Our Mission</h3>
                        <p style="color: #666; font-size: 16px; line-height: 1.8; margin-bottom: 0;">
                            To deliver strategic legal counsel that protects value, unlocks opportunity, and acts with absolute discretion. We blend local insight with cross-border experience to serve Ghana's most ambitious businesses and investors.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div style="background: #fff; padding: 60px; height: 100%; box-shadow: 0 10px 40px rgba(0,0,0,0.08);">
                        <div style="width: 60px; height: 60px; background: #19223a; display: flex; align-items: center; justify-content: center; margin-bottom: 30px;">
                            <i class="fa fa-eye" style="color: #fff; font-size: 28px;"></i>
                        </div>
                        <h3 style="font-size: 32px; font-weight: 700; color: #19223a; margin-bottom: 20px;">Our Vision</h3>
                        <p style="color: #666; font-size: 16px; line-height: 1.8; margin-bottom: 0;">
                            To be the trusted legal partner for Ghana's next generation of leaders, providing world-class counsel that enables sustainable growth, protects assets, and navigates complex regulatory landscapes with confidence.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Values Grid -->
    <section style="padding: 120px 0; background: #fff;">
        <div class="container">
            <div class="text-center" style="margin-bottom: 80px;">
                <span style="color: #19223a; font-size: 14px; letter-spacing: 2px; text-transform: uppercase; font-weight: 600;">Our Foundation</span>
                <h2 style="font-size: 48px; font-weight: 700; color: #19223a; margin-top: 20px; margin-bottom: 20px;">Core Values That Drive Us</h2>
                <p style="color: #666; font-size: 18px; max-width: 600px; margin: 0 auto;">Integrity. Excellence. Justice. These principles guide every decision we make and every relationship we build.</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div style="background: linear-gradient(135deg, #f8f9fa 0%, #fff 100%); padding: 40px; height: 100%; border: 2px solid transparent; transition: all 0.3s; cursor: pointer;" onmouseover="this.style.borderColor='#19223a'; this.style.transform='translateY(-5px)'" onmouseout="this.style.borderColor='transparent'; this.style.transform='translateY(0)'">
                        <div style="width: 80px; height: 80px; background: #19223a; display: flex; align-items: center; justify-content: center; margin-bottom: 30px;">
                            <i class="fa fa-handshake" style="color: #fff; font-size: 36px;"></i>
                        </div>
                        <h4 style="font-size: 24px; font-weight: 700; color: #19223a; margin-bottom: 15px;">Integrity</h4>
                        <p style="color: #666; line-height: 1.8; margin: 0;">
                            We operate with unwavering ethical standards, ensuring transparency and trust in every client relationship. Our word is our bond.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div style="background: linear-gradient(135deg, #f8f9fa 0%, #fff 100%); padding: 40px; height: 100%; border: 2px solid transparent; transition: all 0.3s; cursor: pointer;" onmouseover="this.style.borderColor='#19223a'; this.style.transform='translateY(-5px)'" onmouseout="this.style.borderColor='transparent'; this.style.transform='translateY(0)'">
                        <div style="width: 80px; height: 80px; background: #19223a; display: flex; align-items: center; justify-content: center; margin-bottom: 30px;">
                            <i class="fa fa-star" style="color: #fff; font-size: 36px;"></i>
                        </div>
                        <h4 style="font-size: 24px; font-weight: 700; color: #19223a; margin-bottom: 15px;">Excellence</h4>
                        <p style="color: #666; line-height: 1.8; margin: 0;">
                            We pursue the highest standards of legal practice, delivering exceptional results through meticulous attention to detail and continuous improvement.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div style="background: linear-gradient(135deg, #f8f9fa 0%, #fff 100%); padding: 40px; height: 100%; border: 2px solid transparent; transition: all 0.3s; cursor: pointer;" onmouseover="this.style.borderColor='#19223a'; this.style.transform='translateY(-5px)'" onmouseout="this.style.borderColor='transparent'; this.style.transform='translateY(0)'">
                        <div style="width: 80px; height: 80px; background: #19223a; display: flex; align-items: center; justify-content: center; margin-bottom: 30px;">
                            <i class="fa fa-lightbulb" style="color: #fff; font-size: 36px;"></i>
                        </div>
                        <h4 style="font-size: 24px; font-weight: 700; color: #19223a; margin-bottom: 15px;">Justice</h4>
                        <p style="color: #666; line-height: 1.8; margin: 0;">
                            We are committed to advocating for fair outcomes and protecting the rights of our clients with dedication, resolve, and unwavering commitment.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- What We Do Section -->
    <section style="padding: 120px 0; background: linear-gradient(135deg, #19223a 0%, #2a3a5a 100%); position: relative; overflow: hidden;">
        <div style="position: absolute; top: 0; right: 0; width: 50%; height: 100%; background-image: url({{ asset('assets/images/cheerful-afro-american-man-woman-standing-office-bottom-staircase.jpg') }}); background-size: cover; background-position: center; opacity: 0.1;"></div>
        <div class="container" style="position: relative; z-index: 1;">
            <div class="row">
                <div class="col-lg-6">
                    <span style="color: rgba(255,255,255,0.7); font-size: 14px; letter-spacing: 2px; text-transform: uppercase;">What We Do</span>
                    <h2 style="font-size: 48px; font-weight: 700; color: #fff; margin-top: 20px; margin-bottom: 40px;">Our Approach to Legal Excellence</h2>
                    <div style="margin-bottom: 30px;">
                        <div style="display: flex; gap: 20px; margin-bottom: 30px;">
                            <div style="flex-shrink: 0;">
                                <div style="width: 50px; height: 50px; background: rgba(255,255,255,0.1); display: flex; align-items: center; justify-content: center;">
                                    <i class="fa fa-check" style="color: #fff; font-size: 20px;"></i>
                                </div>
                            </div>
                            <div>
                                <h4 style="color: #fff; font-size: 20px; font-weight: 600; margin-bottom: 10px;">Transaction Counsel</h4>
                                <p style="color: rgba(255,255,255,0.8); line-height: 1.8; margin: 0;">For growth-focused companies navigating complex deals and capital raises.</p>
                            </div>
                        </div>
                        <div style="display: flex; gap: 20px; margin-bottom: 30px;">
                            <div style="flex-shrink: 0;">
                                <div style="width: 50px; height: 50px; background: rgba(255,255,255,0.1); display: flex; align-items: center; justify-content: center;">
                                    <i class="fa fa-check" style="color: #fff; font-size: 20px;"></i>
                                </div>
                            </div>
                            <div>
                                <h4 style="color: #fff; font-size: 20px; font-weight: 600; margin-bottom: 10px;">Governance Structures</h4>
                                <p style="color: rgba(255,255,255,0.8); line-height: 1.8; margin: 0;">Tailored frameworks for complex ownership and regulatory compliance.</p>
                            </div>
                        </div>
                        <div style="display: flex; gap: 20px;">
                            <div style="flex-shrink: 0;">
                                <div style="width: 50px; height: 50px; background: rgba(255,255,255,0.1); display: flex; align-items: center; justify-content: center;">
                                    <i class="fa fa-check" style="color: #fff; font-size: 20px;"></i>
                                </div>
                            </div>
                            <div>
                                <h4 style="color: #fff; font-size: 20px; font-weight: 600; margin-bottom: 10px;">Dispute Resolution</h4>
                                <p style="color: rgba(255,255,255,0.8); line-height: 1.8; margin: 0;">Strategic advocacy through negotiation, arbitration, and litigation.</p>
                            </div>
                        </div>
                    </div>
                    <a href="{{ url('/expertise') }}" class="procounsel-btn" style="margin-top: 20px;">
                        <i>Explore Our Expertise</i>
                        <span>Explore Our Expertise</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
