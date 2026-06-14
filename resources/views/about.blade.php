@extends('layout')

@section('title', 'О клубе - Бойцовский клуб «Ягуар»')

@section('content')
    <section class="page-hero">
        <div class="container page-hero__container">
            <p class="section-label">О клубе</p>
            <h1>Место, где формируется характер</h1>
            <p>Бойцовский клуб «Ягуар» объединяет тренировки, дисциплину и атмосферу команды. Здесь занимаются новички, дети, взрослые и спортсмены с опытом.</p>
        </div>
    </section>

    <section class="about__section">
        <div class="container about__content">
            <div class="about__text card-dark">
                <p>Бойцовский клуб «Ягуар» более 15 лет помогает спортсменам становиться сильнее как физически, так и психологически. Клуб объединяет людей, которых вдохновляют спорт, развитие и достижение новых целей.</p>
<p>Тренировочный процесс строится на сочетании технической подготовки, дисциплины и индивидуального подхода к каждому спортсмену. В клубе занимаются как начинающие, так и опытные бойцы.</p>
<p>«Ягуар» — это не просто зал для тренировок, а команда единомышленников, где воспитываются характер, уверенность и победный настрой.</p> 
<p>Для регулярных тренировок: оборудованный зал, необходимый спортивный инвентарь, раздевалки и зона отдыха.</p>
            </div>
            <div class="about__image">
                <img src="{{ asset('img/photo_2025-10-06_16-50-38.jpg') }}" alt="Бойцовский клуб Ягуар">
            </div>
        </div>
    </section>

    <section class="story__section">
        <div class="container story__grid">
            <div>
                <p class="section-label">Развитие</p>
                <h2>История клуба</h2>
              <p class="section-text">Бойцовский клуб «Ягуар» более 15 лет объединяет спортсменов, тренеров и любителей единоборств. За это время клуб прошёл путь от небольшой тренировочной группы до сильной команды, воспитавшей чемпионов и призёров соревнований различного уровня.

Воспитанники клуба регулярно участвуют в турнирах, проходят учебно-тренировочные сборы в России и за рубежом, а также достойно представляют клуб на международной арене.
</p>
            </div>
            <div class="timeline">
                <div class="timeline__item">
    <span>2010</span>
    <p>Основание бойцовского клуба «Ягуар» и начало тренировочной деятельности.</p>
</div>

<div class="timeline__item">
    <span>2014</span>
    <p>Формирование сборной команды клуба и первые выезды на крупные межрегиональные соревнования.</p>
</div>

<div class="timeline__item">
    <span>2018</span>
    <p>Проведение учебно-тренировочных сборов в Таиланде и участие спортсменов клуба в международных турнирах.</p>
</div>

<div class="timeline__item">
    <span>2021</span>
    <p>Сборная команда клуба проходит подготовку в Испании, спортсмены успешно выступают на международной арене.</p>
</div>

<div class="timeline__item">
    <span>2024</span>
    <p>Среди воспитанников клуба — чемпионы Европы, чемпионы России, мастера спорта и победители международных соревнований.</p>
            </div>
        </div>
    </section>

    <section class="contact__section">
        <div class="container">
            <div class="section-heading">
                <p class="section-label">Контакты</p>
                <h2>Как нас найти</h2>
            </div>
            <div class="contact__info">
                <div class="contact__item"><span>Адрес</span><p>г. Уфа, Карла Маркса, 60/1</p></div>
                <div class="contact__item"><span>Телефон</span><p><a href="tel:+79174002121">+7 (917) 400 21-21</a></p></div>
                <div class="contact__item"><span>Email</span><p><a href="mailto:info@yaguar-club.ru">info@yaguar-club.ru</a></p></div>
                <div class="contact__item"><span>Режим</span><p>Ежедневно с 08:00 до 22:00</p></div>
            </div>
            <div class="contact__map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2302.929319012479!2d55.95190787716417!3d54.74604566908119!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x43d93a123e222f73%3A0x792f5e1fb1556f6a!2sUlitsa%20Karla%20Marksa%2C%2060%2F1%2C%20Ufa%2C%20Respublika%20Bashkortostan%2C%20450091!5e0!3m2!1sen!2sru!4v1772294744868!5m2!1sen!2sru" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>
@endsection
