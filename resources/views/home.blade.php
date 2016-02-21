@extends('layout.public.master')
@section('content')
    @include('layout.public.banner')
    <main>
        <div class="establishments">
            @foreach($establishments as $establishment)
                <div class="establishment">
                    <h3 class="establishment__title">{{ $establishment->name }}</h3>
                </div>
            @endforeach
        </div>

        <div class="map-container l-container">
            <h2 class="subtitle">Establecimientos</h2>

            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d6705.139383496163!2d-79.89208902611306!3d-2.1916643651287773!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sec!4v1455775820261"
                        width="100%" height="450"></iframe>
            </div>
        </div>
    </main>
@stop

