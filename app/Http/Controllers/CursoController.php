<?php
namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

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
    public function store(Request $res){
        $curso = new Curso();
        $curso->name = $res->name;
        $curso->description = $res->description;
        $curso->save();
        return redirect()->route('cursos.show', $curso);
    }
}