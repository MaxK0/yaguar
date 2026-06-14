@extends('layout')

@section('title', 'Главная - Бойцовский клуб «Ягуар»')

@section('content')
    <!-- Секция с общей информацией -->
    <section class="title__section">
        <div class="container">
            <h1>Бойцовский клуб
                <br>
                <span class="title__yaguar">Ягуар</span>
            </h1>
            <p class="title__desc">Профессиональные тренировки для всех уровней подготовки</p>
            <a href="{{ route('signup') }}" class="btn-main">Записаться на тренировку</a>
        </div>
    </section>

    <!-- Секция с превью фотографий -->
    <section class="gallery__section">
        <div class="container">
            <h2>Наши тренировки</h2>
            @if($photos->count() > 1)
                <div class="gallery__preview">
                    @foreach($photos->take(3) as $photo)
                        <div class="gallery__item">
                            <img src="{{ $photo->url }}" alt="{{ $photo->title }}">
                        </div>
                    @endforeach
                </div>
            @endif
            <a href="{{ route('gallery') }}" class="btn-main">Смотреть всю галерею</a>
        </div>
    </section>

    <!-- Секция с информацией о преимуществах -->
    <section class="advantages__section">
        <div class="container">
            <h2>Почему выбирают нас</h2>
            <div class="advantages__list">
                <div class="advantage__item">
                    <i class="fa-solid fa-dumbbell"></i>
                    <h3>Современное оборудование</h3>
                    <p>Полностью оборудованный зал с профессиональным инвентарем</p>
                </div>
                <div class="advantage__item">
                    <i class="fa-solid fa-users"></i>
                    <h3>Опытные тренеры</h3>
                    <p>Наши инструкторы имеют многолетний опыт и спортивные звания</p>
                </div>
                <div class="advantage__item">
                    <i class="fa-solid fa-clock"></i>
                    <h3>Удобное расписание</h3>
                    <p>Тренировки проводятся с 10:00 до 23:00 без выходных</p>
                </div>
            </div>
        </div>
    </section>
@endsection
