@extends('layout.public.master')
@section('content')
    <div class="l-container">
        <h2 class="subtitle">{{ $establishment[0]->name }}</h2>
        <ul class="rslides">
            @foreach(Images::getImageArray($establishment[0]->images) as $image)
                <li><img src="{{ asset('assets' . $image) }}" alt=""></li>
            @endforeach
        </ul>
        <p>{!! $establishment[0]->description !!}</p>
    </div>
    <div class="contact-data l-container">
        <h2 class="subtitle">Información</h2>
        <div class="contact-address icon-pin">{{ $establishment[0]->address }}</div>
        <div class="contact-phone icon-phone">{{ $establishment[0]->phone }}</div>
        <div class="contact-phone icon-type">{{ $establishment[0]->type }}</div>
        <div class="contact-phone icon-mail">{{ $establishment[0]->email }}</div>
    </div>
@stop