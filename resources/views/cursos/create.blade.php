@extends('layouts.plantilla')

@section('title','Crear curso' )

@section('content')
    <h1>Bienvenido a la página crear curso<?php echo uniqid()?> </h1>
    <a href="{{route('cursos.index')}}">Volver</a>
@endsection
