@extends('layout')

@section('title', 'Главная - Бойцовский клуб «Ягуар»')

@section('content')
    <section class="hero hero--home">
        <div class="hero__bg">
            <img src="{{ asset('img/photo_2025-10-06_16-50-38.jpg') }}" alt="Бойцовский клуб Ягуар">
        </div>
        <div class="container hero__container">
            <div class="hero__content">
                <p class="section-label">Тайский бокс • кикбоксинг • функциональная подготовка</p>
                <h1>Бойцовский клуб<br><span>Ягуар</span></h1>
                <p class="hero__text">Тренировки для детей и взрослых: дисциплина, физическая форма, уверенность и бойцовский характер.</p>
                <div class="hero__actions">
                    <a href="{{ route('signup') }}" class="btn-main">Записаться на тренировку</a>
                    <a href="{{ route('about') }}" class="btn-secondary">Узнать о клубе</a>
                </div>
            </div>
        </div>
    </section>

    <section class="stats__section">
        <div class="container stats__grid">
            <div class="stat__item"><strong>2010</strong><span>год основания</span></div>
            <div class="stat__item"><strong>3</strong><span>направления тренировок</span></div>
            <div class="stat__item"><strong>08:00–22:00</strong><span>ежедневный режим работы</span></div>
            <div class="stat__item"><strong>Уфа</strong><span>Карла Маркса, 60/1</span></div>
        </div>
    </section>

    <section class="photo-cards__section">
        <div class="container">
            <div class="section-heading">
                <p class="section-label">Преимущества</p>
                <h2>Почему выбирают нас</h2>
            </div>
            <div class="photo-cards">
                <article class="photo-card">
                    <img src="{{ asset('img/1.jpg') }}" alt="Тренировочный зал">
                    <div class="photo-card__content"><span>01</span><h3>Сильная тренировочная база</h3><p>Зал, инвентарь и условия для регулярных занятий и подготовки спортсменов.</p></div>
                </article>
                <article class="photo-card">
                    <img src="{{ asset('img/glavniitrener.jpg') }}" alt="Тренеры клуба">
                    <div class="photo-card__content"><span>02</span><h3>Тренеры и наставничество</h3><p>Тренировочный процесс строится с учётом уровня подготовки и целей спортсмена.</p></div>
                </article>
                <article class="photo-card">
                    <img src="{{ asset('img/detyaphoto.jpg') }}"  alt="Групповые занятия">
                    <div class="photo-card__content"><span>03</span><h3>Группы для разных возрастов</h3><p>Занятия подходят новичкам, детям, взрослым и спортсменам с опытом.</p></div>
                </article>
            </div>
        </div>
    </section>

    <section class="story__section">
        <div class="container story__grid">
            <div>
                <p class="section-label">История</p>
                <h2>История клуба</h2>
                <p class="section-text">
    Бойцовский клуб «Ягуар» работает с 2010 года и является одним из известных центров подготовки спортсменов по тайскому боксу и кикбоксингу.
</p>

<p class="section-text">
    За годы работы клуб воспитал победителей и призёров всероссийских и международных соревнований, чемпионов Европы и России, а также мастеров спорта.
</p>

<p class="section-text">
    Сегодня «Ягуар» продолжает развивать спортивные традиции и готовить новое поколение бойцов.
</p>
            </div>
            <div class="timeline">
             <div class="timeline__item">
    <span>2010</span>
    <p>Основание бойцовского клуба «Ягуар» и начало тренировочной деятельности.</p>
</div>


<div class="timeline__item">
    <span>2014</span>
    <p>Первые успешные выступления спортсменов на крупных турнирах.</p>
</div>

<div class="timeline__item">
    <span>2018</span>
    <p>Подготовка чемпионов России и призёров всероссийских соревнований.</p>
</div>

<div class="timeline__item">
    <span>2024</span>
    <p>Среди воспитанников клуба — чемпионы Европы, мастера спорта и победители престижных турниров.</p>
</div>
            </div>
        </div>
    </section>
<section class="club-life__section">
    <div class="container">
        <div class="section-heading">
            <p class="section-label">Атмосфера</p>
            <h2>Клуб — это команда</h2>
        </div>

        <div class="club-life__grid">
            <div class="club-life__text">
                <p>
                    В бойцовском клубе «Ягуар» тренируются дети, подростки и взрослые.
                    Мы развиваем не только физическую форму, но и дисциплину,
                    уверенность в себе и бойцовский характер.
                </p>

                <p>
                    Каждый спортсмен проходит свой путь: от первых тренировок
                    до уверенных выступлений и спортивных достижений.
                </p>
            </div>

            <div class="club-life__quote">
                «Сильный характер формируется на тренировке»
            </div>
        </div>
    </div>
</section>
    <section class="coaches__section">
        <div class="container">
            <div class="section-heading">
                <p class="section-label">Команда</p>
                <h2>Тренерский состав</h2>
            </div>
            <div class="coaches__grid">
                <article class="coach-card"><div class="coach-card__photo"><img src="{{ asset('img/coach3.jpg') }}" alt="Тренер клуба"></div><h3>Тренер клуба</h3><p>Ударная техника, работа в парах, ОФП и подготовка спортсменов любого возраста.</p></article>
                <article class="coach-card"><div class="coach-card__photo"><img src="{{ asset('img/coach1.jpg') }}" alt="Тренер клуба">></div><h3>Тренер клуба</h3><p>Постановка комбинаций, работа на лапах, спарринги и развитие бойцовских навыков.</p></article>
                <article class="coach-card"><div class="coach-card__photo"><img src="{{ asset('img/coach2.jpg') }}" alt="Тренер клуба">></div><h3>Тренер клуба</h3><p>Клинч, коленная техника, тактическая подготовка и соревновательная практика.</p></article>
            </div>
        </div>
    </section>

   <section class="gallery__section gallery__section--home">
    <div class="container">
        <div class="section-heading section-heading--row">
            <div>
                <p class="section-label">Атмосфера</p>
                <h2>Фотографии клуба</h2>
            </div>

            <a href="{{ route('gallery') }}" class="btn-secondary">Смотреть галерею</a>
        </div>

        <div class="gallery__preview gallery__preview--masonry">
            <div class="gallery__item">
                <img src="{{ asset('img/1.jpg') }}" alt="Фото клуба">
            </div>

            <div class="gallery__item">
                <img src="{{ asset('img/2.jpg') }}" alt="Тренировка">
            </div>

            <div class="gallery__item">
                <img src="{{ asset('img/3.jpg') }}" alt="Команда клуба">
            </div>

            <div class="gallery__item">
                <img src="{{ asset('img/4.jpg') }}" alt="Зал клуба">
            </div>
        </div>
    </div>
</section>
