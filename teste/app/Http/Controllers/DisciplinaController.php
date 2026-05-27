<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Disciplina;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Integer;

class DisciplinaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Disciplina::with('curso')->get();
        return view('disciplina.index', compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cursos = Curso::all();
        if (!$cursos->isEmpty()) {
            return view('disciplina.create', compact('cursos'));
        }

        // return view('mensagem', ['mensagem' => 'Cadastre um Curso Antes', 'rota' => 'disciplina.index']);
        return view('erro', ['mensagem' => 'Cadastre um Curso Antes', 'rota' => 'disciplina.index']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $disciplina = new Disciplina();
        $disciplina->nome = $request->nome;
        $disciplina->carga_horaria = $request->carga_horaria;
        $disciplina->id_curso = (int) $request->id_curso;

        $disciplina->save();

        return redirect()->route('disciplina.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id_disciplina)
    {
        $disciplina = Disciplina::find($id_disciplina);

        if (isset($disciplina)) {
            return view('disciplina.show', compact(['disciplina']));
        }

        return view('erro', ['mensagem' => 'Disciplina não Encontrada', 'rota' => 'disciplina.index']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id_disciplina)
    {
        $disciplina = Disciplina::with('curso')->find($id_disciplina);
        $cursos = Curso::all();

        if (isset($disciplina)) {
            return view('disciplina.edit', compact(['disciplina', 'cursos']));
        }

        return view('erro', ['mensagem' => 'Disciplina não Encontrada', 'rota' => 'disciplina.index']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id_disciplina)
    {
        $disciplina = Disciplina::with('curso')->find($id_disciplina);

        if (isset($disciplina)) {
            $disciplina->nome = $request->nome;
            $disciplina->carga_horaria = $request->carga_horaria;
            $disciplina->id_curso = (int) $request->id_curso;
            $disciplina->save();
            return redirect()->route('disciplina.index');
        }

        return redirect()->route('erro', ['mensagem' => 'Disciplina não Encontrada', 'rota' => 'disciplina.index']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id_disciplina)
    {
        $disciplina = Disciplina::find($id_disciplina);

        if (isset($disciplina)) {
            $disciplina->delete();
            return redirect()->route('disciplina.index');
        }

        return view('erro', ['mensagem' => 'Disciplina não Encontrada', 'rota' => 'disciplina.index']);
    }
}
