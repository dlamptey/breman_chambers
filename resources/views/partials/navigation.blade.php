<header class="main-header sticky-header sticky-header--normal">
    <div class="container-fluid">
        <div class="main-header__inner">
            <div class="main-header__logo">
                <a href="{{ url('/') }}" class="d-inline-flex align-items-center gap-3 text-decoration-none">
                    <div style="background-color: white; padding: 12px 18px; border-radius: 8px; display: inline-flex; align-items: center;">
                        <img
                            src="{{ asset('assets/images/logo.png') }}"
                            alt="Breman Chambers"
                            class="img-fluid"
                            style="max-height: 85px; width: auto;"
                        >
                    </div>
                 
                </a>
            </div><!-- /.main-header__logo -->
            @php
                $homeUrl = url('/');
                $onHome = url()->current() === $homeUrl;

                $navigationLinks = [
                    [
                        'label' => 'Home',
                        'href' => $homeUrl,
                    ],
                    [
                        'label' => 'About',
                        'href' => url('/about'),
                    ],
                    [
                        'label' => 'Expertise',
                        'href' => url('/expertise'),
                    ],
                    [
                        'label' => 'Engagement',
                        'href' => url('/engagement'),
                    ],
                    [
                        'label' => 'Contact',
                        'href' => url('/contact'),
                    ],
                ];
            @endphp

            <nav class="main-header__nav main-menu">
                <ul class="main-menu__list">
                    @foreach ($navigationLinks as $link)
                        @php
                            $isCurrent = url()->current() === $link['href'];
                        @endphp
                        <li @class(['current' => $isCurrent])>
                            <a href="{{ $link['href'] }}">{{ $link['label'] }}</a>
                            </li>
                    @endforeach
                </ul>
            </nav><!-- /.main-header__nav -->
            <div class="main-header__right">
                <div class="mobile-nav__btn mobile-nav__toggler">
                    <span></span>
                    <span></span>
                    <span></span>
                </div><!-- /.mobile-nav__toggler -->
                <div class="main-header__btn">
                    <a href="{{ url('/engagement') }}" class="procounsel-btn">
                        <i>Start Consultation</i><span>Start Consultation</span>
                    </a><!-- /.thm-btn main-header__btn -->
                </div>
                <div class="main-header__info">
                    <div class="main-header__info__icon">
                        <i class="fa fa-phone"></i>
                        <span class="main-header__info__icon__zoom">
                            <i class="fa fa-phone"></i>
                        </span>
                    </div>
                    <div>
                        <span class="main-header__info__text">Call anytime</span>
                        <a href="tel:+2332443766010">+233 244 376 6010</a>
                    </div>
                </div>
            </div><!-- /.main-header__right -->
        </div><!-- /.main-header__inner -->
    </div><!-- /.container-fluid -->
</header><!-- /.main-header -->