<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', config('app.name'))</title>
    <meta name="description" content="Бойцовский клуб 'Ягуар'">
    <link rel="stylesheet" href="{{ asset('css/style.css') }} . '?v=1'">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="icon" href="{{ asset('img/ягуар.ico') }}">
    <script src="https://unpkg.com/imask"></script>
</head>
<body>
<div id="site">
    <header class="header">
        <div class="container header__container">
            <nav class="header__nav">
                <div class="header__title">
                    <a href="{{ route('home') }}" class="link-nav link-title">
                        <img src="{{ asset('img/ягуар.svg') }}" alt="Ягуар">
                    </a>
                </div>
                <i id="header__menu" class="fa-solid fa-bars"></i>
                <ul class="header__ul">
                    <li>
                        <a href="{{ route('home') }}"
                           class="link-nav link-home {{ request()->routeIs('home') ? 'active' : '' }}">
                            Главная
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}"
                           class="link-nav {{ request()->routeIs('about') ? 'active' : '' }}">
                            О клубе
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('gallery') }}"
                           class="link-nav {{ request()->routeIs('gallery') ? 'active' : '' }}">
                            Галерея
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('signup') }}"
                           class="link-nav {{ request()->routeIs('signup') ? 'active' : '' }}">
                            Записаться
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="main">
        @yield('content')
    </main>

    <footer class="footer">
        <div class="container footer__container">
            <div class="footer__blocks">
                <div class="footer__info">
                    <div class="footer__info__block">
                        <i class="fa-solid fa-house"></i>
                        <p>г. Уфа, Карла Маркса, 60/1</p>
                    </div>
                    <div class="footer__info__block">
                        <i class="fa-solid fa-clock"></i>
                        <p>08.00 - 22.00 ч.</p>
                    </div>
                    <div class="footer__info__block">
                        <i class="fa-solid fa-phone"></i>
                        <a href="tel:+79872425251" class="link-nav">+7 (917) 400 21-21</a>
                    </div>
                </div>
            </div>
            <p class="footer__copyright">© Ягуар</p>
        </div>
    </footer>
</div>
{{--<div id="back-to-top" class="back-to-top">--}}
{{--    <i class="fa-solid fa-arrow-up"></i>--}}
{{--</div>--}}
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="{{ asset('js/app.js') }}"></script>
@stack('scripts')
</body>
</html>
