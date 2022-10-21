@extends('layouts.plantilla')

@section('title','index')

@section('content')
    <h1>Bienvenido a la página de inicio curso</h1>
    <a href="{{route('cursos.create')}}">Crear curso</a>
    <h2>Descripción: </h2>
    <ul>
        @foreach ($cursos as $curso)
            <li>
                <a href="{{route('cursos.show',$curso->id)}}">{{$curso->name}}</a>
            </li>
            
        @endforeach
    </ul>
@endsection
