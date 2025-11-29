@extends('layouts.app')

@section('title', 'Home')

@section('content')
      <!-- main-slider-start -->
      <section class="main-slider-one" id="home">
            <div class="main-slider-one__carousel procounsel-owl__carousel owl-carousel" data-owl-options='{
                "loop": true,
                "animateOut": "fadeOut",
                "animateIn": "fadeIn",
                "items": 1,
                "autoplay": true,
                "autoplayTimeout": 7000,
                "smartSpeed": 1000,
                "nav": false,
                "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                "dots": true,
                "margin": 0
                }'>
                <div class="item">
                    <div class="main-slider-one__item">
                        <div class="main-slider-one__bg" style="background-image: url(assets/images/backgrounds/slider-1-1.jpg);"></div><!-- bg -->
                        <div class="main-slider-one__overlay-one"></div>
                        <div class="main-slider-one__overlay-two"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 ">
                                    <div class="main-slider-one__content">
                                        <h2 class="main-slider-one__title">Strategic <br />Legal Counsel<br />for Ghana’s Leaders
                                        </h2><!-- slider-title -->
                                        <p class="main-slider-one__text">
                                            Breman Chambers partners with Ghanaian founders, investors, and family offices to deliver decisive legal strategy across growth, governance, and cross-border mandates.
                                        </p><!-- slider-text -->
                                        <div class="main-slider-one__btn">
                                            <a href="#consult" class="procounsel-btn"> <i> Start Consultation</i>
                                                <span> Start Consultation</span></a><!-- slider-btn -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- item -->
                <div class="item">
                    <div class="main-slider-one__item">
                        <div class="main-slider-one__bg" style="background-image: url(assets/images/backgrounds/slider-1-2.jpg);"></div><!-- bg -->
                        <div class="main-slider-one__overlay-one"></div>
                        <div class="main-slider-one__overlay-two"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 ">
                                    <div class="main-slider-one__content">
                                        <h2 class="main-slider-one__title">Corporate <br />& Commercial <br />Transactions
                                        </h2><!-- slider-title -->
                                        <p class="main-slider-one__text">
                                            From equity financings to regulatory clearances, we structure transactions that keep Ghanaian and Pan-African ventures compliant, competitive, and investor ready.
                                        </p><!-- slider-text -->
                                        <div class="main-slider-one__btn">
                                            <a href="#expertise" class="procounsel-btn"> <i> View Expertise</i>
                                                <span> View Expertise</span></a><!-- slider-btn -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- item -->
                <div class="item">
                    <div class="main-slider-one__item">
                        <div class="main-slider-one__bg" style="background-image: url(assets/images/backgrounds/slider-1-3.jpg);"></div><!-- bg -->
                        <div class="main-slider-one__overlay-one"></div>
                        <div class="main-slider-one__overlay-two"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 ">
                                    <div class="main-slider-one__content">
                                        <h2 class="main-slider-one__title">Dispute <br />Resolution & <br />Risk Management
                                        </h2><!-- slider-title -->
                                        <p class="main-slider-one__text">
                                            We combine courtroom experience with pragmatic negotiation to protect assets, resolve disputes, and preserve reputations across Ghana’s most demanding sectors.
                                        </p><!-- slider-text -->
                                        <div class="main-slider-one__btn">
                                            <a href="#consult" class="procounsel-btn"> <i> Speak with Counsel</i>
                                                <span> Speak with Counsel</span></a><!-- slider-btn -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- item -->
            </div>
        </section>
        <!-- main-slider-end -->
        <section class="feature-one">
            <div class="container">
                <div class="feature-one__inner">
                    <div class="row gutter-y-0">
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="00ms">
                            <div class="feature-one__item ">
                                <div class="feature-one__item__icon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <h3 class="feature-one__item__title">Book Your <br> appointment</h3>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="00ms">
                            <div class="feature-one__item feature-one__item--border-left justify-content-center">
                                <div class="feature-one__item__icon">
                                    <i class="fa fa-handshake"></i>
                                </div>
                                <h3 class="feature-one__item__title">Get free <br> experts advice</h3>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="00ms">
                            <div class="feature-one__item feature-one__item--border-left justify-content-end">
                                <div class="feature-one__item__icon">
                                    <i class="fa fa-balance-scale"></i>
                                </div>
                                <h3 class="feature-one__item__title">Best legal <br> service provider</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       
        <section class="about-one" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="about-one__image wow fadeInLeft " data-wow-delay="00ms">
                            <img src="{{ asset('assets/images/business-colleagues-studying-reports.jpg') }}" alt="Breman Chambers - Professional Legal Services">
                            
                           
                            <div class="about-one__image__info">
                                <div class="about-one__image__info__icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div>
                                    <span>Call anytime</span>
                                    <a href="tel:+2332443766010">+233 244 376 6010</a>
                                </div>
                            </div>
                        </div><!-- /.about-one__image -->
                    </div><!-- /.col-lg-5 -->
                    <div class="col-lg-7 wow fadeInRight" data-wow-delay="300ms">
                        <div class="about-one__inner">
                            <div class="about-one__content">
                                <div class="sec-title text-left">
                                    <div class="sec-title__tagline bw-split-in-up-fast d-inline-flex align-items-center gap-2">
                                        <span class="rounded-full bg-sky-500/10 px-3 py-1 text-xs font-semibold uppercase tracking-[0.3em] text-sky-500">
                                        About Us
                                        </span>
                                    </div><!-- /.sec-title__tagline -->

                                    <h3 class="sec-title__title bw-split-in-up">Your Trusted <span>Legal Advocates</span></h3><!-- /.sec-title__title -->
                                </div><!-- /.sec-title -->

                                <p class="about-one__content__text">
                                    Breman Chambers delivers strategic counsel for Ghanaian businesses, investors, and family offices navigating pivotal transactions, governance, and disputes.
                                </p>
                                <p class="about-one__content__text">
                                    We blend local insight with cross-border experience to protect value, unlock opportunity, and act with absolute discretion.
                                </p>

                                <div class="about-one__content__box">
                                    <div class="about-one__content__box__img bw-img-anim-left">
                                        <img src="{{ asset('assets/images/resources/about-1-3.png') }}" alt="Breman Chambers attorneys collaborating">
                                    </div>
                                    <div class="d-flex flex-column justify-content-between align-items-start">
                                        <ul class="about-one__content__list">
                                            <li>
                                                <i class="fa fa-check text-sky-500 me-2"></i>
                                                Transaction counsel for growth-focused companies
                                            </li>
                                            <li>
                                                <i class="fa fa-check text-sky-500 me-2"></i>
                                                Governance structures tailored to complex ownership
                                            </li>
                                            <li>
                                                <i class="fa fa-check text-sky-500 me-2"></i>
                                                Dispute resolution driven by strategic advocacy
                                            </li>
                                        </ul>
                                        <a href="#consult" class="procounsel-btn"><i>Discover More</i><span>Discover
                                                More
                                            </span>
                                        </a>
                                    </div>
                                </div><!-- box -->
                            </div><!-- /.why-choose-two__content -->
                        </div>
                    </div><!-- /.col-lg-7 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.about-one -->
        <!-- Service Start -->
        <section class="service-one" id="services">
            <div class="service-one__bg" style="background-image: url(assets/images/shapes/service-bg-1.png);"></div>
            <div class="container-fluid">
                <div class="sec-title text-center">

                    <div class="sec-title__tagline bw-split-in-up-fast d-inline-flex align-items-center gap-2">
                        Our Services
                    </div><!-- /.sec-title__tagline -->

                    <h3 class="sec-title__title bw-split-in-up">We’re Providing Best <br> <span>Service To Clients</span></h3><!-- /.sec-title__title -->
                </div><!-- /.sec-title -->
                <div class="row gutter-y-30">
                    <div class="col-xl-3 col-md-6 wow fadeInUp" data-wow-delay="00ms">
                        <div class="service-one__item">
                            <div class="service-one__item__top">
                                <h3 class="service-one__item__title">
                                    <a href="service-d-criminal.html">Transactions & Financing</a>
                                </h3>
                                <span class="service-one__item__count"></span>
                            </div>
                            <p class="service-one__item__text">
                                Structuring capital raises, secondary sales, and investor agreements with precision and pace.
                            </p>
                            <div class="service-one__item__image">
                                <img src="{{ asset('assets/images/business-colleagues-studying-reports.jpg') }}" alt="Transactions & Financing" style="object-fit: cover; width: 100%; height: 200px;">
                                <div class="service-one__item__icon">
                                    <i class="fa fa-balance-scale"></i>
                                </div>
                            </div>
                        </div><!-- /.service-card-one -->
                    </div><!-- item -->
                    <div class="col-xl-3 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="service-one__item">
                            <div class="service-one__item__top">
                                <h3 class="service-one__item__title">
                                    <a href="service-d-family.html">Governance & Compliance</a>
                                </h3>
                                <span class="service-one__item__count"></span>
                            </div>
                            <p class="service-one__item__text">
                                Designing governance frameworks and regulatory roadmaps for boards and family enterprises.
                            </p>
                            <div class="service-one__item__image">
                                <img src="{{ asset('assets/images/cheerful-afro-american-man-woman-standing-office-bottom-staircase.jpg') }}" alt="Governance & Compliance" style="object-fit: cover; width: 100%; height: 200px;">
                                <div class="service-one__item__icon">
                                    <i class="fa fa-building"></i>
                                </div>
                            </div>
                        </div><!-- /.service-card-one -->
                    </div><!-- item -->
                    <div class="col-xl-3 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="service-one__item">
                            <div class="service-one__item__top">
                                <h3 class="service-one__item__title">
                                    <a href="service-d-real-estate.html">
                                        Dispute Resolution
                                    </a>
                                </h3>
                                <span class="service-one__item__count"></span>
                            </div>
                            <p class="service-one__item__text">
                                Managed negotiations, arbitrations, and litigation to protect assets and reputations.
                            </p>
                            <div class="service-one__item__image">
                                <img src="{{ asset('assets/images/law-justice-gavel-statue-books.jpg') }}" alt="Dispute Resolution" style="object-fit: cover; width: 100%; height: 200px;">
                                <div class="service-one__item__icon">
                                    <i class="fa fa-gavel"></i>
                                </div>
                            </div>
                        </div><!-- /.service-card-one -->
                    </div><!-- item -->
                    <div class="col-xl-3 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="service-one__item">
                            <div class="service-one__item__top">
                                <h3 class="service-one__item__title">
                                    <a href="service-d-employment.html">
                                        Advisory & Risk
                                    </a>
                                </h3>
                                <span class="service-one__item__count"></span>
                            </div>
                            <p class="service-one__item__text">
                                Executive advisory, risk assessments, and bespoke counsel for mission-critical decisions.
                            </p>
                            <div class="service-one__item__image">
                                <img src="{{ asset('assets/images/medium-shot-woman-working-as-lawyer.jpg') }}" alt="Advisory & Risk" style="object-fit: cover; width: 100%; height: 200px;">
                                <div class="service-one__item__icon">
                                    <i class="fa fa-briefcase"></i>
                                </div>
                            </div>
                        </div><!-- /.service-card-one -->
                    </div><!-- item -->
                </div>
            </div>
            
        </section>
       
        
        <section class="expertise-showcase" style="padding: 120px 0; background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);">
            <div class="container">
                <div class="sec-title text-center" style="margin-bottom: 80px;">
                                <div class="sec-title__tagline bw-split-in-up-fast d-inline-flex align-items-center gap-2">
                                    <span class="rounded-full bg-sky-500/10 px-3 py-1 text-xs font-semibold uppercase tracking-[0.3em] text-sky-500">
                            Our Approach
                                    </span>
                                </div>
                    <h3 class="sec-title__title bw-split-in-up" style="margin-top: 20px;">How We Deliver <br><span>Exceptional Results</span></h3>
                                </div>

                <div class="row" style="margin: 0 -20px;">
                    <div class="col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="00ms" style="padding: 0 20px; margin-bottom: 40px;">
                        <div class="expertise-item" style="background: #fff; overflow: hidden; box-shadow: 0 10px 40px rgba(0,0,0,0.08); height: 100%;">
                            <div style="position: relative; height: 300px; overflow: hidden;">
                                <img src="{{ asset('assets/images/business-colleagues-studying-reports.jpg') }}" alt="Strategic Planning" style="width: 100%; height: 100%; object-fit: cover;">
                                <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(to top, rgba(0,0,0,0.8), transparent); padding: 30px;">
                                    <h4 style="color: #fff; font-size: 24px; font-weight: 600; margin: 0;">Strategic Planning</h4>
                                    </div>
                                </div>
                            <div style="padding: 40px;">
                                <p style="color: #666; line-height: 1.8; margin: 0;">
                                    We combine deep legal expertise with business acumen to craft strategies that protect your interests while advancing your objectives. Every decision is informed by years of experience across Ghana's most complex transactions.
                                </p>
                                    </div>
                                </div>
                            </div>

                    <div class="col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="100ms" style="padding: 0 20px; margin-bottom: 40px;">
                        <div class="expertise-item" style="background: #fff; overflow: hidden; box-shadow: 0 10px 40px rgba(0,0,0,0.08); height: 100%;">
                            <div style="position: relative; height: 300px; overflow: hidden;">
                                <img src="{{ asset('assets/images/medium-shot-woman-working-as-lawyer.jpg') }}" alt="Client Collaboration" style="width: 100%; height: 100%; object-fit: cover;">
                                <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(to top, rgba(0,0,0,0.8), transparent); padding: 30px;">
                                    <h4 style="color: #fff; font-size: 24px; font-weight: 600; margin: 0;">Client Collaboration</h4>
                        </div>
                    </div>
                            <div style="padding: 40px;">
                                <p style="color: #666; line-height: 1.8; margin: 0;">
                                    Your success is our success. We work as an extension of your team, understanding your business deeply and responding with precision. Our collaborative approach ensures seamless integration with your operations.
                                </p>
                        </div>
                    </div>
                    </div>

                    <div class="col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="200ms" style="padding: 0 20px; margin-bottom: 40px;">
                        <div class="expertise-item" style="background: #fff; overflow: hidden; box-shadow: 0 10px 40px rgba(0,0,0,0.08); height: 100%;">
                            <div style="position: relative; height: 300px; overflow: hidden;">
                                <img src="{{ asset('assets/images/law-justice-gavel-statue-books.jpg') }}" alt="Legal Excellence" style="width: 100%; height: 100%; object-fit: cover;">
                                <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(to top, rgba(0,0,0,0.8), transparent); padding: 30px;">
                                    <h4 style="color: #fff; font-size: 24px; font-weight: 600; margin: 0;">Legal Excellence</h4>
            </div>
                        </div>
                            <div style="padding: 40px;">
                                <p style="color: #666; line-height: 1.8; margin: 0;">
                                    With a foundation built on integrity and excellence, we navigate complex legal landscapes with confidence. Our commitment to justice and ethical practice guides every engagement, ensuring outcomes that stand the test of time.
                                </p>
                            </div>
                        </div>
                        </div>

                    <div class="col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="300ms" style="padding: 0 20px; margin-bottom: 40px;">
                        <div class="expertise-item" style="background: #fff; overflow: hidden; box-shadow: 0 10px 40px rgba(0,0,0,0.08); height: 100%;">
                            <div style="position: relative; height: 300px; overflow: hidden;">
                                <img src="{{ asset('assets/images/cheerful-afro-american-man-woman-standing-office-bottom-staircase.jpg') }}" alt="Trusted Partnership" style="width: 100%; height: 100%; object-fit: cover;">
                                <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(to top, rgba(0,0,0,0.8), transparent); padding: 30px;">
                                    <h4 style="color: #fff; font-size: 24px; font-weight: 600; margin: 0;">Trusted Partnership</h4>
                            </div>
                        </div>
                            <div style="padding: 40px;">
                                <p style="color: #666; line-height: 1.8; margin: 0;">
                                    Long-term relationships built on trust and results. We're not just your legal advisors—we're your strategic partners, committed to your growth and success. Our clients know we have their back, every step of the way.
                                </p>
                        </div>
                            </div>
                        </div>
                </div>
            </div>
        </section>
       
        <section class="values-showcase" id="values" style="padding: 120px 0; position: relative;">
            <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-image: url({{ asset('assets/images/business-colleagues-studying-reports.jpg') }}); background-size: cover; background-position: center; z-index: 0;"></div>
            <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-color: #19223a; opacity: 0.7; z-index: 1;"></div>
            <div class="container" style="position: relative; z-index: 2;">
                <div class="sec-title text-center" style="margin-bottom: 80px;">
                    <div class="sec-title__tagline bw-split-in-up-fast d-inline-flex align-items-center gap-2">
                        <span class="rounded-full bg-sky-500/10 px-3 py-1 text-xs font-semibold uppercase tracking-[0.3em] text-sky-500">
                            Our Core Values
                        </span>
                    </div>
                    <h3 class="sec-title__title bw-split-in-up" style="margin-top: 20px; color: #fff;">What Drives <br><span>Our Practice</span></h3>
                                    </div>

                <div class="row" style="margin: 0 -20px;">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="00ms" style="padding: 0 20px; margin-bottom: 40px;">
                        <div style="background: #fff; overflow: hidden; box-shadow: 0 15px 50px rgba(0,0,0,0.1); height: 100%; transition: transform 0.3s ease, box-shadow 0.3s ease;" onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 20px 60px rgba(0,0,0,0.15)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 15px 50px rgba(0,0,0,0.1)';">
                            <div style="position: relative; height: 280px; overflow: hidden;">
                                <img src="{{ asset('assets/images/african-business-male-people-shaking-hands.jpg') }}" alt="Partnership" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;" onmouseover="this.style.transform='scale(1.1)';" onmouseout="this.style.transform='scale(1)';">
                                    </div>
                            <div style="padding: 40px;">
                                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #c7954a, #b8823a); display: flex; align-items: center; justify-content: center; margin-bottom: 25px;">
                                    <i class="fa fa-handshake" style="color: #fff; font-size: 28px;"></i>
                                </div>
                                <h4 style="font-size: 24px; font-weight: 600; color: #19223a; margin-bottom: 15px;">Partnership First</h4>
                                <p style="color: #666; line-height: 1.8; margin: 0;">
                                    We build lasting relationships based on trust and mutual respect. Every engagement is a partnership where your success becomes our shared achievement.
                                </p>
                                    </div>
                                    </div>
                                </div>

                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms" style="padding: 0 20px; margin-bottom: 40px;">
                        <div style="background: #fff; overflow: hidden; box-shadow: 0 15px 50px rgba(0,0,0,0.1); height: 100%; transition: transform 0.3s ease, box-shadow 0.3s ease;" onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 20px 60px rgba(0,0,0,0.15)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 15px 50px rgba(0,0,0,0.1)';">
                            <div style="position: relative; height: 280px; overflow: hidden;">
                                <img src="{{ asset('assets/images/executive-reviewing-notes.jpg') }}" alt="Excellence" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;" onmouseover="this.style.transform='scale(1.1)';" onmouseout="this.style.transform='scale(1)';">
                                    </div>
                            <div style="padding: 40px;">
                                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #c7954a, #b8823a); display: flex; align-items: center; justify-content: center; margin-bottom: 25px;">
                                    <i class="fa fa-star" style="color: #fff; font-size: 28px;"></i>
                                </div>
                                <h4 style="font-size: 24px; font-weight: 600; color: #19223a; margin-bottom: 15px;">Excellence in Execution</h4>
                                <p style="color: #666; line-height: 1.8; margin: 0;">
                                    Precision and attention to detail define our work. We deliver solutions that not only meet but exceed expectations, ensuring every mandate is handled with the highest standards.
                                </p>
                            </div>
                        </div>
                                    </div>

                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms" style="padding: 0 20px; margin-bottom: 40px;">
                        <div style="background: #fff; overflow: hidden; box-shadow: 0 15px 50px rgba(0,0,0,0.1); height: 100%; transition: transform 0.3s ease, box-shadow 0.3s ease;" onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 20px 60px rgba(0,0,0,0.15)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 15px 50px rgba(0,0,0,0.1)';">
                            <div style="position: relative; height: 280px; overflow: hidden;">
                                <img src="{{ asset('assets/images/young-businessmen-standing-together-holding-laptop-discussing-business.jpg') }}" alt="Innovation" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;" onmouseover="this.style.transform='scale(1.1)';" onmouseout="this.style.transform='scale(1)';">
                                    </div>
                            <div style="padding: 40px;">
                                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #c7954a, #b8823a); display: flex; align-items: center; justify-content: center; margin-bottom: 25px;">
                                    <i class="fa fa-lightbulb" style="color: #fff; font-size: 28px;"></i>
                                </div>
                                <h4 style="font-size: 24px; font-weight: 600; color: #19223a; margin-bottom: 15px;">Strategic Innovation</h4>
                                <p style="color: #666; line-height: 1.8; margin: 0;">
                                    We combine traditional legal expertise with innovative approaches, staying ahead of regulatory changes and market dynamics to provide forward-thinking counsel.
                                </p>
                                    </div>
                                </div>
                                    </div>
                                    </div>
                                </div>
        </section>
        <section class="contact-one">
            <div class="contact-one__bg" style="background-image: url({{ asset('assets/images/cheerful-afro-american-man-woman-standing-office-bottom-staircase.jpg') }}); background-size: cover; background-position: center;"></div>
            <div class="contact-one__overlay"></div>
            <div class="container">
                <div class="contact-one__wrapper">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="sec-title text-left">

                                <div class="sec-title__tagline bw-split-in-up-fast d-inline-flex align-items-center gap-2">
                                    <div>
                                        <svg class="hammer" width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M21.6562 20.875H10.7188C10.5115 20.875 10.3128 20.9573 10.1663 21.1038C10.0198 21.2503 9.9375 21.449 9.9375 21.6562C9.9375 21.8635 10.0198 22.0622 10.1663 22.2087C10.3128 22.3552 10.5115 22.4375 10.7188 22.4375H21.6562C21.8635 22.4375 22.0622 22.3552 22.2087 22.2087C22.3552 22.0622 22.4375 21.8635 22.4375 21.6562C22.4375 21.449 22.3552 21.2503 22.2087 21.1038C22.0622 20.9573 21.8635 20.875 21.6562 20.875Z" />
                                            <path d="M13.8056 16.9688C13.1943 16.9695 12.6083 17.2126 12.1761 17.6448C11.7439 18.0771 11.5007 18.6631 11.5 19.2744V20.0938H20.875V19.2744C20.8743 18.6631 20.6311 18.0771 20.1989 17.6448C19.7667 17.2126 19.1807 16.9695 18.5694 16.9688H13.8056Z" />
                                            <path d="M15.9585 13.6149C15.9006 13.6678 15.8349 13.7114 15.7637 13.7442L15.989 13.9696C16.4566 14.4355 17.0898 14.6971 17.7499 14.697C18.41 14.6969 19.0432 14.4352 19.5107 13.9693L21.7812 11.698C22.0124 11.4668 22.1959 11.1924 22.321 10.8903C22.4462 10.5882 22.5106 10.2645 22.5106 9.9375C22.5106 9.61053 22.4462 9.28677 22.321 8.9847C22.1959 8.68263 22.0124 8.40818 21.7812 8.17701L21.5888 7.98456L15.9585 13.6149Z" />
                                            <path d="M9.2226 7.20295L14.8529 1.57267C14.9108 1.51976 14.9765 1.47611 15.0478 1.44326L14.8224 1.21791C14.3548 0.752021 13.7216 0.490468 13.0615 0.49054C12.4014 0.490611 11.7682 0.752302 11.3007 1.21829L9.03015 3.48915C8.79891 3.72035 8.61548 3.99484 8.49034 4.29694C8.36519 4.59904 8.30078 4.92283 8.30078 5.24982C8.30078 5.57681 8.36519 5.9006 8.49034 6.2027C8.61548 6.5048 8.79891 6.77929 9.03015 7.01049L9.2226 7.20295Z" />
                                            <path d="M14.3015 12.2813L14.0726 12.5102C13.9993 12.5825 13.9411 12.6687 13.9012 12.7637C13.8613 12.8586 13.8406 12.9605 13.8403 13.0635C13.84 13.1665 13.8601 13.2686 13.8993 13.3638C13.9386 13.459 13.9963 13.5455 14.0691 13.6184C14.142 13.6912 14.2285 13.7489 14.3237 13.7882C14.4189 13.8274 14.521 13.8475 14.624 13.8471C14.727 13.8468 14.8289 13.8261 14.9238 13.7863C15.0188 13.7464 15.105 13.6881 15.1773 13.6149L21.4273 7.36485C21.5716 7.21791 21.6521 7.01992 21.6511 6.81397C21.6502 6.60802 21.568 6.41077 21.4223 6.26514C21.2767 6.11951 21.0795 6.03729 20.8735 6.03635C20.6676 6.03542 20.4696 6.11586 20.3226 6.26016L20.0937 6.48907L16.5113 2.90602L16.7398 2.67735C16.8841 2.53041 16.9646 2.33242 16.9636 2.12647C16.9627 1.92052 16.8805 1.72327 16.7348 1.57764C16.5892 1.43201 16.392 1.34979 16.186 1.34885C15.9801 1.34792 15.7821 1.42836 15.6351 1.57266L9.38514 7.82266C9.31152 7.89496 9.25296 7.98112 9.21283 8.07618C9.17269 8.17123 9.15179 8.27329 9.15132 8.37647C9.15086 8.47965 9.17083 8.5819 9.2101 8.67731C9.24937 8.77273 9.30715 8.85942 9.38011 8.93238C9.45307 9.00534 9.53976 9.06312 9.63518 9.10239C9.73059 9.14166 9.83284 9.16163 9.93602 9.16117C10.0392 9.1607 10.1413 9.1398 10.2363 9.09966C10.3314 9.05953 10.4175 9.00097 10.4898 8.92735L10.7187 8.69844L10.7859 8.76559L1.18201 18.3695C0.953685 18.5955 0.772269 18.8644 0.648189 19.1608C0.524109 19.4571 0.459812 19.7751 0.458992 20.0963C0.458172 20.4176 0.520846 20.7359 0.643411 21.0328C0.765976 21.3298 0.946017 21.5996 1.17319 21.8268C1.40036 22.054 1.67018 22.234 1.96715 22.3566C2.26412 22.4791 2.58239 22.5418 2.90365 22.541C3.22492 22.5402 3.54286 22.4759 3.8392 22.3518C4.13554 22.2277 4.40444 22.0463 4.63045 21.818L14.2344 12.2141L14.3015 12.2813Z" />
                                        </svg>
                                    </div>
                                    Contact With Us
                                </div><!-- /.sec-title__tagline -->

                                <h3 class="sec-title__title bw-split-in-up">Feel Free to <br><span> Write Us Anytime</span> </h3><!-- /.sec-title__title -->
                            </div><!-- /.sec-title -->
                            <div class="contact-one__content">
                                <div class="contact-one__content__bg bw-img-anim-left" style="background-image: url({{ asset('assets/images/business-colleagues-studying-reports.jpg') }});"></div>
                                <ul class="list-unstyled contact-one__info">
                                    <li class="contact-one__info__item">
                                        <div class="contact-one__info__icon">
                                            <i class="fa fa-phone"></i>
                                            <span class="contact-one__info__icon__zoom">
                                                <i class="fa fa-phone"></i>
                                            </span>
                                        </div>
                                        <div class="contact-one__info__content">
                                            <p class="contact-one__info__text">
                                                <a href="tel:+2332443766010">+233 244 376 6010</a><br>
                                                <a href="tel:+2332443766010">+233 244 376 6010</a>
                                            </p><!-- /.contact-one__info__text -->
                                        </div><!-- /.contact-one__info__content -->
                                    </li>
                                    <li class="contact-one__info__item">
                                        <div class="contact-one__info__icon">
                                            <i class="fa fa-envelope"></i>
                                            <span class="contact-one__info__icon__zoom">
                                                <i class="fa fa-envelope"></i>
                                            </span>
                                        </div>
                                        <div class="contact-one__info__content">
                                            <p class="contact-one__info__text">
                                                <a href="mailto:hello@bremanchambers.com">hello@bremanchambers.com</a><br>
                                                <a href="https://bremanchambers.com">www.bremanchambers.com</a>
                                            </p><!-- /.contact-one__info__text -->
                                        </div><!-- /.contact-one__info__content -->
                                    </li>
                                    <li class="contact-one__info__item">
                                        <div class="contact-one__info__icon">
                                            <i class="fa fa-map-marker-alt"></i>
                                            <span class="contact-one__info__icon__zoom">
                                                <i class="fa fa-map-marker-alt"></i>
                                            </span>
                                        </div>
                                        <div class="contact-one__info__content">
                                            <p class="contact-one__info__text">
                                                Accra, Ghana<br>
                                                <a href="https://maps.google.com/?q=Accra,Ghana" target="_blank">View on Map</a>
                                            </p><!-- /.contact-one__info__text -->
                                        </div><!-- /.contact-one__info__content -->
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-6 wow fadeInUp" data-wow-delay="200ms">
                            <form class="contact-one__form contact-form-validated form-one" action="https://bracketweb.com/procounsel-html/inc/sendemail.php">
                                <div class="contact-one__form__bg-one"></div>
                                <div class="contact-one__form__bg-two"></div>
                                <div class="form-one__group">
                                    <div class="form-one__control form-one__control--full">
                                        <input id="name" type="text" name="name" placeholder="Name">
                                    </div><!-- /.form-one__control form-one__control--full -->
                                    <div class="form-one__control form-one__control--full">
                                        <input id="email" type="email" name="email" placeholder="Email Address">
                                    </div><!-- /.form-one__control form-one__control--full -->
                                    <div class="form-one__control form-one__control--full">
                                        <input id="phone" type="text" name="phone" placeholder="Phone">
                                    </div><!-- /.form-one__control form-one__control--full -->
                                    <div class="form-one__control form-one__control--full">
                                        <input id="subject" type="text" name="subject" placeholder="Subject">
                                    </div><!-- /.form-one__control form-one__control--full -->
                                    <div class="form-one__control form-one__control--full">
                                        <textarea id="message" name="message" placeholder="Message"></textarea><!-- /# -->
                                    </div><!-- /.form-one__control -->
                                    <div class="form-one__control form-one__control--full">
                                        <button type="submit" class="procounsel-btn">
                                            <i>Send Message</i>
                                            <span>Send Message</span>
                                        </button>
                                    </div><!-- /.form-one__control -->
                                </div><!-- /.form-one__group -->
                            </form>
                        </div><!-- /.col-xl-5 -->
                    </div>
                </div>
            </div>
        </section>

       
@endsection

