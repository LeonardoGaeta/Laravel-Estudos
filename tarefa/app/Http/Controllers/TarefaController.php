<?php

namespace App\Http\Controllers;

use App\Models\Tarefa;
use Illuminate\Http\Request;

class TarefaController extends Controller
{
    public function index() {
        $tarefas = Tarefa::paginate(2);
        return view('index')->with('tarefas', $tarefas);
    }

    public function create() {
        return view('create');
    }

    public function details(Tarefa $tarefa) {
        return view('details')->with('tarefa', $tarefa);
    }

    public function edit (string $id) {
        $tarefa = Tarefa::findOrFail($id);
        return view('edit')->with('tarefa', $tarefa);
    }

    public function store(Request $request) {
        $tarefa_validada = $request->validate([
            'nome' => 'required|max:200'
        ]);

        $tarefa = Tarefa::create($tarefa_validada);

        session()->flash('success', 'Tarefa criada com sucesso!');

        return redirect('/');
    }

    public function update(Request $request, string $id) {
        $completada = $request->has('completada') ? true : false;

        $validated = $request->validate([
            'nome' => 'required|max:200'
        ]);

        $tarefa = Tarefa::findOrFail($id);

        $tarefa->update([
            'nome' => $validated['nome'],
            'completada' => $completada
        ]);

        session()->flash('success', 'Tarefa atualizada com sucesso!');

        return redirect('/');
    }

    public function delete(string $id) {
        $tarefa = Tarefa::findOrFail($id);
        $tarefa->delete();

        return redirect('/');
    }
}

