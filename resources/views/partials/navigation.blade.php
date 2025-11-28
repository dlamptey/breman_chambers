<header class="main-header sticky-header sticky-header--normal">
    <div class="container-fluid">
        <div class="main-header__inner">
            <div class="main-header__logo">
                <a href="{{ url('/') }}" class="d-inline-flex align-items-center gap-3 text-decoration-none">
                    <img
                        src="{{ asset('assets/images/logo.png') }}"
                        alt="Breman Chambers"
                        class="img-fluid"
                        style="max-height: 64px; width: auto;"
                    >
                 
                </a>
            </div><!-- /.main-header__logo -->
            @php
                $homeUrl = url('/');
                $onHome = url()->current() === $homeUrl;
                $anchor = static function (string $section) use ($onHome, $homeUrl): string {
                    return $onHome ? "#{$section}" : "{$homeUrl}#{$section}";
                };

                $navigationLinks = [
                    [
                        'label' => 'Home',
                        'href' => $homeUrl,
                    ],
                    [
                        'label' => 'About',
                        'href' => $anchor('about'),
                    ],
                    [
                        'label' => 'Expertise',
                        'href' => $anchor('expertise'),
                    ],
                    [
                        'label' => 'Engagement',
                        'href' => $anchor('consult'),
                    ],
                    [
                        'label' => 'Contact',
                        'href' => 'mailto:hello@bremanchambers.com',
                    ],
                ];
            @endphp

            <nav class="main-header__nav main-menu">
                <ul class="main-menu__list">
                    @foreach ($navigationLinks as $link)
                        @php
                            $isAnchor = \Illuminate\Support\Str::startsWith($link['href'], '#');
                            $isHomeAnchor = \Illuminate\Support\Str::startsWith($link['href'], "{$homeUrl}#");

                            if ($isAnchor) {
                                $isCurrent = false;
                            } elseif ($isHomeAnchor) {
                                $isCurrent = $onHome;
                            } else {
                                $isCurrent = url()->current() === $link['href'];
                            }
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
                    <a href="{{ $anchor('consult') }}" class="procounsel-btn">
                        <i>Start Consultation</i><span>Start Consultation</span>
                    </a><!-- /.thm-btn main-header__btn -->
                </div>
                <div class="main-header__info">
                    <div class="main-header__info__icon">
                        <i class="icon-phone-1"></i>
                        <span class="main-header__info__icon__zoom">
                            <i class="icon-phone-1"></i>
                        </span>
                    </div>
                    <div>
                        <span class="main-header__info__text">Call anytime</span>
                        <a href="tel:+233244376601 0">+233 244 376 6010</a>
                    </div>
                </div>
            </div><!-- /.main-header__right -->
        </div><!-- /.main-header__inner -->
    </div><!-- /.container-fluid -->
</header><!-- /.main-header -->