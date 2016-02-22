@extends('layout.public.master')
@section('content')
    <div class="contact l-container">
        <div class="contact-data">
            <h2 class="subtitle">Contacto</h2>
            <div class="contact-address icon-facebook">Fan Page</div>
            {{--<div class="contact-address icon-pin">9 de Octubre y Chimborazo</div>--}}
            {{--<div class="contact-phone icon-phone">042 480 600</div>--}}
            {{--<div class="contact-phone icon-mobile">098 869 3090</div>--}}
        </div>
        <div class="contact-form-container">
            <h2 class="subtitle">Escríbenos</h2>
            <form action="" method="post" class="contact-form">
                <label for="name">Nombre</label>
                <input type="text" id="name" name="name">
                <label for="email">Su correo</label>
                <input type="email" id="email" name="email">
                <label for="phone">Su teléfono</label>
                <input type="text" id="phone" name="phone">
                <label for="message">Su mensaje</label>
                <textarea name="message" id="message" cols="30" rows="10"></textarea>
                <input type="submit" value="Enviar" class="button secundary">
            </form>
        </div>
    </div>
@stop

