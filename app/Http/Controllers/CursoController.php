<?php
namespace App\Http\Controllers;

class CursoController extends Controller{

    public function index(){
        return view('cursos.index');
    }
    public function create(){
        return view('cursos.create');
    }
    public function show($curso){
        return view('cursos.show',compact('curso') );//compact() es un reempalzo de ['curso' => $curso]
    }
}