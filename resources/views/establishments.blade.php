@extends('layout.public.master')
@section('content')
    <div class="l-container">
        <h2 class="subtitle">Establecimientos</h2>
        @foreach($establishments as $establishment)
            <div class="list-establishment">
                <div class="establishment-container">
                    <img src="{{ asset('assets/img/corozo1.jpg') }}" alt="">
                    <div class="establishment-description">
                        <h3 class="establishment-name">{{ $establishment->name }}</h3>
                        <p>{{ $establishment->type }}</p>
                        <p>{{ $establishment->address }}</p>
                        <a href="/establishment/{{ $establishment->id }}" class="staff-member__button">Ver más</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@stop