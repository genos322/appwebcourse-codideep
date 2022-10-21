@extends('layouts.plantilla')

@section('title','Cursos' .$cursos->name)

@section('content')
    <h1>Bienvenido al curso de : {{$cursos->name}} </h1>
@endsection
