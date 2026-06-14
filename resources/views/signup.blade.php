@extends('layout')

@section('title', 'Запись на тренировку - Бойцовский клуб «Ягуар»')

@section('content')
    <section class="signup__section">
        <div class="container signup__content">
            <div class="signup__info">
                <p class="section-label">Запись</p>
                <h1>Начни тренировку в «Ягуаре»</h1>
                <p>Оставьте контактные данные, и администратор клуба свяжется с вами для подтверждения записи и подбора удобного времени.</p>
                <div class="signup__benefits">
                    <p>Подходит для новичков и спортсменов с опытом</p>
                    <p>Детские и взрослые группы</p>
                    <p>Индивидуальный подход к целям спортсмена</p>
                </div>
            </div>
            <div class="signup__form">
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form class="form" action="{{ route('signup.store') }}" method="POST">
                    @csrf
                    <div class="form-group"><label for="name">Имя</label><input type="text" id="name" name="name" class="form-control" placeholder="Введите имя" required></div>
                    <div class="form-group"><label for="phone">Номер телефона</label><input type="tel" id="phone" name="phone" class="form-control" placeholder="+7 (999) 888-77-66" required></div>
                    <div class="form-group"><label for="age">Возраст</label><input type="number" id="age" name="age" class="form-control" min="10" max="99" placeholder="20" required></div>
                    <div class="form-group"><label for="goal">Цель тренировок</label><select id="goal" name="goal" class="form-control" required><option value="">Выберите цель</option><option value="Общая физическая подготовка">Общая физическая подготовка</option><option value="Похудение">Похудение</option><option value="Набор мышечной массы">Набор мышечной массы</option><option value="Подготовка к соревнованиям">Подготовка к соревнованиям</option><option value="Самооборона">Самооборона</option><option value="Другое">Другое</option></select></div>
                    <button type="submit" class="btn-main">Отправить заявку</button>
                </form>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const phoneInput = document.getElementById('phone');
            IMask(phoneInput, { mask: '+{7} (000) 000-00-00' });
        });
    </script>
@endpush
