@extends('layout')

@section('title', 'Галерея - Бойцовский клуб «Ягуар»')

@section('content')
    <section class="gallery__section">
        <div class="container">
            <h1>Галерея</h1>
            @if($photos->count() > 0)
                <div class="gallery__grid">
                    @foreach($photos as $photo)
                        <div class="gallery__item">
                            <img src="{{ $photo->url }}" alt="{{ $photo->title }}">
                        </div>
                    @endforeach
                </div>
            @else
                <p>Фотографии пока не загружены</p>
            @endif
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Инициализация Swiper для галереи
            const swiper = new Swiper('.gallery__grid', {
                slidesPerView: 1,
                spaceBetween: 10,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                breakpoints: {
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    768: {
                        slidesPerView: 3,
                        spaceBetween: 30,
                    },
                    1024: {
                        slidesPerView: 3,
                        spaceBetween: 30,
                    },
                },
            });
        });
    </script>
@endpush
