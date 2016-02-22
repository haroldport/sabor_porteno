@extends('layout.public.master')
@section('content')
    <div class="l-container">
        <h2 class="subtitle">{{ $establishment[0]->name }}</h2>
        <p>{!! $establishment[0]->description !!}</p>
    </div>
@stop