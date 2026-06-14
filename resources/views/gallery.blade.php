@extends('layout')

@section('title', 'Галерея - Бойцовский клуб «Ягуар»')

@section('content')
    <section class="page-hero page-hero--compact">
        <div class="container page-hero__container">
            <p class="section-label">Галерея</p>
            <h1>Атмосфера клуба</h1>
            <p>Фотографии тренировок, зала и спортивной жизни бойцовского клуба «Ягуар».</p>
        </div>
    </section>

    <section class="gallery__section">
        <div class="container">
             <div class="gallery__grid">

    <div class="gallery__item">
        <img src="{{ asset('img/1.jpg') }}" alt="Фото клуба">
    </div>

    <div class="gallery__item">
        <img src="{{ asset('img/2.jpg') }}" alt="Фото клуба">
    </div>

    <div class="gallery__item">
        <img src="{{ asset('img/3.jpg') }}" alt="Фото клуба">
    </div>

    <div class="gallery__item">
        <img src="{{ asset('img/4.jpg') }}" alt="Фото клуба">
    </div>

</div>

