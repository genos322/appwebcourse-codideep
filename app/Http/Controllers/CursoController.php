<?php
namespace App\Http\Controllers;

use App\Models\Curso;

class CursoController extends Controller{

    public function index(){
        $cursos = Curso::paginate();
        return view('cursos.index', compact('cursos'));
    }
    public function create(){
        return view('cursos.create');
    }
    public function show($id){
        $cursos = Curso::find($id);
        return view('cursos.show',compact('cursos') );//compact() es un reempalzo de ['curso' => $curso]
    }
}