@extends('layouts.app')

@section('title', 'Our Expertise - Breman Chambers')

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
                            <h2 class="main-slider-one__title" style="font-size: 48px; line-height: 1.2; text-align: center; margin: 0 auto 20px auto; display: block; width: 100%; transform: translateX(0) !important; opacity: 1 !important; overflow: visible; position: relative; z-index: 11; color: #fff !important; font-weight: 700;">Our Expertise</h2>
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
                                    <li style="color: #fff; font-weight: 600;">Our Expertise</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->


    <!-- Services Grid with Detailed Cards -->
    <section style="padding: 120px 0; background: #f8f9fa;">
        <div class="container">
            <div class="row g-4">
                <!-- Service 1 -->
                <div class="col-lg-6">
                    <div style="background: #fff; overflow: hidden; box-shadow: 0 10px 40px rgba(0,0,0,0.08); height: 100%; display: flex; flex-direction: column; transition: all 0.3s;" onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 20px 60px rgba(0,0,0,0.15)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 40px rgba(0,0,0,0.08)'">
                        <div style="position: relative; height: 300px; overflow: hidden;">
                            <img src="{{ asset('assets/images/business-colleagues-studying-reports.jpg') }}" alt="Transactions & Financing" style="width: 100%; height: 100%; object-fit: cover;">
                            <div style="position: absolute; top: 30px; left: 30px; width: 70px; height: 70px; background: #19223a; display: flex; align-items: center; justify-content: center;">
                                <i class="fa fa-balance-scale" style="color: #fff; font-size: 32px;"></i>
                            </div>
                        </div>
                        <div style="padding: 40px; flex-grow: 1; display: flex; flex-direction: column;">
                            <h3 style="font-size: 28px; font-weight: 700; color: #19223a; margin-bottom: 15px;">Transactions & Financing</h3>
                            <p style="color: #666; line-height: 1.8; margin-bottom: 25px; flex-grow: 1;">
                                Structuring capital raises, secondary sales, and investor agreements with precision and pace. We help you navigate complex financial transactions while protecting your interests.
                            </p>
                            <ul style="list-style: none; padding: 0; margin: 0 0 25px 0;">
                                <li style="padding: 8px 0; color: #666; display: flex; align-items: center; gap: 10px;">
                                    <i class="fa fa-check-circle" style="color: #19223a;"></i>
                                    <span>Equity & Debt Financing</span>
                                </li>
                                <li style="padding: 8px 0; color: #666; display: flex; align-items: center; gap: 10px;">
                                    <i class="fa fa-check-circle" style="color: #19223a;"></i>
                                    <span>M&A Transactions</span>
                                </li>
                                <li style="padding: 8px 0; color: #666; display: flex; align-items: center; gap: 10px;">
                                    <i class="fa fa-check-circle" style="color: #19223a;"></i>
                                    <span>Investment Agreements</span>
                                </li>
                            </ul>
                            <a href="{{ url('/engagement') }}" style="color: #19223a; font-weight: 600; text-decoration: none; display: inline-flex; align-items: center; gap: 10px;">
                                Learn More <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="col-lg-6">
                    <div style="background: #fff; overflow: hidden; box-shadow: 0 10px 40px rgba(0,0,0,0.08); height: 100%; display: flex; flex-direction: column; transition: all 0.3s;" onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 20px 60px rgba(0,0,0,0.15)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 40px rgba(0,0,0,0.08)'">
                        <div style="position: relative; height: 300px; overflow: hidden;">
                            <img src="{{ asset('assets/images/cheerful-afro-american-man-woman-standing-office-bottom-staircase.jpg') }}" alt="Governance & Compliance" style="width: 100%; height: 100%; object-fit: cover;">
                            <div style="position: absolute; top: 30px; left: 30px; width: 70px; height: 70px; background: #19223a; display: flex; align-items: center; justify-content: center;">
                                <i class="fa fa-building" style="color: #fff; font-size: 32px;"></i>
                            </div>
                        </div>
                        <div style="padding: 40px; flex-grow: 1; display: flex; flex-direction: column;">
                            <h3 style="font-size: 28px; font-weight: 700; color: #19223a; margin-bottom: 15px;">Governance & Compliance</h3>
                            <p style="color: #666; line-height: 1.8; margin-bottom: 25px; flex-grow: 1;">
                                Designing governance frameworks and regulatory roadmaps for boards and family enterprises. We ensure your organization operates with clarity and compliance.
                            </p>
                            <ul style="list-style: none; padding: 0; margin: 0 0 25px 0;">
                                <li style="padding: 8px 0; color: #666; display: flex; align-items: center; gap: 10px;">
                                    <i class="fa fa-check-circle" style="color: #19223a;"></i>
                                    <span>Board Governance</span>
                                </li>
                                <li style="padding: 8px 0; color: #666; display: flex; align-items: center; gap: 10px;">
                                    <i class="fa fa-check-circle" style="color: #19223a;"></i>
                                    <span>Regulatory Compliance</span>
                                </li>
                                <li style="padding: 8px 0; color: #666; display: flex; align-items: center; gap: 10px;">
                                    <i class="fa fa-check-circle" style="color: #19223a;"></i>
                                    <span>Corporate Policies</span>
                                </li>
                            </ul>
                            <a href="{{ url('/engagement') }}" style="color: #19223a; font-weight: 600; text-decoration: none; display: inline-flex; align-items: center; gap: 10px;">
                                Learn More <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="col-lg-6">
                    <div style="background: #fff; overflow: hidden; box-shadow: 0 10px 40px rgba(0,0,0,0.08); height: 100%; display: flex; flex-direction: column; transition: all 0.3s;" onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 20px 60px rgba(0,0,0,0.15)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 40px rgba(0,0,0,0.08)'">
                        <div style="position: relative; height: 300px; overflow: hidden;">
                            <img src="{{ asset('assets/images/law-justice-gavel-statue-books.jpg') }}" alt="Dispute Resolution" style="width: 100%; height: 100%; object-fit: cover;">
                            <div style="position: absolute; top: 30px; left: 30px; width: 70px; height: 70px; background: #19223a; display: flex; align-items: center; justify-content: center;">
                                <i class="fa fa-gavel" style="color: #fff; font-size: 32px;"></i>
                            </div>
                        </div>
                        <div style="padding: 40px; flex-grow: 1; display: flex; flex-direction: column;">
                            <h3 style="font-size: 28px; font-weight: 700; color: #19223a; margin-bottom: 15px;">Dispute Resolution</h3>
                            <p style="color: #666; line-height: 1.8; margin-bottom: 25px; flex-grow: 1;">
                                Managed negotiations, arbitrations, and litigation to protect assets and reputations. We resolve conflicts efficiently while minimizing business disruption.
                            </p>
                            <ul style="list-style: none; padding: 0; margin: 0 0 25px 0;">
                                <li style="padding: 8px 0; color: #666; display: flex; align-items: center; gap: 10px;">
                                    <i class="fa fa-check-circle" style="color: #19223a;"></i>
                                    <span>Commercial Litigation</span>
                                </li>
                                <li style="padding: 8px 0; color: #666; display: flex; align-items: center; gap: 10px;">
                                    <i class="fa fa-check-circle" style="color: #19223a;"></i>
                                    <span>Arbitration & Mediation</span>
                                </li>
                                <li style="padding: 8px 0; color: #666; display: flex; align-items: center; gap: 10px;">
                                    <i class="fa fa-check-circle" style="color: #19223a;"></i>
                                    <span>Contract Disputes</span>
                                </li>
                            </ul>
                            <a href="{{ url('/engagement') }}" style="color: #19223a; font-weight: 600; text-decoration: none; display: inline-flex; align-items: center; gap: 10px;">
                                Learn More <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Service 4 -->
                <div class="col-lg-6">
                    <div style="background: #fff; overflow: hidden; box-shadow: 0 10px 40px rgba(0,0,0,0.08); height: 100%; display: flex; flex-direction: column; transition: all 0.3s;" onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 20px 60px rgba(0,0,0,0.15)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 40px rgba(0,0,0,0.08)'">
                        <div style="position: relative; height: 300px; overflow: hidden;">
                            <img src="{{ asset('assets/images/medium-shot-woman-working-as-lawyer.jpg') }}" alt="Advisory & Risk" style="width: 100%; height: 100%; object-fit: cover;">
                            <div style="position: absolute; top: 30px; left: 30px; width: 70px; height: 70px; background: #19223a; display: flex; align-items: center; justify-content: center;">
                                <i class="fa fa-briefcase" style="color: #fff; font-size: 32px;"></i>
                            </div>
                        </div>
                        <div style="padding: 40px; flex-grow: 1; display: flex; flex-direction: column;">
                            <h3 style="font-size: 28px; font-weight: 700; color: #19223a; margin-bottom: 15px;">Advisory & Risk</h3>
                            <p style="color: #666; line-height: 1.8; margin-bottom: 25px; flex-grow: 1;">
                                Executive advisory, risk assessments, and bespoke counsel for mission-critical decisions. We provide strategic guidance when it matters most.
                            </p>
                            <ul style="list-style: none; padding: 0; margin: 0 0 25px 0;">
                                <li style="padding: 8px 0; color: #666; display: flex; align-items: center; gap: 10px;">
                                    <i class="fa fa-check-circle" style="color: #19223a;"></i>
                                    <span>Strategic Advisory</span>
                                </li>
                                <li style="padding: 8px 0; color: #666; display: flex; align-items: center; gap: 10px;">
                                    <i class="fa fa-check-circle" style="color: #19223a;"></i>
                                    <span>Risk Assessment</span>
                                </li>
                                <li style="padding: 8px 0; color: #666; display: flex; align-items: center; gap: 10px;">
                                    <i class="fa fa-check-circle" style="color: #19223a;"></i>
                                    <span>Executive Counsel</span>
                                </li>
                            </ul>
                            <a href="{{ url('/engagement') }}" style="color: #19223a; font-weight: 600; text-decoration: none; display: inline-flex; align-items: center; gap: 10px;">
                                Learn More <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section style="padding: 120px 0; background: #fff;">
        <div class="container">
            <div class="text-center" style="margin-bottom: 80px;">
                <span style="color: #19223a; font-size: 14px; letter-spacing: 2px; text-transform: uppercase; font-weight: 600;">How We Work</span>
                <h2 style="font-size: 48px; font-weight: 700; color: #19223a; margin-top: 20px;">Our Process</h2>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <div style="text-align: center;">
                        <div style="width: 100px; height: 100px; background: linear-gradient(135deg, #19223a 0%, #2a3a5a 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 30px; position: relative;">
                            <span style="font-size: 36px; font-weight: 700; color: #fff;">1</span>
                        </div>
                        <h4 style="font-size: 22px; font-weight: 700; color: #19223a; margin-bottom: 15px;">Consultation</h4>
                        <p style="color: #666; line-height: 1.8; margin: 0;">We begin with a comprehensive consultation to understand your unique needs and objectives.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <div style="text-align: center;">
                        <div style="width: 100px; height: 100px; background: linear-gradient(135deg, #19223a 0%, #2a3a5a 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 30px; position: relative;">
                            <span style="font-size: 36px; font-weight: 700; color: #fff;">2</span>
                        </div>
                        <h4 style="font-size: 22px; font-weight: 700; color: #19223a; margin-bottom: 15px;">Strategy</h4>
                        <p style="color: #666; line-height: 1.8; margin: 0;">We develop a tailored strategy that aligns with your goals and protects your interests.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <div style="text-align: center;">
                        <div style="width: 100px; height: 100px; background: linear-gradient(135deg, #19223a 0%, #2a3a5a 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 30px; position: relative;">
                            <span style="font-size: 36px; font-weight: 700; color: #fff;">3</span>
                        </div>
                        <h4 style="font-size: 22px; font-weight: 700; color: #19223a; margin-bottom: 15px;">Execution</h4>
                        <p style="color: #666; line-height: 1.8; margin: 0;">We execute with precision, keeping you informed at every step of the process.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div style="text-align: center;">
                        <div style="width: 100px; height: 100px; background: linear-gradient(135deg, #19223a 0%, #2a3a5a 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 30px; position: relative;">
                            <span style="font-size: 36px; font-weight: 700; color: #fff;">4</span>
                        </div>
                        <h4 style="font-size: 22px; font-weight: 700; color: #19223a; margin-bottom: 15px;">Results</h4>
                        <p style="color: #666; line-height: 1.8; margin: 0;">We deliver results that exceed expectations and provide ongoing support.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
