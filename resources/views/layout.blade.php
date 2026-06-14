<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', config('app.name'))</title>
    <meta name="description" content="Бойцовский клуб «Ягуар» — тренировки для детей и взрослых в Уфе">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') . '?v=2026-06-14-1' }}">
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
                <a href="{{ route('home') }}" class="brand" aria-label="Бойцовский клуб Ягуар">
                    <img src="{{ asset('img/logo-yaguar.svg') }}" alt="Ягуар" class="brand__logo">
                    <span class="brand__text">
                        <span class="brand__name">ЯГУАР</span>
                        <span class="brand__sub">бойцовский клуб</span>
                    </span>
                </a>

                <i id="header__menu" class="fa-solid fa-bars"></i>
                <ul class="header__ul">
                    <li><a href="{{ route('home') }}" class="link-nav {{ request()->routeIs('home') ? 'active' : '' }}">Главная</a></li>
                    <li><a href="{{ route('about') }}" class="link-nav {{ request()->routeIs('about') ? 'active' : '' }}">О клубе</a></li>
                    <li><a href="{{ route('gallery') }}" class="link-nav {{ request()->routeIs('gallery') ? 'active' : '' }}">Галерея</a></li>
                    <li><a href="{{ route('signup') }}" class="link-nav link-nav--button {{ request()->routeIs('signup') ? 'active' : '' }}">Записаться</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="main">
        @yield('content')
    </main>

    <footer class="footer">
        <div class="container footer__container">
            <div class="footer__top">
                <a href="{{ route('home') }}" class="brand brand--footer">
                    <img src="{{ asset('img/logo-yaguar.svg') }}" alt="Ягуар" class="brand__logo">
                    <span class="brand__text">
                        <span class="brand__name">ЯГУАР</span>
                        <span class="brand__sub">сила. дисциплина. характер.</span>
                    </span>
                </a>
                <a href="{{ route('signup') }}" class="btn-main btn-main--light">Записаться на тренировку</a>
            </div>
            <div class="footer__grid">
                <div class="footer__info__block"><span>Адрес</span><p>г. Уфа, Карла Маркса, 60/1</p></div>
                <div class="footer__info__block"><span>Режим</span><p>Ежедневно с 08:00 до 22:00</p></div>
                <div class="footer__info__block"><span>Телефон</span><a href="tel:+79174002121">+7 (917) 400 21-21</a></div>
            </div>
            <p class="footer__copyright">© {{ date('Y') }} Бойцовский клуб «Ягуар»</p>
        </div>
    </footer>
</div>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="{{ asset('js/app.js') }}"></script>
@stack('scripts')
</body>
</html>
