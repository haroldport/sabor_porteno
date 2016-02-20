@extends('layout.public.master')
@section('content')
    <div class="who l-container">
        <h2 class="subtitle">Quiénes Somos?</h2>
        <p>Una empresa joven y dinámica que entiende la creación de contenidos de calidad como el fundamento del futuro
            de Internet. Son muchos ya los visitantes fieles de nuestro sitio y deseamos que sean muchos más en el
            futuro.</p>
        <p>Nuestros proyectos inmediatos: ampliación de nuestra sitio de establecimientos de comida en Guayaquil
            con información más completa y elementos multimedia; incorporación de nuevos
            servicios; creación de un foro de documentación y consultas; y muchos más, siempre al servicio de nuestros
            visitantes.</p>
        <h2 class="subtitle">Equipo</h2>
        <div class="staff-container">
            <div class="staff-member">
                <img src="{{asset('assets/img/staff1.jpg')}}" alt="" class="staff-member__img">
                <h3 class="staff-member__name">Brayam</h3>
                <a href="#" class="staff-member__button">Contactar</a>
            </div>
            <div class="staff-member">
                <img src="{{asset('assets/img/staff2.jpeg')}}" alt="" class="staff-member__img">
                <h3 class="staff-member__name">Brittany</h3>
                <a href="#" class="staff-member__button">Contactar</a>
            </div>
            <div class="staff-member">
                <img src="{{asset('assets/img/staff3.jpg')}}" alt="" class="staff-member__img">
                <h3 class="staff-member__name">Briggit</h3>
                <a href="#" class="staff-member__button">Contactar</a>
            </div>
            <div class="staff-member">
                <img src="{{asset('assets/img/staff4.jpg')}}" alt="" class="staff-member__img">
                <h3 class="staff-member__name">Kimberly</h3>
                <a href="#" class="staff-member__button">Contactar</a>
            </div>
        </div>
    </div>
@stop