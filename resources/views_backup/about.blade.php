@extends('layout')

@section('title', 'О клубе - Бойцовский клуб «Ягуар»')

@section('content')
    <section class="about__section">
        <div class="container">
            <h1>О клубе</h1>
            <div class="about__content">
                <div class="about__text">
                    <p>Бойцовский клуб «Ягуар» был основан в 2020 году. За годы работы мы подготовили множество спортсменов.</p>
                    <p>Мы работаем как с новичками, так и с профессиональными спортсменами.</p>
                    <p>В нашем клубе созданы все условия для эффективных тренировок: просторный зал, современное оборудование, раздевалки с душевыми, а также зона отдыха.</p>
                </div>
                @if($photos->count() > 0)
                    <div class="about__image">
                        <img src="{{ asset('/img/photo_2025-10-06_16-50-38.jpg') }}" alt="Ягуар">
                    </div>
                @endif
            </div>
        </div>
    </section>

    <section class="contact__section">
        <div class="container">
            <h2>Контактная информация</h2>
            <div class="contact__info">
                <div class="contact__item">
                    <i class="fa-solid fa-location-dot"></i>
                    <div>
                        <h3>Адрес</h3>
                        <p>г. Уфа, Карла Маркса, 60/1</p>
                    </div>
                </div>
                <div class="contact__item">
                    <i class="fa-solid fa-phone"></i>
                    <div>
                        <h3>Телефон</h3>
                        <p><a href="tel:+79998887766">+7 (917) 400 21-21</a></p>
                    </div>
                </div>
                <div class="contact__item">
                    <i class="fa-solid fa-envelope"></i>
                    <div>
                        <h3>Email</h3>
                        <p><a href="mailto:info@yaguar-club.ru">info@yaguar-club.ru</a></p>
                    </div>
                </div>
                <div class="contact__item">
                    <i class="fa-solid fa-clock"></i>
                    <div>
                        <h3>Режим работы</h3>
                        <p>Ежедневно с 08:00 до 22:00</p>
                    </div>
                </div>
            </div>
            <div class="contact__map">
                <!-- Здесь можно вставить карту -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2302.929319012479!2d55.95190787716417!3d54.74604566908119!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x43d93a123e222f73%3A0x792f5e1fb1556f6a!2sUlitsa%20Karla%20Marksa%2C%2060%2F1%2C%20Ufa%2C%20Respublika%20Bashkortostan%2C%20450091!5e0!3m2!1sen!2sru!4v1772294744868!5m2!1sen!2sru" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>
@endsection
