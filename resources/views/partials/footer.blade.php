<footer class="main-footer">
    <div class="main-footer__bg" style="background-image: url({{ asset('assets/images/backgrounds/footer-bg.png') }});"></div>
    <div class="main-footer__top">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xl-4 wow fadeInUp" data-wow-delay="00ms">
                    <div class="footer-widget footer-widget--about">
                        <a href="{{ url('/') }}" class="footer-widget__logo" style="display: inline-block; background-color: white; padding: 15px 20px; border-radius: 8px;">
                            <img src="{{ asset('assets/images/logo.png') }}" width="200" alt="Breman Chambers">
                        </a>
                        <p class="footer-widget__text">
                            Integrity. Excellence. Justice. Delivering tailored legal services across corporate, property, family, criminal, contract, and civil matters.
                        </p>
                    </div><!-- /.footer-widget -->
                </div><!-- /.col-md-6 -->
                <div class="col-md-6 col-xl-2 wow fadeInUp" data-wow-delay="100ms">
                    <div class="footer-widget footer-widget--links">
                        <h2 class="footer-widget__title">Quick Links</h2><!-- /.footer-widget__title -->
                        <ul class="list-unstyled footer-widget__links">
                            <li><a href="{{ url('/') }}#about">About Us</a></li>
                            <li><a href="{{ url('/') }}#expertise">Our Expertise</a></li>
                            <li><a href="{{ url('/') }}#consult">Engagement</a></li>
                            <li><a href="{{ url('/') }}#contact">Contact</a></li>
                        </ul><!-- /.list-unstyled footer-widget__links -->
                    </div><!-- /.footer-widget -->
                </div><!-- /.col-md-6 -->
                <div class="col-md-6 col-xl-2 wow fadeInUp" data-wow-delay="200ms">
                    <div class="footer-widget footer-widget--links">
                        <h2 class="footer-widget__title">Services</h2><!-- /.footer-widget__title -->
                        <ul class="list-unstyled footer-widget__links">
                            <li><a href="{{ url('/') }}#expertise">Corporate Law</a></li>
                            <li><a href="{{ url('/') }}#expertise">Property Law</a></li>
                            <li><a href="{{ url('/') }}#expertise">Family Law</a></li>
                            <li><a href="{{ url('/') }}#expertise">Criminal Law</a></li>
                        </ul><!-- /.list-unstyled footer-widget__links -->
                    </div><!-- /.footer-widget -->
                </div><!-- /.col-md-6 -->
                <div class="col-md-6 col-xl-4 wow fadeInUp" data-wow-delay="300ms">
                    <div class="footer-widget footer-widget--mail">
                        <h2 class="footer-widget__title">
                            Get in Touch<br> & Stay Connected
                        </h2><!-- /.footer-widget__title -->
                        <p class="footer-widget__text">
                            Contact us for expert legal advice and consultation. We're here to help you navigate your legal needs with integrity and excellence.
                        </p>
                        <div class="footer-widget__contact">
                            <a href="mailto:hello@bremanchambers.com" class="footer-widget__contact__link">
                                <i class="fa fa-envelope"></i> hello@bremanchambers.com
                            </a>
                            <a href="tel:+2332443766010" class="footer-widget__contact__link">
                                <i class="fa fa-phone"></i> +233 244 376 6010
                            </a>
                        </div>
                        <!-- /.footer-widget__text -->
                    </div><!-- /.footer-widget -->
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
            <div class="main-footer__info">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="main-footer__info__inner">
                            <div class="main-footer__info__pin">
                                <i class="fa fa-map-marker-alt"></i>
                            </div>
                            <div class="main-footer__info__location">
                                Accra, Ghana
                            </div>
                            <ul class="list-unstyled main-footer__info__list">
                                <li class="main-footer__info__item">
                                    <div class="main-footer__info__icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="main-footer__info__content">
                                        <p class="main-footer__info__text">
                                            <a href="tel:+2332443766010">+233 244 376 6010</a>
                                        </p><!-- /.contact-one__info__text -->
                                    </div>
                                </li>
                                <li class="main-footer__info__item">
                                    <div class="main-footer__info__icon">
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                    <div class="main-footer__info__content">
                                        <p class="main-footer__info__text">
                                            <a href="mailto:hello@bremanchambers.com">hello@bremanchambers.com</a>
                                        </p><!-- /.contact-one__info__text -->
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="main-footer__info__social">
                            <a href="https://facebook.com" target="_blank" rel="noopener noreferrer">
                                <i class="fa fa-facebook"></i>
                                <span class="sr-only">Facebook</span>
                            </a>
                            <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer">
                                <i class="fa fa-linkedin"></i>
                                <span class="sr-only">LinkedIn</span>
                            </a>
                            <a href="https://twitter.com" target="_blank" rel="noopener noreferrer">
                                <i class="fa fa-twitter"></i>
                                <span class="sr-only">Twitter</span>
                            </a>
                            <a href="https://instagram.com" target="_blank" rel="noopener noreferrer">
                                <i class="fa fa-instagram"></i>
                                <span class="sr-only">Instagram</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container -->
    </div><!-- /.main-footer__top -->
    <div class="main-footer__bottom  wow fadeInUp" data-wow-delay="00ms">
        <div class="container">
            <div class="main-footer__bottom__inner">
                <p class="main-footer__copyright">
                    &copy; Copyright <span class="dynamic-year"></span> by Breman Chambers.
                </p>
            </div><!-- /.main-footer__inner -->
        </div><!-- /.container -->
    </div><!-- /.main-footer__bottom -->
</footer><!-- /.main-footer -->