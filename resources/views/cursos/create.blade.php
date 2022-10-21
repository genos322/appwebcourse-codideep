@extends('layouts.plantilla')

@section('title','Crear curso' )

@section('content')
    <h1>Bienvenido a la página crear curso<?php echo uniqid()?> </h1>
    <a href="{{route('cursos.index')}}">Volver</a>
    <form action="{{route('cursos.store')}}" method="POST">
        {{-- {{ csrf_field() }} para el token de seguridad --}}
        {{ csrf_field() }}
        <label>
            Nombre:
            <br>
            <input type="text" name="name">
        </label>
        <br>
        <label>
            Descripción:
            <br>
            <textarea name="description" id="" cols="30" rows="10"></textarea>
        </label>
        <br>
        <button type="submit">Enviar form</button>
    </form>
@endsection
